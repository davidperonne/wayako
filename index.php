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

<div class="wrapper" id="content">

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();

			get_template_part( 'loop-templates/content', get_post_format() );
		}
	} else {
		get_template_part( 'loop-templates/content', 'none' );
	}
	?>

	<!-- The pagination component -->
	<?php wayako_pagination(); ?>

</div><!-- #content -->

<?php
get_footer();
