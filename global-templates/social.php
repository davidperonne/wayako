<?php
/**
 * Social template
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="social-nav text-center px-3">
	<?php if ( $facebook = get_field( 'facebook', 'options' ) ) : ?>
		<a href="<?php echo  esc_url( $facebook ); ?>" class="social-link" title="<?php echo esc_attr__( 'Facebook', 'wayako' ); ?>">
			<span class="icon-facebook"></span><span class="visually-hidden"><?php echo esc_html__( 'Facebook', 'wayako' ); ?></span>
		</a>
	<?php endif; ?>

	<?php if ( $twitter = get_field( 'twitter', 'options' ) ) : ?>
		<a href="<?php echo esc_url( $twitter ); ?>" class="social-link" title="<?php echo esc_attr__( 'Twitter', 'wayako' ); ?>">
			<span class="icon-twitter"></span><span class="visually-hidden"><?php echo esc_html__( 'Twitter', 'wayako' ); ?></span>
		</a>
	<?php endif; ?>

	<?php if ( $instagram = get_field( 'instagram', 'options' ) ) : ?>
		<a href="<?php echo esc_url( $instagram ); ?>" class="social-link" title="<?php echo esc_attr__( 'Instagram', 'wayako' ); ?>">
			<span class="icon-instagram"></span><span class="visually-hidden"><?php echo esc_html__( 'Instagram', 'wayako' ); ?></span>
		</a>
	<?php endif; ?>

	<?php if ( $linkedin = get_field( 'linkedin', 'options' ) ) : ?>
		<a href="<?php echo esc_url( $linkedin ); ?>" class="social-link" title="<?php echo esc_attr__( 'Linkedin', 'wayako' ); ?>">
			<span class="icon-linkedin"></span><span class="visually-hidden"><?php echo esc_html__( 'Linkedin', 'wayako' ); ?></span>
		</a>
	<?php endif; ?>
</div>
