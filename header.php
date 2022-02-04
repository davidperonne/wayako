<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php wayako_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div id="page" class="site">

	<a class="skip-link visually-hidden visually-hidden-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'wayako' ); ?></a>

	<header class="site-header">

		<div class="site-header__branding">
			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
				<img class="wayako-logo mt-3 mt-md-0" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-wayako.png'; ?>" alt="Wayako" width="224" height="162" />
			</a>
		</div>

		<button class="navbar-toggler collapsed" type="button" aria-expanded="false" aria-label="Toggle navigation"  data-bs-toggle="modal" data-bs-target="#menuModal">
			<span class="icon-bar top-bar"></span>
			<span class="icon-bar middle-bar"></span>
			<span class="icon-bar bottom-bar"></span>
			<span class="visually-hidden"><?php esc_html_e( 'Menu', 'wayako' ); ?></span>
		</button>

		<div class="site-header__menus">

			<?php // TODO : Change the div into nav in the menus !
			wp_nav_menu(
				array(
					'theme_location'  => 'top-menu',
					'container_class' => 'top-menu',
					'container_id'    => 'top_menu',
					'menu_class'      => 'nav justify-content-center align-items-center group',
					'fallback_cb'     => '',
					'menu_id'         => '',
					'depth'           => 1,
					'walker'          => new Wayako_WP_Bootstrap_Navwalker(),
				)
			);
			?>

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-menu',
					'container_class' => 'main-menu',
					'container_id'    => 'main_menu',
					'menu_class'      => 'nav justify-content-center align-items-center group',
					'fallback_cb'     => '',
					'menu_id'         => '',
					'depth'           => 1,
					'walker'          => new Wayako_WP_Bootstrap_Navwalker(),
				)
			);
			?>

		</div>


	</header>





	<div id="wrapper-navbar" class="">

		<!-- desktop navigation -->
		<nav id="header-nav" class="navbar desktop-navbar d-none d-md-flex flex-column justify-content-center align-items-center pb-0" aria-labelledby="header-nav-label"> 

			<div id="header-nav-label" class="visually-hidden">
				<?php esc_html_e( 'Main Navigation', 'wayako' ); ?>
			</div>

			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
				<img class="wayako-logo mt-3 mt-md-0" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-wayako.png'; ?>" alt="Wayako" width="224" height="162" />
			</a>


			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'top-menu',
					'container_class' => 'desktop-menu w-100 nav-wrap',
					'container_id'    => 'desktop_menu',
					'menu_class'      => 'nav justify-content-center align-items-center group',
					'fallback_cb'     => '',
					'menu_id'         => '',
					'depth'           => 1,
					'walker'          => new Wayako_WP_Bootstrap_Navwalker(),
				)
			);
			?>

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-menu',
					'container_class' => 'desktop-menu w-100 nav-wrap',
					'container_id'    => 'desktop_menu',
					'menu_class'      => 'nav justify-content-center align-items-center group',
					'fallback_cb'     => '',
					'menu_id'         => '',
					'depth'           => 1,
					'walker'          => new Wayako_WP_Bootstrap_Navwalker(),
				)
			);
			?>

		

			<div class="header-left">

				<?php //get_template_part( 'global-templates/social-nav-1' ); ?>

				<?php //get_template_part( 'global-templates/phone' ); ?>

				<?php //do_action( 'wpml_add_language_selector' ); ?>

			</div>

		</nav>

		<!-- mobile navigation -->
		<nav class="mobile-navbar d-flex justify-content-center align-items-center d-md-none p-3">

			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
				<img class="wayako-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-wayako.png'; ?>" alt="Wayako" width="224" height="162" />
			</a>

			<button class="navbar-toggler collapsed" type="button" aria-expanded="false" aria-label="Toggle navigation"  data-bs-toggle="modal" data-bs-target="#menuModal">
				<span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
				<span class="visually-hidden"><?php esc_html_e( 'Menu', 'wayako' ); ?></span>
			</button>

		</nav>

	</div><!-- #wrapper-navbar end -->
