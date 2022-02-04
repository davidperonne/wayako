<?php
/**
 * Partial template for header in page.php
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<header class="entry-header hero hero-reference d-flex">

	<div class="hero-reference__content d-flex justify-content-between">

		<?php the_title( '<h1 class="hero-reference__title">', '</h1>' ); ?>

		<?php if ( $header_sub_heading = get_field( 'header_sub_heading' ) ) : ?>
			<div class="d-flex align-self-center hero-reference__sub-heading"><?php echo $header_sub_heading; ?></div>
		<?php endif; ?>

	</div>

	<?php if ( $header_image = get_field( 'header_image' ) ) : ?>
		<figure class="hero-reference__image mb-0">
			<?php echo wp_get_attachment_image( $header_image['id'], 'square_large', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $header_image['alt'] ) ) ); ?>
		</figure>
	<?php endif; ?>

	<a href="#" class="hero-reference__return" title="<?php esc_html_e( 'Retour', 'wayako' ); ?>">
		<span class="visually-hidden"><?php esc_html_e( 'Retour', 'wayako' ); ?></span>
	</a>

	<a href="#mouse_scroll_anchor" id="scroll_button" class="hero-mouse-scroll" title="<?php esc_html_e( 'Descendre', 'wayako' ); ?>">
		<div class="hero-mouse-scroll__inner">
			<span class="visually-hidden"><?php esc_html_e( 'Descendre', 'wayako' ); ?></span>
		</div>
	</a>

</header>
<div id="mouse_scroll_anchor" class="mt-5"></div>



