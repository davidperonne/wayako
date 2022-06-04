<?php
/**
 * The main template file
 *
 * @package Wayako
 */

get_header();


if ( is_home() ) :

	get_template_part( 'global-templates/hero' );

endif;




if ( have_posts() ) :

	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );

	endwhile;

	wayako_pagination();

else :

	get_template_part( 'template-parts/content', 'none' );

endif;

get_footer();
