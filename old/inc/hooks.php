<?php
/**
 * Custom hooks
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wayako_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function wayako_site_info() {
		do_action( 'wayako_site_info' );
	}
}

add_action( 'wayako_site_info', 'wayako_add_site_info' );
if ( ! function_exists( 'wayako_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function wayako_add_site_info() {
		$the_date = date( 'Y' );

		$site_info = sprintf( // WPCS: XSS ok.
			'&copy; %1$s Boutique Garden - %2$s.',
			$the_date,
			esc_html__( 'All rights reserved', 'wayako' )
		);

		echo apply_filters( 'wayako_site_info_content', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
