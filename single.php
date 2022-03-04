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

<div class="wrapper" id="content">

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

<?php
get_footer();
