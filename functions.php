<?php
/**
 * Wayako functions and definitions
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$wayako_includes = array(
	'/setup.php',
	'/widgets.php',
	'/enqueue.php',
	'/template-tags.php',
	'/pagination.php',
	'/extras.php',
	'/custom-comments.php',
	'/editor.php',
	'/gutenberg.php',
	'/deprecated.php',
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
