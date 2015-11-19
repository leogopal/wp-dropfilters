<?php

/*
 * Plugin Name: WP DropFilters
 * Plugin URI:  http://leogopal.com/plugins/wp-dropfilters
 * Author:      Leo Gopal
 * Author URI:  http://leogopal.com
 * Version:     0.1.1
 * Description: Better Select Boxes and Filters in the WordPress Admin
 * License:     GPLv2 or later
 */

/**
 * Enqueue WP DropFilters Styles and Scripts
 *
 * @since 0.1.0
 */
function _wp_dropfilters() {

	// Vars
	$url = wp_dropfilters_get_plugin_url();
	$ver = wp_dropfilters_get_asset_version();

	// Styles
	wp_enqueue_style( 'chosen',     $url . 'assets/css/chosen.min.css', array(),           $ver );
	wp_enqueue_style( 'wp-dropfilters',  $url . 'assets/css/wp-dropfilters.css',  array( 'chosen' ), $ver );

	// Scripts
	wp_enqueue_script( 'chosen',    $url . 'assets/js/chosen.jquery.min.js', array( 'jquery'           ), $ver, true );
	wp_enqueue_script( 'wp-dropfilters', $url . 'assets/js/wp-dropfilters.js',         array( 'chosen', 'jquery' ), $ver, true );

}

add_action( 'admin_enqueue_scripts', '_wp_dropfilters' );

/**
 * Return the plugin's URL
 *
 * @since 0.1.0
 *
 * @return string
 */
function wp_dropfilters_get_plugin_url() {
	return plugin_dir_url( __FILE__ );
}

/**
 * Return the asset version
 *
 * @since 0.1.0
 *
 * @return int
 */
function wp_dropfilters_get_asset_version() {
	return 201510280001;
}
