<?php
add_filter( 'theme_mod_archive-page-layout', function( $option ) {
	return 'right-sidebar';
} );

add_filter( 'theme_mod_header-layout', function( $option ) {
	return 'center';
} );

add_filter( 'theme_mod_header-position', function( $option ) {
	return '';
} );

add_filter( 'theme_mod_post-eyecatch', function( $image ) {
	return 'content-top';
} );

add_filter( 'theme_mod_page-eyecatch', function( $image ) {
	return 'title-on-page-header';
} );

add_filter( 'snow_monkey_page_header_thumbnail_size', function( $size ) {
	return 'large';
} );