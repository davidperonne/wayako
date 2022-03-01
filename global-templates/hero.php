<?php
/**
 * Hero setup
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


if ( is_page( 'faq' ) ||
	is_page( 'tarifs' )
) {

	// code.
	?>
	<header class="entry-header d-flex hero">

		<?php if ( have_rows( 'header' ) ) : ?>
			<?php while ( have_rows( 'header' ) ) :
				the_row(); ?>

				<?php if ( get_sub_field( 'header_type' ) == 2 ) : ?>

					<?php if ( $image = get_sub_field( 'image' ) ) : ?>

						<?php
						// Responsives backgrounds inline styles : for testimonials and parallax footer (based on this hero image).
						$big_image_output   = wp_get_attachment_image_url( $image['id'], '16_9_landscape_medium_large' );
						$small_image_output = wp_get_attachment_image_url( $image['id'], 'medium_large' );

						$custom_css = "
						/* Mobiles */
							.parallax-hero-bg{
						background-image:url('{$small_image_output}');
						}
						/* Desktop */
						@media screen and (min-width: 768px) {
							.parallax-hero-bg{
							background-image:url('{$big_image_output}');
							} 
						} ";

						echo '<style>' . $custom_css . '</style>';
						?>

						<figure class="is-background">
							<?php echo wp_get_attachment_image( $image['id'], '16_9_landscape_medium_large', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $image['alt'] ), 'loading' => false ) ); ?>
						</figure>
					<?php endif; ?>

					<div class="container d-flex flex-column align-items-center align-self-center">

						<?php if ( $sub_title = get_sub_field( 'sub_title' ) ) : ?>
							<p><?php echo esc_html( $sub_title ); ?></p>
						<?php endif; ?>

						<?php if ( $title = get_sub_field( 'title' ) ) : ?>
							<h1><?php echo esc_html( $title ); ?></h1>
						<?php endif; ?>

						<?php if ( function_exists( 'seopress_display_breadcrumbs' ) ) { seopress_display_breadcrumbs(); } ?>

					</div>

				<?php endif; ?>

			<?php endwhile; ?>
		<?php endif; ?>

	</header>
	<?php
}




