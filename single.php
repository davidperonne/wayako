<?php
/**
 * The template for displaying all single posts
 *
 * @package Wayako
 */

get_header();

//if ( 'post' === get_post_type() && is_single() ) :

	get_template_part( 'global-templates/hero' );

//endif;

while ( have_posts() ) :
	the_post();
	?>



	<?php wayako_post_thumbnail(); ?>

	<div class="entry-content alignwide">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wayako' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wayako' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wayako_entry_footer(); ?>
	</footer><!-- .entry-footer -->


	<?php
	//get_template_part( 'template-parts/content', 'single' );

	wayako_nav(); // TODO
	// remplacer par wayako_nav()
	the_post_navigation(
		array(
			'prev_text' => '<span class="nav-subtitle"><span class="post-navigation__prev--label">' . esc_html__( 'Previous', 'wayako' ) . '</span> <span class="nav-title">%title</span></span>',
			'next_text' => '<span class="nav-subtitle"><span class="post-navigation__pnext--label">' . esc_html__( 'Next', 'wayako' ) . '</span> <span class="nav-title">%title</span></span>',
		)
	);

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile;

get_footer();
