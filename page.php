<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php get_template_part( 'global-templates/hero' ); ?>

<div class="wrapper" id="page-wrapper">
<?php /*
	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md content-area px-4" id="primary">

				<main class="site-main" id="main">
*/ ?>

					<?php the_content(); ?>


					<?php
				/*	while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}*/
					?>
<?php /*
				</main><!-- #main -->

			</div>

		</div><!-- .row -->

	</div><!-- #content --> */ ?>

</div><!-- #page-wrapper -->

<?php
get_footer();
