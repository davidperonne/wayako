<?php
/**
 * Hero Block Template.
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
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block_hero_' . $block['id'];
$block_class  = 'block-hero alignfull';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';
?>

<header id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">

	<?php if ( get_field( 'header_type' ) == 2 ) : ?>

		<div class="container--- block-hero__inner alignwide">

			<?php if ( $sub_title = get_field( 'sub_title' ) ) : ?>
				<p class="block-hero__sub-title"><?php echo esc_html( $sub_title ); ?></p>
			<?php endif; ?>

			<?php if ( $title = get_field( 'title' ) ) : ?>
				<h1 class="block-hero__title"><?php echo esc_html( $title ); ?></h1>
			<?php endif; ?>

			<?php if ( function_exists( 'seopress_display_breadcrumbs' ) ) { seopress_display_breadcrumbs(); } ?>

		</div>

	<?php endif; ?>

</header>
