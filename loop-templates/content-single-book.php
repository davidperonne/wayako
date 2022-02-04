<?php
/**
 * Single book partial template
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header row mb-3">

		<div class="col-12 col-lg-8 mb-3">

			<figure class="featured-image">
				<?php echo get_the_post_thumbnail( $post->ID, 'square_medium', array( 'class' => 'img-contain' ) ); ?>
			</figure>
		</div>

		<div class="col-12 col-lg-4 d-flex align-items-center mb-3">
			<div class="ps-lg-4">

				<div class="entry-meta">
					<?php wayako_shorted_posted_on(); ?>
				</div>

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<?php the_excerpt(); ?>

			</div>
		</div>

	</header>

	<div class="entry-content">
		<div class="entry-content-inner">

			<?php the_content(); ?>

			<?php
			$gallery = get_field( 'gallery' );
			if ( $gallery ) : ?>
				<div class="book__gallery row">
					<?php foreach( $gallery as $image ) : ?>
						<div class="col-12 col-md-6 p-1">
							<figure>
								<?php echo wp_get_attachment_image( $image['id'], 'square_medium', false, array( 'class' => 'img-cover reveal1', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
							</figure>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

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

	<footer class="entry-footer mb-3">

		<?php wayako_entry_footer(); ?>

	</footer>

</article>
