<?php
/**
 * Partial template for header in page.php
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<header class="entry-header hero hero-expertise d-flex justify-content-center">

	<?php if ( $header_image = get_field( 'header_image' ) ) : ?>
		<figure class="is-background">
			<?php echo wp_get_attachment_image( $header_image['id'], '16_9_landscape_large', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $header_image['alt'] ) ) ); ?>
		</figure>
	<?php endif; ?>

	<div class="hero-expertise__content align-self-center">

		<?php if ( $header_number = get_field( 'header_number', $post->ID ) ) : ?>
			<div class="hero-expertise__number"><?php echo esc_html( $header_number ); ?></div>
		<?php endif; ?>

		<?php
		$header_logo_white = get_field( 'header_logo_white' );
		if ( $header_logo_white ) : ?>
			<img class="hero-expertise__picto" src="<?php echo esc_url( $header_logo_white['url'] ); ?>" alt="<?php echo esc_attr( $header_logo_white['alt'] ); ?>" />
		<?php endif; ?>


		<?php the_title( '<h1 class="hero-expertise__title mb-4">', '</h1>' ); ?>

		<?php if ( $header_sub_heading = get_field( 'header_sub_heading' ) ) : ?>
			<div class="hero-expertise__sub-heading mb-4"><?php echo $header_sub_heading; ?></div>
		<?php endif; ?>

		<?php if ( $header_description = get_field( 'header_description' ) ) : ?>
			<div class="hero-expertise__description"><?php echo $header_description; ?></div>
		<?php endif; ?>

	</div>

	<a href="#mouse_scroll_anchor" id="scroll_button" class="hero-mouse-scroll" title="<?php esc_html_e( 'Descendre', 'wayako' ); ?>">
	<div class="hero-mouse-scroll__inner">
			<span class="visually-hidden"><?php esc_html_e( 'Descendre', 'wayako' ); ?></span>
		</div>
	</a>

</header>
<div id="mouse_scroll_anchor" class="mt-5"></div>


