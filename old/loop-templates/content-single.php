<?php
/**
 * Single post partial template
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wayako' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php if ( 'post' === get_post_type() ) : ?>

			<p class="sign">Signé DeniZe</p>
			<p class="contact">N’hésitez pas à nous contacter : <br><a href="mailto:c.richier@wayako.fr">c.richier@wayako.fr</a> ou <a href="mailto:c.baldet@wayako.fr">c.baldet@wayako.fr</a></p>

		<?php endif; ?>

		<?php wayako_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
