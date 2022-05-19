<?php
/**
 * Wayako functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wayako
 */

define( 'WAYAKO_VERSION', '1.0.0' );

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/enqueues.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/gutenberg.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}





// For speed ???
//add_filter( 'should_load_separate_core_block_assets', '__return_true' );


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


add_filter( 'seopress_pro_breadcrumbs_crumbs', 'wayako_sp_pro_breadcrumbs_crumbs' );

/**
 * Add element to breadcrumb when is singular portfolio.
 *
 * @param [type] $crumbs
 * @return void
 */
function wayako_sp_pro_breadcrumbs_crumbs( $crumbs ) {

	if ( is_singular( 'portfolio' ) ) :

		$breadcrumbs = array(
			array(
				'Portfolio',
				site_url( '/portfolio/' ),
			),
		);

		array_splice( $crumbs, 1, -2, $breadcrumbs );

	endif;

	return $crumbs;
}

