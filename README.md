# WP DropFilters

WP DropFilters makes using long dropdowns and filters in WordPress Admin a lot more pleasant.

The [Chosen jQuery Plugin](http://harvesthq.github.com/chosen/) is used for the WordPress Admins long dropdowns and the Filter fields are tamed.

# Installation

* Download and install using the built in WordPress plugin installer.
* Activate in the "Plugins" area of your admin by clicking the "Activate" link.
* No further setup or configuration is necessary.

# FAQ

### What dropdowns does this target?

```
$( '.wrap .actions:not(.bulkactions) select' ).chosen();
$( '.wrap .form-table select' ).chosen();
$( '#posts-filter .filter-items select' ).chosen();
```

### What filters are targeted?

```
 #posts-filter .tablenav.top .actions:not(.bulkactions)
```

### Where can I get support?

The WordPress support forums: [https://wordpress.org/plugin/support/wp-dropfilters/](https://wordpress.org/plugin/support/wp-dropfilters/)

### Report Bugs or Request Features?

Please do so on the Github Issue Tracker: [Submit Bug or Feature Request](https://github.com/leogopal/wp-dropfilters/issues/new)

### Can I contribute?

Yes, please! You can find [WP DropFilters repository on Github](https://github.com/leogopal/wp-dropfilters)

