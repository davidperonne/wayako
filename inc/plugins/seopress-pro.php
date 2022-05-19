<?php
/**
 * SeoPress Pro Compatibility File
 *
 * @package Wayako
 */




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

