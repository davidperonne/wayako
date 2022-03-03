<?php
/**
 * Image box Block Template.
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
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block_image_box_' . $block['id'];
$block_class  = 'block-image-box ';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">


		<?php
		$image = get_field( 'image' );
		if ( $image ) : ?>
			<figure>
				<img class="block-image-box__image" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			</figure>
		<?php endif; ?>

		<div class="block-image-box__content">

			<?php if ( $title = get_field( 'title' ) ) : ?>
				<p class="block-image-box__title h5"><?php echo esc_html( $title ); ?></p>
			<?php endif; ?>

			<?php if ( $description = get_field( 'description' ) ) : ?>
				<p class="block-image-box__description"><?php echo esc_html( $description ); ?></p>
			<?php endif; ?>

		</div>


</div>
