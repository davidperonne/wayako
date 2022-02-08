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

		<div class="container site-header__inner"> <!-- TODO : flex-row ! -->

			<div class="site-header__branding">
				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
					<img class="wayako-logo mt-3 mt-md-0" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/wayako-logo-2x.png'; ?>" alt="Wayako" width="200" height="60" />
				</a>
			</div>

			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
				<span class="visually-hidden"><?php esc_html_e( 'Menu', 'wayako' ); ?></span>
			</button>

			<div id="main_nav" class="site-header__menus navbar-collapse collapse">

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'top-menu',
						'container'       => 'nav',
					//	'container_id'    => 'top-nav',
						'container_class' => 'site-header__top-nav',
					//	'menu_id'         => 'top-menu',
						'menu_class'      => ' nav',
						'depth'           => 1,
						'fallback_cb'     => '',
						'walker'          => new Wayako_WP_Bootstrap_Navwalker(),
					)
				);
				?>

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'main-menu',
						'container'       => 'nav',
					//	'container_id'    => 'main-nav',
						'container_class' => 'site-header__main-nav',
					//	'menu_id'         => 'main-menu',
						'menu_class'      => 'nav',
						'depth'           => 1,
						'fallback_cb'     => '',
						'walker'          => new Wayako_WP_Bootstrap_Navwalker(),
					)
				);
				?>

			</div>		

		</div>

	</header>

