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
	?>

	<div class="post-content alignwide">
		<div class="grid">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
			?>

		</div>
	</div>

	<?php
	wayako_pagination(); // PHP8

else :

	get_template_part( 'template-parts/content', 'none' );

endif;

get_footer();
