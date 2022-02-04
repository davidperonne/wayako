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

	<footer class="wrapper wrapper-footer mb-5" id="wrapper-footer">

		<!-- top footer -->
		<div class="top-footer container d-none d-md-block">
			<?php //get_template_part( 'global-templates/social-nav-2' ); ?>
		</div>

		<!-- middle footer -->
		<div class="middle-footer container">
			<div class="d-flex flex-column flex-md-row justify-content-between flex-wrap">

				<div class="middle-footer__logo d-none d-md-block text-center mb-5 mb-lg-0">
					<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img class="wayako-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-wayako.png'; ?>" alt="Wayako" width="224" height="162" />
					</a>
				</div>


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

				<?php //get_template_part( 'global-templates/phone' ); ?>

				<?php //get_template_part( 'global-templates/social-nav-1' ); ?>

			</div>
		</div>

		<!-- bottom footer -->
		<div class="bottom-footer container">
			<div class="d-flex flex-column flex-sm-row justify-content-center text-center">
				<span class="copyright-info"><?php echo '&copy; Wayako 2022'; ?></span> 

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

				<span class="made-by"><?php esc_html_e( 'Realization', 'wayako' ); ?> <a href="https://davidperonne.com" rel="noopener, noreferrer" target="_blank">davidperonne.com</a></span>

			</div> 
		</div> 

	</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<a href="#" id="topbutton" title="<?php esc_html_e( 'To top', 'wayako' ); ?>"><span class="visually-hidden"><?php esc_html_e( 'To top', 'wayako' ); ?></span></a>

<!-- MODAL Mobile main menu -->
<div class="modal modal-dialog-scrollable fade mobile-menu-modal right" id="menuModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => '',
						'container_id'    => 'mobileMenuNavbar',
						'menu_class'      => 'mobile-menu navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'mobile-menu',
						'depth'           => 1,
						'walker'          => new Wayako_WP_Bootstrap_Navwalker(),
					)
				);
				?>

				<?php get_template_part( 'global-templates/social-nav-1' ); ?>

				<?php do_action( 'wpml_add_language_selector' ); ?>

			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>

