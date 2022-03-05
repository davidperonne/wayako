<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>


	<?php
	if ( have_posts() ) {

		// Start the loop.
		while ( have_posts() ) {
			the_post();

			get_template_part( 'loop-templates/content', get_post_format() );
		}
	} else {
		get_template_part( 'loop-templates/content', 'none' );
	}
	?>

	<?php
	// Display the pagination component.
	wayako_pagination();
	?>


<?php
get_footer();
