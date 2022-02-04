<?php
/**
 * Phone template
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="phone">
	<?php if ( $header_text = get_field( 'header_text', 'options' ) ) : ?>
		<span><?php echo esc_html( $header_text ); ?></span>
	<?php endif; ?>

	<?php if ( ( $phone = get_field( 'phone', 'options' ) ) && ( $phone_link = get_field( 'phone_link', 'options' ) ) ) : ?>
		<a href="tel:<?php echo  wp_kses_post( $phone_link ); ?>" class="phone-link">
			<?php echo esc_html( $phone ); ?>
		</a>
	<?php endif; ?>
</div>
