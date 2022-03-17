<?php
/**
 * Site branding & logo
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wayako
 */

?>

<div class="site-branding site-header__branding">
    <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
        <img class="wayako-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/wayako-logo-2x.png'; ?>" alt="Wayako" width="200" height="60" />
    </a>
</div><!-- .site-branding -->