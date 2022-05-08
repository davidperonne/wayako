<?php
/**
 * Gutenberg
 *
 * @package Wayako
 */



/* BLOCK VARIATIONS */

/* Enqueue js for block variations */
function prefix_editor_assets() {
	wp_enqueue_script( 'prefix-block-variations', get_template_directory_uri() . '/assets/js/block-variations.js', array( 'wp-blocks' ), WAYAKO_VERSION, true );
}
add_action( 'enqueue_block_editor_assets', 'prefix_editor_assets' );


// Et Blocks style possible en js !
//wp_enqueue_script( 'prefix-block-variations', get_template_directory_uri() . '/assets/js/block-styles.js', array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ), WAYAKO_VERSION, true );
/*
wp.blocks.registerBlockStyle( 'core/media-text', {
    name: 'header',
    label: 'Header',
} );
*/




/* BLOCK STYLES (php) */

/* Register a block style for media-text block */
register_block_style(
	'core/media-text',
	array(
		'name'  => 'header',
		'label' => esc_html__( 'Header', 'wayako' ),
	)
);
// CSS class on media-text block: .is-style-header

/* Register a block style for button block */
register_block_style(
	'core/button',
	array(
		'name'  => 'play-button',
		'label' => esc_html__( 'Play button', 'wayako' ),
	)
);
// CSS class on button block: .is-style-play-button



if ( ! function_exists( 'hd_testimonials_register_testimonials_block_styles' ) ) :

	/**
	 * Register some default block editor styles for this block.
	 *
	 * @return void
	 */
	function hd_testimonials_register_testimonials_block_styles() {

		// CSS class on media-text block: .is-style-header.
		register_block_style(
			'core/button',
			array(
				'name'  => 'play-button',
				'label' => esc_html__( 'Play button', 'wayako' ),
			)
		);

		// CSS class on button block: .is-style-play-button.
		register_block_style(
			'core/button',
			array(
				'name'  => 'play-button',
				'label' => esc_html__( 'Play button', 'wayako' ),
			)
		);

	}

endif;
// Is not init ?????
//add_action( 'init', 'hd_testimonials_register_testimonials_block_styles' );
