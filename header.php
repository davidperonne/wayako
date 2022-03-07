<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wayako
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wayako' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="site-branding site-header__branding">
			<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
				<img class="wayako-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/wayako-logo-2x.png'; ?>" alt="Wayako" width="200" height="60" />
			</a>
		</div><!-- .site-branding -->

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

	</header><!-- #masthead -->


<?php /*
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
			*/	?>