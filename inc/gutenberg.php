<?php
/**
 * Customize the Gutenberg editor
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function mytheme_setup_theme_supported_features() {

	add_theme_support(
		'editor-color-palette',
		array(
			array( 'name' => 'dark-blue', 'slug'  => 'dark-blue', 'color' => '#12294C' ),
			array( 'name' => 'sea-green', 'slug'  => 'sea-green', 'color' => '#147757' ),
			array( 'name' => 'yellow', 'slug'  => 'yellow', 'color' => '#FFC334' ),
			array( 'name' => 'orange', 'slug'  => 'orange', 'color' => '#EF723B' ),
			array( 'name' => 'red', 'slug'  => 'red', 'color' => '#E2423C' ),
			array( 'name' => 'lime', 'slug'  => 'lime', 'color' => '#9EC630' ),
			array( 'name' => 'brown', 'slug'  => 'brown', 'color' => '#855F4B' ),
			array( 'name' => 'dark-red', 'slug'  => 'dark-red', 'color' => '#B1253A' ),
			array( 'name' => 'medium-sea-green', 'slug'  => 'medium-sea-green', 'color' => '#81B69B' ),
			array( 'name' => 'medium-aquamarine', 'slug'  => 'medium-aquamarine', 'color' => '#92DCC5' ),
			array( 'name' => 'olive-drab', 'slug'  => 'olive-drab', 'color' => '#979F52' ),
			array( 'name' => 'pale-yellow-green', 'slug'  => 'pale-yellow-green', 'color' => '#D7DCAC' ),
			array( 'name' => 'burly-wood', 'slug'  => 'burly-wood', 'color' => '#E8CEA4' ),
			array( 'name' => 'grey', 'slug'  => 'grey', 'color' => '#E9E9E9' ),
			array( 'name' => 'white', 'slug'  => 'white', 'color' => '#FFFFFF' ),
		)
	);

	// Add custom editor font sizes.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name'      => esc_html__( 'Small', 'wayako' ),
				'size'      => 18,
				'slug'      => 'small',
			),
			array(
				'name'      => esc_html__( 'Normal', 'wayako' ),
				'size'      => 20,
				'slug'      => 'normal',
			),
			array(
				'name'      => esc_html__( 'Large', 'wayako' ),
				'size'      => 24,
				'slug'      => 'large',
			),
			array(
				'name'      => esc_html__( 'Extra large', 'wayako' ),
				'size'      => 40,
				'slug'      => 'extra-large',
			),
			array(
				'name'      => esc_html__( 'Huge', 'wayako' ),
				'size'      => 48,
				'slug'      => 'huge',
			),
		)
	);

	add_theme_support( 'disable-custom-colors' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

/**
 * Add Gutenberg admin style.
 */
function gb_gutenberg_admin_styles() {
	echo '
		<style>
			/* Main column width */
			.wp-block {
				max-width: 960px;
			}
 
			/* Width of "wide" blocks */
			.wp-block[data-align="wide"] {
				max-width: 1200px;
			}
 
			/* Width of "full-wide" blocks */
			.wp-block[data-align="full"] {
				max-width: none;
			}	

		</style>
	';
}
add_action( 'admin_head', 'gb_gutenberg_admin_styles' );


/**
 * Disable Editor
 *
 * @package      ClientName
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/

/**
 * Templates and Page IDs without editor
 *
 */
function ea_disable_editor( $id = false ) {

	$excluded_templates = array(
		'page-templates/homepage.php',
		'page-templates/qui-suis-je.php',
		'page-templates/prestations.php',
		'page-templates/book.php',
		'page-templates/contact.php',
	);

	$excluded_ids = array(
		736,
		1348,
	);

	if ( empty( $id ) )
		return false;

	$id = intval( $id );
	$template = get_page_template_slug( $id );

	return in_array( $id, $excluded_ids ) || in_array( $template, $excluded_templates );
}

/**
 * Disable Gutenberg by template
 *
 */
function ea_disable_gutenberg( $can_edit, $post_type ) {

	if ( ! ( is_admin() && !empty( $_GET['post'] ) ) )
		return $can_edit;

	if ( ea_disable_editor( $_GET['post'] ) )
		$can_edit = false;

	return $can_edit;

}
add_filter( 'gutenberg_can_edit_post_type', 'ea_disable_gutenberg', 10, 2 );
add_filter( 'use_block_editor_for_post_type', 'ea_disable_gutenberg', 10, 2 );

/**
 * Disable Classic Editor by template
 *
 */
function ea_disable_classic_editor() {

	$screen = get_current_screen();
	if ( 'page' !== $screen->id || ! isset( $_GET['post']) )
		return;

	if ( ea_disable_editor( $_GET['post'] ) ) {
		remove_post_type_support( 'page', 'editor' );
	}

}
add_action( 'admin_head', 'ea_disable_classic_editor' );
