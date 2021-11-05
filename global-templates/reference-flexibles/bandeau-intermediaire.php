<?php
/**
 * Bandeau intermédiaire template.
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!-- Section bandeau intermédiaire -->
<section class="bandeau-intermediaire">

	<div class="left">

		<?php if ( $title = get_sub_field( 'title' ) ) : ?>
			<h2><?php echo esc_html( $title ); ?></h2>
		<?php endif; ?>

		<?php if ( $description = get_sub_field( 'description' ) ) : ?>
			<div class="description"><?php echo esc_html( $description ); ?></div>
		<?php endif; ?>

	</div>	

	<?php if ( $image = get_sub_field( 'image' ) ) : ?>
		<figure class="mb-0">
			<?php echo wp_get_attachment_image( $image['id'], '16_9_landscape_large', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
		</figure>
	<?php endif; ?>

</section>
