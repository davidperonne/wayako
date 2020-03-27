<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md <?php /*position-absolute*/ ?> w-100 d-none d-lg-block px-4 py-3">
			<div class="d-flex justify-content-between align-items-center">

				<div class="logo">
					<a href="https://www.wayako.com/" class="" rel="home" data-wpel-link="internal"><img src="<?php echo get_stylesheet_directory_uri() . '/images/wayako-logo-1x.png'; ?>" class="img-fluid" alt="Wayako" width="200" height="60"></a>
				</div>

				<div class=" d-none d-lg-block">
				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				</div>

			</div><!-- .container -->
		</nav><!-- .site-navigation -->

		<nav class="mobile-navbar <?php /*position-absolute*/ ?> w-100 d-flex justify-content-between align-items-center d-lg-none px-3 px-md-4 py-3">
			<div class="logo">
				<a class="mobile-logo" href="<?php echo home_url(); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri() . '/images/wayako-logo-1x.png'; ?>" class="img-fluid" alt="Defstudio Productions" width="260" height="33.238"></a>
			</div>
			<button class="navbar-toggler collapsed" type="button" <?php /*data-toggle="collapse"*/ ?> aria-expanded="false" aria-label="Toggle navigation"  data-toggle="modal" data-target="#menuModal">
				<span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
				<span class="sr-only">Menu principal</span>
			</button>
		</nav>

	</div><!-- #wrapper-navbar end -->
