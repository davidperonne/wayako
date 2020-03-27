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

<?php /*
		<nav class="mobile-navbar d-flex d-xl-none">

			<a class="mobile-logo mr-auto" href="" rel="home">
				<div class="logo">
					<img src="" class="img-fluid" alt="Wayako" width="272" height="44">
				</div>
			</a>

			<button class="btn btn-link navbar-toggler" type="button" data-toggle="modal" data-target="#menuModal">
				<span class="navbar-toggler-icon"></span> Menu
			</button> 

		</nav>
*/ ?>

		<nav class="navbar navbar-expand-md">

		<?php if ( 'container' == $container ) : ?>
			<div class="container d-flex justify-content-center justify-content-lg-between">
		<?php endif; ?>

				<div class="logo">
					<a href="https://www.wayako.com/" class="" rel="home" data-wpel-link="internal"><img src="/wp-content/themes/wayako/images/wayako-logo-1x.png" class="img-fluid" alt="Wayako" width="200" height="60"></a>
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


			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->
		
	</div><!-- #wrapper-navbar end -->
