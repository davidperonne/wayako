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

	<div id="wrapper-navbar" class="">

		<!-- desktop navigation -->
		<nav id="header-nav" class="navbar desktop-navbar d-none d-md-flex flex-column justify-content-between align-items-center h-100 ms-auto" aria-labelledby="header-nav-label"> 

			<div id="header-nav-label" class="visually-hidden">
				<?php esc_html_e( 'Main Navigation', 'wayako' ); ?>
			</div>

			<?php if ( is_front_page() ) : ?>
				<h1 class="navbar-brand">
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
						<img class="wayako-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-wayako.svg'; ?>" alt="wayako" width="187" height="50" />
						<span class="visually-hidden"><?php bloginfo( 'name' ); ?></span>
					</a>
				</h1>
			<?php else : ?>
				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
					<img class="wayako-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-wayako.svg'; ?>" alt="wayako" width="187" height="50" />
				</a>
			<?php endif; ?>

			<div id="menu_title" class="menu-title"><?php esc_html_e( 'Menu', 'wayako' ); ?><span class="menu-icon"></span></div>

			<div class="" id="mainMenu" style="">
				<div class="phone d-flex"><a href="tel:+33493341868">+33 (0) 4 93 34 18 68</a></div>
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'navbar navbar-nav',
						'container_id'    => 'mainMenuNavbar',
						'menu_class'      => 'desktop-menu navbar-nav text-center',
						'fallback_cb'     => '',
						'menu_id'         => 'desktop_primary_menu',
						'depth'           => 2,
						'walker'          => new wayako_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div>

			<div class="customers view-customers">Tous nos clients<br>en 1 coup d'oeil<span class="eye-icon"></span></div>

			<?php get_template_part( 'global-templates/social' ); ?>

		</nav>

		<!-- mobile navigation -->
		<nav class="mobile-navbar d-flex justify-content-between align-items-center d-md-none p-3">

			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
				<img class="wayako-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-wayako.svg'; ?>" class="img-fluid" alt="wayako" width="234" height="63.15" />
			</a>

			<button class="navbar-toggler collapsed" type="button" aria-expanded="false" aria-label="Toggle navigation"  data-bs-toggle="modal" data-bs-target="#menuModal">
				<span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
				<span class="visually-hidden"><?php esc_html_e( 'Menu', 'wayako' ); ?></span>
			</button>

		</nav>

	</div><!-- #wrapper-navbar end -->
