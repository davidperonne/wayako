<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$classes = array(
	'col-12',
	'col-lg-6',
	'px-4',
);
?>

<article <?php post_class( $classes ); ?> id="post-<?php the_ID(); ?>">

	<a href="<?php echo esc_url( get_permalink() ); ?>">
		<figure>
			<?php echo get_the_post_thumbnail( $post->ID, 'medium_large', array( 'class' => 'img-cover reveal1' ) ); ?>

			<figcaption class="d-flex flex-column fade-up">

				<?php
				$categories = get_the_category( $post->ID );

				if ( ! empty( $categories ) ) {
					$post_categories = join( ', ', wp_list_pluck( $categories, 'name' ) );
					echo '<div class="entry-categories">' . esc_html( $post_categories ) . '</div>';
				}
				?>

				<?php
				the_title( '<h2 class="entry-title mb-auto">', '</h2>' );
				?>

				<?php if ( 'post' === get_post_type() ) : ?>

					<div class="entry-meta">
						<?php wayako_posted_on(); ?>
					</div>

				<?php endif; ?>

			</figcaption>

		</figure>
	</a>

</article><!-- #post-## -->
