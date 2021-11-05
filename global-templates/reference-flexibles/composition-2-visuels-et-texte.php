<?php
/**
 * Composition 2 visuels et texte template.
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$description_style = '';
if ( $background_color = get_sub_field( 'background_color' ) ) {
	$description_style .= 'style="background-color: ' . esc_html( $background_color ) . ';"';
}
?>

<!-- Section composition 2 visuels et texte -->
<section class="composition-2-visuels-et-texte">

	<div class="d-flex flex-column flex-lg-row">

		<div class="left d-flex flex-column">

			<?php if ( $image_left = get_sub_field( 'image_left' ) ) :
				echo wp_get_attachment_image( $image_left['id'], '4_3_portrait_large', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $image_left['alt'] ) ) );
			endif;
			?>

			<?php if ( $legende_left = get_sub_field( 'legende_left' ) ) : ?>
				<div class="legende"><?php echo esc_html( $legende_left ); ?></div>
			<?php endif; ?>

		</div>
		<div class="right d-flex flex-column flex-lg-row">

			<?php if ( $image_right = get_sub_field( 'image_right' ) ) :
				echo wp_get_attachment_image( $image_right['id'], '4_3_portrait_large', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $image_right['alt'] ) ) );
			endif;
			?>

			<?php if ( $legende_right = get_sub_field( 'legende_right' ) ) : ?>
				<div class="legende"><?php echo esc_html( $legende_right ); ?></div>
			<?php endif; ?>

			<?php if ( $description = get_sub_field( 'description' ) ) : ?>
				<div class="description" <?php echo $description_style; ?>><?php echo wp_kses_post( $description ); ?></div>
			<?php endif; ?>

		</div>	
	</div>	

</section>
