=== WP DropFilters ===
Contributors: leogopal
Tags: jquery, select, chosen
Requires at least: 4.3
Tested up to: 4.4
Stable tag: 1.0.0
Donate link: 

Improves long dropdowns and filters in WordPress Admin.

== Description ==

WP DropFilters makes using long dropdowns and filters in WordPress Admin a lot more pleasant.

The [Chosen jQuery Plugin](http://harvesthq.github.com/chosen/) is used for the WordPress Admins long dropdowns and the Filter fields are tamed.


== Screenshots ==


== Installation ==

* Download and install using the built in WordPress plugin installer.
* Activate in the "Plugins" area of your admin by clicking the "Activate" link.
* No further setup or configuration is necessary.

== Frequently Asked Questions ==

= What dropdowns does this target?

```
$( '.wrap .actions:not(.bulkactions) select' ).chosen();
$( '.wrap .form-table select' ).chosen();
$( '#posts-filter .filter-items select' ).chosen();
```

= What filters are targeted?

```
 #posts-filter .tablenav.top .actions:not(.bulkactions)
```

= Where can I get support?

The WordPress support forums: [https://wordpress.org/plugin/support/wp-dropfilters/](https://wordpress.org/plugin/support/wp-dropfilters/)

= Report Bugs or Request Features?

Please do so on the Github Issue Tracker: [Submit Bug or Feature Request](https://github.com/leogopal/wp-dropfilters/issues/new)

= Can I contribute?

Yes, please! You can find [WP DropFilters repository on Github](https://github.com/leogopal/wp-dropfilters)
Hat Tip to [John James Jacoby](https://profiles.wordpress.org/johnjamesjacoby/) for the original thoughts.

== Changelog ==

= 1.0.0 =
* Initial release
