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
	if ( $args->theme_location == 'footer-menu' ) {
		$cookies_link = '<li class="nav-item"><span class="nav-link cli_settings_button">' . esc_html__( 'Cookies', 'wayako' ) . '</span></li>';
		$items = $items . $cookies_link;
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items', 10, 2 );
