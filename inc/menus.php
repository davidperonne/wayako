<?php
/**
 * Menus
 *
 * @package Wayako
 */


/**
 * Add cookies link to cookies control panel (Need GDPR Cookie Consent plugin).
 *
 * @param [type] $items
 * @param [type] $args
 * @return void
 */
function new_nav_menu_items( $items, $args ) {
	if ( $args->theme_location == 'copyright-menu' ) {
		$cookies_link = '<li class="nav-item"><a class="nav-link cmplz-show-banner">' . esc_html__( 'Cookies', 'wayako' ) . '</a></li>';
		$items = $items . $cookies_link;
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items', 10, 2 );



