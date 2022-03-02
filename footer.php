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

	<footer class="site-footer" id="">

		<div class="site-footer__container container---- alignwide">

			<div class="site-footer__widgets">

				<?php dynamic_sidebar( 'footer-widget' ); ?>

			</div>

			<div class="site-footer__copyright">


				<?php dynamic_sidebar( 'copyright-widget' ); ?>


		<?php /*		<span class="site-footer__copyright-info"><?php echo '&copy; 2020 Wayako - Tous droits réservés.'; ?></span> 

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

				<div class="site-footer__copyright-icons ms-auto">
					A B C

				</div> */ ?>

			</div>

		</div>

	</footer>

</div>

<a href="#" id="topbutton" title="<?php esc_html_e( 'To top', 'wayako' ); ?>"><span class="visually-hidden"><?php esc_html_e( 'To top', 'wayako' ); ?></span></a>

<?php wp_footer(); ?>

</body>

</html>

