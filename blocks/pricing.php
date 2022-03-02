<?php
/**
 * Pricing Block Template.
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
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block_pricing_' . $block['id'];
$block_class  = 'block-pricing ';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">

	<div class="container-- block-pricing__inner">

		<?php if ( $title = get_field( 'title' ) ) : ?>
			<h3 class="block-pricing__title h4"><?php echo esc_html( $title ); ?></h3>
		<?php endif; ?>

		<?php if ( $sub_title = get_field( 'sub_title' ) ) : ?>
			<p class="block-pricing__sub-title"><?php echo esc_html( $sub_title ); ?></p>
		<?php endif; ?>

		<?php if ( $sub_title = get_field( 'price' ) ) : ?>
			<p class="block-pricing__price"><?php echo esc_html( $sub_title ); ?><span class="block-pricing__price-currency">€</span></p>
			<span class="block-pricing__price-detail">Mensuellement</span>
		<?php endif; ?>

		<?php if ( $description = get_field( 'description' ) ) : ?>
			<div class="block-pricing__description"><?php echo wp_kses_post( $description ); ?></div>
		<?php endif; ?>

		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link">Prendre contact</a></div>


		<?php
		if ( $url = get_field( 'link' ) ) : ?>
			<a class="block-pricing__link button" href="<?php echo esc_url( $url ); ?>" >En savoir plus >></a>
		<?php endif; ?>

	</div>

</div>
