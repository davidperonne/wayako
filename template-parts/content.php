<?php
/**
 * Template part for displaying posts
 *
 * @package Wayako
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'alignwide' ); ?>>

	<?php wayako_post_thumbnail(); ?>

	<div class="entry-content">

		<a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php the_title(); ?>">
			<?php the_title( '<h2 id="entry-title" class="h5 entry-title">', '</h2>' ); ?>
		</a>

		<?php the_excerpt(); ?>

	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<?php wayako_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
