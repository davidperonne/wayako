<?php
/**
 * Partial template for header in page.php
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<header class="entry-header hero hero-homepage">

	<?php if ( $header_image = get_field( 'header_image' ) ) : ?>
		<figure class="is-background">
			<?php echo wp_get_attachment_image( $header_image['id'], '16_9_landscape_large', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $header_image['alt'] ) ) ); ?>
		</figure>
	<?php endif; ?>

	<div class="container"></div>

</header>
