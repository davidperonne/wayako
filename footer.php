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

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">




						<div class="col-12 text-left">

							<!-- The WordPress Menu goes here -->
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container_class' => '',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav ml-auto',
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

				<ul class="d-flex justify-content-center">
					<li><i class="fa fa-fw fa-twitter"></i></li>
					<li><i class="fa fa-fw fa-facebook"></i></li>
					<li><i class="fa fa-fw fa-linkedin"></i></li>
					<li><i class="fa fa-fw fa-skype"></i></li>

				</ul>

				</div><!-- .site-info -->

			</footer><!-- #colophon -->

		</div><!--col end -->

		</div><!-- row end -->

			<div class="col-md-12 mb-5">

				<footer class="site-footer d-flex justify-content-center" id="colophon">

					<div class="site-info">

					© 2009 - 2019 Wayako | <a href="#">Mentions légales & confidentialité</a>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->


<nav class="mobile-navbar fixed-bottom d-flex justify-content-center d-lg-none mb-3">
	<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#menuModal"><i class="fa fa-fw fa-bars"></i> Accès rapide</button> 
</nav>

<!-- Mobile menu -->
<div class="modal fade" id="menuModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close btn btn-link" data-dismiss="modal" aria-hidden="true">
					<span class="navbar-close-icon"></span>
				</button>
				<h4 class="modal-title text-center"><span class="sr-only">Menu principal</span></h4>

			</div>
			<div class="modal-body text-center">

				<div class="container-fluid">
					<div class="row">
						<div class="col-12 text-left">
						Search...
						</div>
					</div>
					<div class="row">
						<div class="col-12 text-left">

							<!-- The WordPress Menu goes here -->
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'mobile-menu',
									'container_class' => '',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav ml-auto',
									'fallback_cb'     => '',
									'menu_id'         => 'mobile-menu',
									'depth'           => 2,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>



						</div>
					</div>


					<div class="row">
						<div class="col-6">
							<i class="fa fa-fw fa-phone"></i>
						</div>
						<div class="col-6">
							<i class="fa fa-fw fa-envelope"></i>
						</div>
					</div>



				</div>

			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.fullscreen -->








<?php wp_footer(); ?>

</body>

</html>

