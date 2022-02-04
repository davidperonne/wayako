<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<?php
	$current_cat = get_query_var( 'book_cat' );

	$args = array(
		'post_type' => 'book',
		'tax_query' => array(
			array(
				'taxonomy' => 'book_cat',
				'field'    => 'slug',
				'terms'    => $current_cat,
			),
		),
	);

	$books = new WP_Query( $args );
	?>

	<?php if ( $books->have_posts() ) : ?>

		<div class="masonry-container container-fluid---- px-0---">
			<div class="grid">

				<?php while ( $books->have_posts() ) : $books->the_post(); ?>

					<div class="grid-item reveal1">	
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
		</div>

			<script type="text/javascript">            
			jQuery(document).ready(function($) {

				$('.grid').isotope({
					itemSelector: '.grid-item',

					layoutMode: 'masonry',
					masonry: {
						columnWidth: 130
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

		<div class="masonry-container">

			<?php get_template_part( 'loop-templates/content', 'none' ); ?>				

		</div>

	<?php endif; ?>

</div><!-- #index-wrapper -->

<?php
get_footer();
