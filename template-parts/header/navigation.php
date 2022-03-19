<?php
/**
 * Site navigation
 *
 * @package Wayako
 */

?>

<nav id="main-navigation" class="main-navigation">			
	<button class="nav-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
		<span class="icon-bar top-bar"></span>
		<span class="icon-bar middle-bar"></span>
		<span class="icon-bar bottom-bar"></span>
		<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'wayako' ); ?></span>
	</button>
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
		//	'container'      => false,
			'container_class' => 'primary-menu-container site-header__main-nav',
			'menu_id'        => 'primary-menu',
			'menu_class'      => 'menu-wrapper main-menu',
			'fallback_cb'     => false,
		)
	);
	?>
</nav><!-- #main-navigation -->
