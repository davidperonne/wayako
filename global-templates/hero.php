<?php
/**
 * Hero setup
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( is_home() ) {

	get_template_part( 'hero-templates/hero', 'blog' );

} elseif ( is_single() && ( 'post' == get_post_type() ) ) {

	get_template_part( 'hero-templates/hero', 'single' );

} elseif ( is_single() && ( 'reference' == get_post_type() ) ) {

	get_template_part( 'hero-templates/hero', 'reference' );

} else {

	if ( $header_type = get_field( 'header_type' ) ) {

		get_template_part( 'hero-templates/hero', $header_type );

	}
}
