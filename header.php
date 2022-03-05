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

	<header id="masterhead" class="site-header    navbar-expand-md alignwide">

		<div class="site-header__branding">
			<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
				<img class="wayako-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/wayako-logo-2x.png'; ?>" alt="Wayako" width="200" height="60" />
			</a>
		</div>

		<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar top-bar"></span>
			<span class="icon-bar middle-bar"></span>
			<span class="icon-bar bottom-bar"></span>
			<span class="visually-hidden"><?php esc_html_e( 'Menu', 'wayako' ); ?></span>
		</button>

		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'main-menu',
				'container'       => 'nav',
				'container_class' => 'site-header__main-nav navbar-collapse collapse',
				'container_id'    => 'main_nav',
				'menu_class'      => 'main-menu navbar-nav',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Wayako_WP_Bootstrap_Navwalker(),
			)
		);
		?>

	</header>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
