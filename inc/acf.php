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
		'page_title'    => 'Theme options',
		'menu_title'    => 'Theme options',
		'menu_slug'     => 'generales-options',
		'capability'    => 'edit_posts',
		'redirect'      => true
		)
	);

	// Customers sub page.
	acf_add_options_sub_page(
		array(
		'page_title'    => 'Customers',
		'menu_title'    => 'Customers',
		'parent_slug'   => 'generales-options',
		)
	);

	// Social sub page.
	acf_add_options_sub_page(
		array(
		'page_title'    => 'Social networks',
		'menu_title'    => 'Social networks',
		'parent_slug'   => 'generales-options',
		)
	);
}
