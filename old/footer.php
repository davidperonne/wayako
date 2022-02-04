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

		<div class="container">

			<div class="row">

				<div class="col-12 col-md-6 col-lg-4 px-4 mb-3">

					<?php if ( is_active_sidebar( 'footercol1' ) ) : ?>

						<div class="wrapper" id="wrapper-footer-col1">

							<?php dynamic_sidebar( 'footercol1' ); ?>

						</div>

					<?php endif; ?>

				</div>

				<div class="col-12 col-md-6 col-lg-4 px-4 mb-3">

					<?php if ( is_active_sidebar( 'footercol2' ) ) : ?>

						<div class="wrapper" id="wrapper-footer-col2">

							<?php dynamic_sidebar( 'footercol2' ); ?>

						</div>

					<?php endif; ?>

				</div>

				<div class="col-12 col-md-12 col-lg-4 px-4 d-flex justify-content-center justify-content-lg-start">

					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'footer-menu',
							'container_class' => 'footer-menu',
							'container_id'    => '',
							'menu_class'      => 'navbar-nav flex-column flex-sm-row flex-lg-column',
							'fallback_cb'     => '',
							'menu_id'         => '',
							'depth'           => 1,
							'walker'          => new wayako_WP_Bootstrap_Navwalker(),
						)
					);
					?>

				</div>

			</div><!-- row end -->

		</div><!-- container end -->

	</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<a href="#" id="topbutton" title="<?php esc_html_e( 'To top', 'wayako' ); ?>"><span class="visually-hidden"><?php esc_html_e( 'To top', 'wayako' ); ?></span></a>

<!-- MODAL Mobile main menu -->
<div class="modal fade mobile-menu-modal" id="menuModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'mobile-menu navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'mobile_primary_menu',
						'depth'           => 2,
						'walker'          => new wayako_WP_Bootstrap_Navwalker(),
					)
				);
				?>

				<div class="phone d-flex"><a href="tel:+33493341868">+33 (0) 4 93 34 18 68</a></div>

				<div class="customers view-customers">Tous nos clients<br>en 1 coup d'oeil<span class="eye-icon"></span></div>

				<?php get_template_part( 'global-templates/social' ); ?>

			</div>
		</div>
	</div>
</div>

<!-- Modal customers ajax -->
<div class="modal fade customers-modal" id="customersModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body"></div>
		</div>
	</div>
</div>


<?php if ( is_page( 'agence' ) ) : ?>

	<!-- Modal team member post ajax -->
	<div class="modal fade team-member-modal" id="teamMemberPostModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body"></div>
			</div>
		</div>
	</div>

<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>

