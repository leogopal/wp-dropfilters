jQuery( document ).ready( function ( $ ) {
	'use strict';

	// Look for posts
	var toptablenav = $( '#posts-filter .tablenav.top' );

	// Maybe try comments
	if ( ! toptablenav.length ) {
		toptablenav = $( '#comments-form .tablenav.top' );
	}

	// Only proceed if toptablenav was found
	if ( toptablenav.length ) {
		var filters = toptablenav.find( '.actions:not(.bulkactions)' );

		// Add a class for custom styling
		filters.addClass( 'wp-pretty-filters' );

		// Relocate
		toptablenav.before( filters );
	}

	// Chosen fields
	$( '.wrap .actions:not(.bulkactions) select' ).chosen();
	$( '.wrap .form-table select' ).chosen();
	$( '#posts-filter .filter-items select' ).chosen();
	$( '.media-toolbar select' ).chosen();
} );