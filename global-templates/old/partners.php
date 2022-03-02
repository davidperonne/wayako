<?php
/**
 * Partners
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!-- Section partners-banner -->
<section class="partners container text-center" id="partners">

	<?php if ( $partners_title = get_field( 'partners_title', 'options' ) ) : ?>
		<h2 class="display-2 fade-up"><?php echo esc_html( $partners_title ); ?></h2>
	<?php endif; ?>

	<?php if ( have_rows( 'partners', 'options' ) ) : ?>
		<div class="flexslider partners__flexslider">
			<ul class="slides d-flex">
				<?php while ( have_rows( 'partners', 'options' ) ) :
					the_row(); ?>

					<li>
						<?php if ( $link = get_sub_field( 'link', 'options' ) ) : ?>
							<a href="<?php echo esc_url( $link ); ?>">
						<?php endif; ?>

						<?php
						$image = get_sub_field( 'image', 'options' );
						if ( $image ) : ?>
							<?php echo wp_get_attachment_image( $image['id'], 'medium', false, array( 'alt' => esc_attr( $image['alt'] ) ) ); ?>
						<?php endif; ?>

						<?php if ( $link = get_sub_field( 'link', 'options' ) ) : ?>
							</a>
						<?php endif; ?>
					</li>

				<?php endwhile; ?>
			</ul>
		</div>
	<?php endif; ?>

</section>
