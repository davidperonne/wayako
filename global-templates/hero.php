<?php
/**
 * Hero setup
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( is_page_template( 'page-templates/homepage.php' ) ||
	is_page_template( 'page-templates/qui-suis-je.php' ) ||
	is_page_template( 'page-templates/prestations.php' ) ||
	is_page_template( 'page-templates/contact.php' )
) {
	// code.
	?>
	<header class="entry-header d-flex hero">

		<?php if ( have_rows( 'header' ) ) : ?>
			<?php while ( have_rows( 'header' ) ) :
				the_row(); ?>

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

					<?php if ( $title = get_sub_field( 'title' ) ) : ?>
						<h1><?php echo esc_html( $title ); ?></h1>
					<?php endif; ?>

					<?php if ( ! is_page_template( 'page-templates/contact.php' ) ) : ?>
						<a class="btn btn-light" href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>"><?php echo esc_html__( 'Let\'s meet up', 'wayako' ); ?></a>
					<?php endif; ?>

				</div>

			<?php endwhile; ?>
		<?php endif; ?>

	</header>
	<?php
}


// if(function_exists('seopress_display_breadcrumbs')) { seopress_display_breadcrumbs(); } 

