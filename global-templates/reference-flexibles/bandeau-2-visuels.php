<?php
/**
 * Bandeau 2 visuels template.
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!-- Section bandeau 2 visuels -->
<section class="bandeau-2-visuels">

	<div class="left">

		<?php if ( $image_left = get_sub_field( 'image_left' ) ) : ?>
			<?php echo wp_get_attachment_image( $image_left['id'], 'imax_landscape_large', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $image_left['alt'] ) ) ); ?>
		<?php endif; ?>

	</div>
	<div class="right">

		<?php if ( $image_right = get_sub_field( 'image_right' ) ) : ?>
			<?php echo wp_get_attachment_image( $image_right['id'], '4_3_portrait_large', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $image_right['alt'] ) ) ); ?>
		<?php endif; ?>

	</div>

</section>
