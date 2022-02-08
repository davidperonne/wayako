<?php
/**
 * Template Name: Portfolio
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php get_template_part( 'global-templates/hero' ); ?>

<div class="wrapper" id="full-width-page-wrapper">

	<?php
	$args = array(
		'post_type' => 'portfolio',
	);

	$books = new WP_Query( $args );
	?>

	<?php if ( $books->have_posts() ) : ?>

		<div class="grid container">

			<?php while ( $books->have_posts() ) : $books->the_post(); ?>

				<div class="grid-item  reveal1">	
					<a class="" href="<?php echo esc_url( get_permalink() ); ?>">
						<figure>
							<?php echo get_the_post_thumbnail( $post->ID, 'medium_large', array( 'class' => 'img-cover' ) ); ?>
							<figcaption>
								<div class="figcaption__inner-container">
									<div class="entry-meta">
										<?php wayako_shorted_posted_on(); ?>
									</div>
									<?php the_title( '<h2 class="grid-item__title">', '</h2>' ); ?>
								</div>
							</figcaption>
						</figure>	
					</a>
				</div>

			<?php endwhile; ?>		

		</div>

		<script type="text/javascript">            
			jQuery(document).ready(function($) {

				$('.grid').isotope({
					itemSelector: '.grid-item',

					layoutMode: 'masonry',
					masonry: {
						columnWidth: 130,
					},
					cellsByRow: {
						columnWidth: 260,
						rowHeight: 260
					},
					masonryHorizontal: {
						rowHeight: 130
					},
					cellsByColumn: {
						columnWidth: 260,
						rowHeight: 260
					}
				});

			});
		</script>

	<?php else : ?>

		<div class="container">

			<?php get_template_part( 'loop-templates/content', 'none' ); ?>				

		</div>

	<?php endif; ?>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
