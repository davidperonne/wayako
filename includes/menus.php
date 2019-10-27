<?php



/**
 * Add mobile menu
 */
function register_mobile_menu() {
	register_nav_menu( 'mobile-menu', __( 'mobile menu' ) );
}
add_action( 'init', 'register_mobile_menu' );




/**
 * Add footer menu
 */
function register_footer_menu() {
	register_nav_menu( 'footer-menu', __( 'Footer menu' ) );
}
add_action( 'init', 'register_footer_menu' );





