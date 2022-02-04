<?php
/**
 * Double image Block Template.
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
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block_double_images_' . $block['id'];
$block_class  = 'block-double-images';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">

	<?php if ( $image_1 = get_field( 'image_1' ) ) : ?>
		<figure class="">
			<?php echo wp_get_attachment_image( $image_1['id'], 'square_large', false, array( 'class' => 'img-contain reveal1', 'alt' => esc_attr( $image_1['alt'] ) ) ); ?>
		</figure>
	<?php endif; ?>

	<?php if ( $image_2 = get_field( 'image_2' ) ) : ?>
		<figure class="">
			<?php echo wp_get_attachment_image( $image_2['id'], 'square_large', false, array( 'class' => 'img-contain reveal1', 'alt' => esc_attr( $image_2['alt'] ) ) ); ?>
		</figure>
	<?php endif; ?>

</div>
