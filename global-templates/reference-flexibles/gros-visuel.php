<?php
/**
 * Gros visuel template.
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!-- Section gros visuel -->
<section class="gros-visuel">

	<?php if ( $image = get_sub_field( 'image' ) ) : ?>
		<figure class="mb-0">
			<?php echo wp_get_attachment_image( $image['id'], '16_9_landscape_large', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
		</figure>
	<?php endif; ?>

</section>
