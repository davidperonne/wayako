<?php
/**
 * Prestations
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php if ( have_rows( 'prestations_banner' ) ) : ?>

	<!-- Section prestations-banner -->
	<section class="prestations-banner container">
		<div class="prestations-banner__content d-flex flex-column flex-md-row justify-content-between align-items-center flex-wrap">

			<?php while ( have_rows( 'prestations_banner' ) ) :
				the_row();

				$background_style = '';
				if ( $color = get_sub_field( 'color' ) ) {
					$background_style = 'style="background-color: ' . $color . '"';
				}
				?>

				<div class="d-flex flex-column justify-content-center align-items-center text-center mx-2" <?php echo $background_style; ?>>
					<?php
					$icon = get_sub_field( 'icon' );
					if ( $icon ) : ?>
						<img class="icon" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
					<?php endif; ?>

					<?php if ( $title = get_sub_field( 'title' ) ) : ?>
						<span><?php echo esc_html( $title ); ?></span>
					<?php endif; ?>
				</div>

			<?php endwhile; ?>

		</div>
	</section>

<?php endif; ?>
