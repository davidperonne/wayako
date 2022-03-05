<?php
/**
 * Options page with ACF Pro
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( function_exists( 'acf_add_options_page' ) ) {
	// Main option page.
	acf_add_options_page(
		array(
			'page_title' => esc_html__( 'Theme options', 'wayako' ),
			'menu_title' => esc_html__( 'Theme options', 'wayako' ),
			'menu_slug'  => 'generales-options',
			'capability' => 'edit_posts',
			'redirect'   => true,
		)
	);

	// Global sub page.
	acf_add_options_sub_page(
		array(
			'page_title'  => esc_html__( 'Global', 'wayako' ),
			'menu_title'  => esc_html__( 'Global', 'wayako' ),
			'parent_slug' => 'generales-options',
		)
	);

	// Social sub page.
	acf_add_options_sub_page(
		array(
			'page_title'  => esc_html__( 'Social networks', 'wayako' ),
			'menu_title'  => esc_html__( 'Social networks', 'wayako' ),
			'parent_slug' => 'generales-options',
		)
	);

	// Partners sub page.
	acf_add_options_sub_page(
		array(
			'page_title'  => esc_html__( 'Partners', 'wayako' ),
			'menu_title'  => esc_html__( 'Partners', 'wayako' ),
			'parent_slug' => 'generales-options',
		)
	);
}

function my_acf_google_map_api( $api ) {

	$api['key'] = get_field( 'google_map_api_key', 'options' );
	return $api;
}
//add_filter( 'acf/fields/google_map/api', 'my_acf_google_map_api' );
