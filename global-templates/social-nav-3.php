<?php
/**
 * Social template
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="social-nav-3 fade-up">
	<?php if ( $facebook = get_field( 'facebook', 'options' ) ) : ?>
		<a href="<?php echo  esc_url( $facebook ); ?>" class="social-link" title="<?php echo esc_attr__( 'Facebook', 'wayako' ); ?>" rel="noopener, noreferrer" target="_blank">
			<span class="icon icon-facebook"></span><span class="visually-hidden"><?php echo esc_html__( 'Facebook', 'wayako' ); ?></span>
		</a>
	<?php endif; ?>

	<?php if ( $instagram = get_field( 'instagram', 'options' ) ) : ?>
		<a href="<?php echo esc_url( $instagram ); ?>" class="social-link" title="<?php echo esc_attr__( 'Instagram', 'wayako' ); ?>" rel="noopener, noreferrer" target="_blank">
			<span class="icon icon-instagram"></span><span class="visually-hidden"><?php echo esc_html__( 'Instagram', 'wayako' ); ?></span>
		</a>
	<?php endif; ?>
</div>
