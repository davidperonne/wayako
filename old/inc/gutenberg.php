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


			array( 'name' => 'orange', 'slug'  => 'orange', 'color' => '#f94213' ),
/**/
			array( 'name' => 'dark-blue', 'slug'  => 'dark-blue', 'color' => '#12294C' ),
			array( 'name' => 'sea-green', 'slug'  => 'sea-green', 'color' => '#147757' ),
			array( 'name' => 'yellow', 'slug'  => 'yellow', 'color' => '#FFC334' ),
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

