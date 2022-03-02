<?php
/**
 * ACF Blocks Gutenberg
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wayako_register_acf_block_types' ) ) :

	/**
	 * Déclarer des blocs Gutenberg avec ACF.
	 *
	 * @return void
	 */
	function wayako_register_acf_block_types() {

		// Register home slider block.
	/*	acf_register_block_type(
			array(
				'name'            => 'double-images',
				'title'           => __( 'Double images', 'wayako' ),
				'description'     => __( 'Double images', 'wayako' ),
				'render_template' => get_template_directory() . '/blocks/double-images.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( get_template_directory() . '/assets/img/o-comdz-icon.svg' ),
				'keywords'        => array( __( 'Double images', 'images' ), __( 'Plugin', 'wayako' ) ),
			)
		);*/

		acf_register_block_type(
			array(
				'name'            => 'hero',
				'title'           => __( 'Hero', 'wayako' ),
				'description'     => __( 'Hero', 'wayako' ),
				'render_template' => get_template_directory() . '/blocks/hero.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( get_template_directory() . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Hero', 'header' ), __( 'Plugin', 'wayako' ) ),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'service',
				'title'           => __( 'Service', 'wayako' ),
				'description'     => __( 'Service', 'wayako' ),
				'render_template' => get_template_directory() . '/blocks/service.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( get_template_directory() . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Service', 'Services' ), __( 'Plugin', 'wayako' ) ),
			)
		);
	}

endif;

// Check if function exists and hook into setup.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'wayako_register_acf_block_types' );
}
