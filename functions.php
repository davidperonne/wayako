<?php
/**
 * Wayako functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wayako
 */

define( 'WAYAKO_VERSION', '1.0.0' );

// Remove <p> Tag From Contact Form 7.
add_filter( 'wpcf7_autop_or_not', '__return_false' );

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/enqueues.php';
require get_template_directory() . '/inc/pagination.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/gutenberg.php';

/**
 * Load Wayako Core compatibility file.
 */
if ( defined( 'WAYAKO_CORE_VERSION' ) ) {
	require get_template_directory() . '/inc/plugins/wayako-core.php';
}

/**
 * Load SeoPress Pro compatibility file.
 */
if ( defined( 'SEOPRESS_PRO_VERSION' ) ) {
	require get_template_directory() . '/inc/plugins/seopress-pro.php';
}

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/plugins/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/plugins/woocommerce.php';
}




// Debug log. ----> Wayako Core
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

