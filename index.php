<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php //get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<?php get_template_part( 'global-templates/hero' ); ?>

<div class="wrapper" id="index-wrapper">

	<?php if ( is_home() ) : ?>
		<div class="intro mb-5">
			<div class="inner-content">

				<?php echo get_post_field( 'post_content', get_option( 'page_for_posts' ) ); ?>

			</div>
		</div>
	<?php endif; ?>

	<div class="container" id="content" tabindex="-1">

		<div class="row">
			<div class="col-md content-area" id="primary">

				<main class="site-main" id="main">

					<?php
					if ( have_posts() ) {
						// Start the Loop.
						$number = 1;

						while ( have_posts() ) {
							the_post();

							$args = array(
								'number' => $number,
							);

							get_template_part( 'loop-templates/content', get_post_format(), $args );

							$number++;
						}
					} else {
						get_template_part( 'loop-templates/content', 'none' );
					}
					?>

				</main><!-- #main -->

				<!-- The pagination component -->
				<?php wayako_pagination(); ?>

			</div>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
