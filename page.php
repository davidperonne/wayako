<?php
/**
 * The template for all pages
 *
 * @package Wayako
 */

get_header();

while ( have_posts() ) :
	the_post();

	the_content();

endwhile;

get_footer();
