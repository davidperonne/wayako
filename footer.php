<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

	<footer class="" id="">

		<div class="site-footer__container">

			<div class="site-footer__branding">
				<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="wayako-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-wayako.png'; ?>" alt="Wayako" width="224" height="162" />
				</a>
			</div>

			<div class="site-footer__menu">

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'footer-menu',
						'container_class' => 'footer1-menu mb-md-3',
						'container_id'    => '',
						'menu_class'      => 'nav flex-column text-center text-md-start',
						'fallback_cb'     => '',
						'menu_id'         => '',
						'depth'           => 1,
						'walker'          => new Wayako_WP_Bootstrap_Navwalker(),
					)
				);
				?>

			</div>

			<div class="site-footer__copyright">

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'copyright-menu',
						'container_class' => '',
						'container'       => '',
						'container_id'    => '',
						'menu_class'      => 'copyright-menu nav flex-column flex-sm-row align-items-center',
						'fallback_cb'     => '',
						'menu_id'         => '',
						'depth'           => 1,
						'walker'          => new Wayako_WP_Bootstrap_Navwalker(),
					)
				);
				?>

			</div>

		</div>

	</footer>

</div>

<a href="#" id="topbutton" title="<?php esc_html_e( 'To top', 'wayako' ); ?>"><span class="visually-hidden"><?php esc_html_e( 'To top', 'wayako' ); ?></span></a>

<?php wp_footer(); ?>

</body>

</html>

