<?php
/**
 * TablePress Scoped Headers Plugin.
 *
 * @package TablePress_Scoped_Headers
 * @link    https://equalizedigital.com/
 * @since   1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       TablePress Scoped Headers Plugin
 * Plugin URI:        https://equalizedigital.com/
 * Description:       Adds scope attributes to table headers in TablePress tables for improved accessibility.
 * Version:           1.0.0
 * Author:            Equalize Digital
 * Author URI:        https://equalizedigital.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tablepress-scoped-headers
 */

namespace EqualizeDigital\TablePress_Scoped_Headers;

// Prevent direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add scope attributes to table headers.
 *
 * @param string $output        HTML output of the table.
 * @param mixed  $table         Table object.
 * @param array  $render_options Render options.
 * @return string HTML output of the table.
 */
function add_scope_to_table_headers( $output, $table, $render_options ) {
	$dom = new \DOMDocument();
	libxml_use_internal_errors( true ); // Suppress warnings for invalid HTML.
	$dom->loadHTML( $output );
	libxml_clear_errors();
	$xpath = new \DOMXPath( $dom );

	if ( isset( $render_options['table_head'] ) && $render_options['table_head'] ) {
		$th = $xpath->query( '//thead/tr/th' );
		foreach ( $th as $node ) {
			$node->setAttribute( 'scope', 'col' );
		}
	}

	if ( isset( $render_options['first_column_th'] ) && $render_options['first_column_th'] ) {
		$th = $xpath->query( '//tbody/tr/th' );
		foreach ( $th as $node ) {
			$node->setAttribute( 'scope', 'row' );
		}
	}

	$output = $dom->saveHTML();
	return $output;
}
add_filter( 'tablepress_table_output', __NAMESPACE__ . '\\add_scope_to_table_headers', 10, 3 );
