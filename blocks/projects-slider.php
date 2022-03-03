<?php
/**
 * Projects slider Block Template.
 *
 * @param  array       $block       The block settings and attributes.
 * @param  string      $content     The block inner HTML (empty).
 * @param  bool        $is_preview  True during AJAX preview.
 * @param  int|string  $post_id     The post ID this block is saved to.
 *
 * @package Wayako
 */

defined( 'ABSPATH' ) || die();

// Build the basic block id and class.
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block_projects_slider_' . $block['id'];
$block_class  = 'block-projects-slider alignfull ';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">

	<?php
	$args = array(
		'post_type' => 'portfolio',

	);
	$portfolio = new WP_Query( $args );
	?>

	<?php if ( $portfolio->have_posts() ) : ?>

		<div class="splide">
			<div class="splide__track">
				<ul class="splide__list">

					<?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

						<li class="splide__slide">
							<a class="" href="<?php echo esc_url( get_permalink() ); ?>">
								<figure>
									<?php echo get_the_post_thumbnail( get_the_ID(), 'medium_large', array( 'class' => 'img-cover' ) ); ?>
									<figcaption>										
										<?php the_title( '<h3 class="splide__slide__title">', '</h3>' ); ?>
									</figcaption>
								</figure>	
							</a>
						</li>

					<?php endwhile; ?>	

				</ul>
			</div>
		</div>

		<script type="text/javascript">            
			jQuery(document).ready(function($) {

				var splide = new Splide( '.splide', {
					type   : 'loop',
					perPage: 3,
					perMove: 1,
					pagination: false,
					arrowPath: 'm13.5 7.01 13 13m-13 13 13-13',
				} );

				splide.mount();

			});
		</script>

	<?php else : ?>

		<?php get_template_part( 'loop-templates/content', 'none' ); ?>				

	<?php endif; ?>

</div>
