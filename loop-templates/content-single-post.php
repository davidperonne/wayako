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

	<header class="entry-header">

		<div class="entry-meta">

				<?php wayako_posted_on(); ?>

			</div>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<figure class="featured-image">
			<?php echo get_the_post_thumbnail( $post->ID, 'medium_large', array( 'class' => 'attachment-medium_large size-medium_large wp-post-image img-contain' ) ); ?>
		</figure>

	</header>

	<div class="entry-content">
		<div class="entry-content-inner">

			<?php the_content(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'wayako' ),
					'after'  => '</div>',
				)
			);
			?>

		</div>
	</div>

	<footer class="entry-footer alignwide">

		<?php wayako_entry_footer(); ?>

	</footer>

</article>
