<?php
/**
 * Widgets
 *
 * @package Wayako
 */

/**
 * Widgets
 *
 * @return void
 */
function wayako_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'wayako' ),
			'id'            => 'footer-widget',
			'description'   => esc_html__( 'Footer sidebar widget area', 'wayako' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'wayako_widgets_init' );
