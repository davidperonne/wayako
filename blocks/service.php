<?php
/**
 * Service Block Template.
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
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block_service_' . $block['id'];
$block_class  = 'block-service ';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">

	<div class="container block-service__inner">

		<?php
		$image = get_field( 'image' );
		if ( $image ) : ?>
			<img class="block-service__picto" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
		<?php endif; ?>

		<?php if ( $title = get_field( 'title' ) ) : ?>
			<h2 class="block-service__title"><?php echo esc_html( $title ); ?></h2>
		<?php endif; ?>


		<?php if ( $description = get_field( 'description' ) ) : ?>
			<p class="block-service__description"><?php echo esc_html( $description ); ?></p>
		<?php endif; ?>

		<?php
		if ( $url = get_field( 'link' ) ) : ?>
			<a class="block-service__link" href="<?php echo esc_url( $url ); ?>" >En savoir plus >></a>
		<?php endif; ?>

	</div>

</div>
