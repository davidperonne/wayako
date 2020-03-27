<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-12 mb-3">

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer-menu',
						'container_class' => '',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav d-flex flex-column flex-md-row justify-content-center text-center',
						'fallback_cb'     => '',
						'menu_id'         => 'footer-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

			</div>

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<ul id="footer-social" class="d-flex justify-content-center pl-0">
							<li class="mx-1"><a href="https://twitter.com/davidperonne"><i class="fa fa-fw fa-twitter"></i></a></li>
							<li class="mx-1"><a href="https://fr.linkedin.com/in/davidperonne/"><i class="fa fa-fw fa-linkedin"></i></a></li>
							<li class="mx-1"><a href="skype:david.peronne?call"><i class="fa fa-fw fa-skype"></i></a></li>

						</ul>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

<?php /*		</div><!-- row end --> */ ?>

			<div class="col-md-12 mb-5">

				<footer class="site-footer d-flex flex-column flex-md-row justify-content-center" id="colophon">

					<div class="site-info copyright text-center text-md-right">© 2009 - 2019 Wayako</div>
					<div class="site-info legal text-center text-md-left"><a href="/a-propos/mentions-legales/">Mentions légales & confidentialité</a></div>

				</footer>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<!-- Mobile menu -->
<div class="modal fade fullscreen" id="menuModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog m-0">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h4 class="modal-title text-center"><span class="">Navigation rapide</span></h4>
				<button type="button" class="btn btn-link" data-dismiss="modal" aria-hidden="true">X</button>
			</div>
			<div class="modal-body text-center px-0">
				<div class="container-fluid px-0">
					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'mobile-menu',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'fallback_cb'     => '',
							'menu_id'         => '',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.fullscreen -->




<?php wp_footer(); ?>

</body>

</html>

