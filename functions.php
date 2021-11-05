<?php
/**
 * wayako functions and definitions
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$wayako_includes = array(
	'/setup.php',
	'/menus.php',
	'/widgets.php',
	'/enqueue.php',
	'/template-tags.php',
	'/pagination.php',
	'/hooks.php',
	'/extras.php',
	'/custom-comments.php',
	'/class-wp-bootstrap-navwalker.php',
	'/editor.php',
	'/custom-post-types.php',
	'/taxonomies.php',
	'/gutenberg.php',
	'/deprecated.php',
	'/acf.php',

);

foreach ( $wayako_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

// Debug log.
if ( ! function_exists( 'write_log' ) ) {

	function write_log( $log ) {
		if ( true === WP_DEBUG ) {
			if ( is_array( $log ) || is_object( $log ) ) {
				error_log( print_r( $log, true ) );
			} else {
				error_log( $log );
			}
		}
	}
}

/*
function wayako_support() {

	add_theme_support( 'wp-block-styles' );

}
add_action( 'after_setup_theme', 'wayako_support' );
*/


