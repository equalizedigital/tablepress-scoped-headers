# TablePress Scoped Headers Plugin

Adds scope attributes to table headers in TablePress tables for improved accessibility.

## Description

TablePress Scoped Headers Plugin enhances the accessibility of your tables by ensuring that table headers are correctly associated with their corresponding rows and columns.

## Installation

1. Ensure you have the [TablePress](https://wordpress.org/plugins/tablepress/) plugin installed and activated.
2. Download or clone this repository into your `/wp-content/plugins/` directory:
    ```sh
    git clone https://github.com/yourusername/tablepress-scoped-headers.git
    ```
3. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

Once activated, the plugin will automatically add `scope` attributes to the table headers in TablePress tables:
- `scope="col"` for headers in the first row.
- `scope="row"` for headers in the first column.

## Frequently Asked Questions

### Do I need TablePress installed for this plugin to work?

Yes, this plugin is an add-on for TablePress. You need to have TablePress installed and activated on your WordPress site for this plugin to function.

## Changelog

### 1.0.0

* Initial release of TablePress Scoped Headers Plugin.

## License

This plugin is licensed under the GPLv2 or later. For more information, see [GNU General Public License](http://www.gnu.org/licenses/gpl-2.0.html).

## Credits

Developed by Equalize Digital. For more information, visit [Equalize Digital](https://equalizedigital.com).
