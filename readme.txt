=== WP DropFilters ===
Contributors: johnjamesjacoby, stuttter
Tags: jquery, select, chosen
Requires at least: 4.3
Tested up to: 4.4
Stable tag: 0.1.3
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9Q4F4EL5YJ62J

Make long, unwieldy select boxes much more user-friendly.

== Description ==

WP DropFilters plugin implements the [Chosen jQuery Plugin](http://harvesthq.github.com/chosen/) for WordPress.

[Chosen](http://harvesthq.github.com/chosen/) makes long, unwieldy select boxes much more user-friendly.


== Screenshots ==

1. Filters
2. Timezones

== Installation ==

* Download and install using the built in WordPress plugin installer.
* Activate in the "Plugins" area of your admin by clicking the "Activate" link.
* No further setup or configuration is necessary.

== Frequently Asked Questions ==

= What dropdowns does this target? =

`
$( '.wrap .actions:not(.bulkactions) select' ).chosen();
$( '.wrap .form-table select' ).chosen();
$( '#posts-filter .filter-items select' ).chosen();
$( '.media-toolbar select' ).chosen();
`

= Where can I get support? =

The WordPress support forums: https://wordpress.org/support/plugin/wp-chosen/

= Where can I find documentation? =

http://github.com/stuttter/wp-chosen/

== Changelog ==

= 0.1.3 =
* Version JS
* Add support for media

= 0.1.2 =
* Update styling
* Target media library

= 0.1.1 =
* Fix drop-down search input styling

= 0.1.0 =
* Initial release
