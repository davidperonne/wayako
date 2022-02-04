<?php
/**
 * The template for displaying all single posts
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php get_template_part( 'global-templates/hero' ); ?>

<div class="wrapper" id="single-wrapper">

	<div class="container" id="content" tabindex="-1">

		<?php
		while ( have_posts() ) {
			the_post();

			get_template_part( 'loop-templates/content-single', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}
		?>

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
