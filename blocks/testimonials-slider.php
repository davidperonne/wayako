<?php
/**
 * Testimonials slider Block Template.
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
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block_testimonials_slider_' . $block['id'];
$block_class  = 'block-testimonials-slider alignwide ';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">

	<?php if ( have_rows( 'testimonials' ) ) : ?>

		<div class="splide testimonials">
			<div class="splide__track">
				<ul class="splide__list">

					<?php while ( have_rows( 'testimonials' ) ) :
						the_row(); ?>

						<li class="splide__slide">
							<div class="splide__slide-inner">

								<?php if ( $testimonial = get_sub_field( 'testimonial' ) ) : ?>
									<p class="block-testimonials-slider__testimonial">“ <?php echo esc_html( $testimonial ); ?> ”</p>
								<?php endif; ?>

								<?php if ( $name = get_sub_field( 'name' ) ) : ?>
									<p class="block-testimonials-slider__name"><?php echo esc_html( $name ); ?></p>
								<?php endif; ?>

								<?php if ( $function = get_sub_field( 'function' ) ) : ?>
									<p class="block-testimonials-slider__function"><?php echo esc_html( $function ); ?></p>
								<?php endif; ?>
							</div>
						</li>

					<?php endwhile; ?>

				</ul>
			</div>
		</div>

	<?php endif; ?>

	<script type="text/javascript">            
		jQuery(document).ready(function($) {

			var splide = new Splide( '.testimonials', {
				type   : 'loop',
				perPage: 2,
				perMove: 1,
				pagination: false,
				arrowPath: 'm13.5 7.01 13 13m-13 13 13-13',
			} );

			splide.mount();

		});
	</script>

</div>
