<?php
/**
 * Site navigation
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wayako
 */

?>

<nav id="site-navigation" class="main-navigation">			
    <button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
        <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'wayako' ); ?></span>
    </button>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'primary',
            'menu_id'        => 'primary-menu',
            'menu_class'      => 'menu-wrapper main-menu',
            'container_class' => 'primary-menu-container site-header__main-nav',
            'fallback_cb'     => false,
        )
    );
    ?>
</nav><!-- #site-navigation -->