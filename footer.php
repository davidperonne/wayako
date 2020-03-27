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


<nav class="mobile-navbar fixed-bottom d-flex justify-content-center d-lg-none mb-3">
<?php /*	<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#menuModal"><i class="fa fa-fw fa-bars"></i> Accès rapide</button> */ ?>
	<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#menuModal"><i class="material-icons">menu</i> Accès rapide</button> 
</nav>

<!-- Mobile menu -->
<div class="modal fade" id="menuModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog m-0">
		<div class="modal-content">
			<div class="modal-header d-flex justify-content-between align-items-center px-0 py-1">
				<button type="button" class="btn btn-link"><i class="material-icons">search</i></button>
				<h4 class="modal-title text-center"><span class="">Navigation rapide</span></h4>
				<button type="button" class="btn btn-link" data-dismiss="modal" aria-hidden="true"><i class="material-icons">close</i></button>
			</div>
			<div class="modal-body text-center px-0">
				<div class="container-fluid px-0">
					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'mobile-menu',
							'container_class' => '',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'scrolling-wrapper',
							'fallback_cb'     => '',
							'menu_id'         => 'mobile-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
				</div>
				<div class="container-fluid">
					<div class="d-flex justify-content-around quick-actions">
						<div class="flex-grow-1">
							<a href="tel:0033422130117"><i class="material-icons">phone</i>Appeler</a>
						</div>
						<div class="flex-grow-1">
							<a href="mailto:contact@wayako.com"><i class="material-icons">email</i>Email</a>
						</div>
						<div class="flex-grow-1">
							<a href="https://www.google.fr/maps/place/Wayako/@43.7507558,7.244928,15z/data=!4m5!3m4!1s0x0:0xac0839dc18ea2f7d!8m2!3d43.7507558!4d7.244928"><i class="material-icons">near_me</i>Position</a>
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

