<?php
/**
 * Template Name: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php get_template_part( 'global-templates/hero' ); ?>

<div class="wrapper" id="full-width-page-wrapper">

	<?php if ( have_rows( 'coordonnees' ) ) : ?>
		<?php while ( have_rows( 'coordonnees' ) ) :
			the_row(); ?>

			<!-- Section coordonnees -->
			<section class="coordonnees d-flex flex-column flex-md-row">

				<div class="left">
					<?php if ( $description = get_sub_field( 'description' ) ) : ?>
						<div class="description"><?php echo wp_kses_post( $description ); ?></div>
					<?php endif; ?>
				</div>

				<div class="right">
					<?php if ( $map = get_sub_field( 'map' ) ) : ?>
						<div class="map"><?php echo $map; ?></div>
					<?php endif; ?>
				</div>	

			</section>

		<?php endwhile; ?>
	<?php endif; ?>


	<?php if ( have_rows( 'contact' ) ) : ?>
		<?php while ( have_rows( 'contact' ) ) :
			the_row(); ?>

			<!-- Section contact -->
			<section class="contact">

				<?php
				if ( $contact_form = get_sub_field( 'contact_form' ) ) {
					echo do_shortcode( wp_kses_post( $contact_form ) );
				}
				?>				

			</section>

		<?php endwhile; ?>
	<?php endif; ?>


	<?php if ( have_rows( 'instagram' ) ) : ?>
		<?php while ( have_rows( 'instagram' ) ) :
			the_row(); ?>

			<!-- Section instagram -->
			<section class="instagram d-flex align-items-center">

				<div class="title">Suivez-nous !</div>

				<?php
				if ( $instagram_form = get_sub_field( 'instagram_form' ) ) {
					echo do_shortcode( wp_kses_post( $instagram_form ) );
				}
				?>

			</section>

		<?php endwhile; ?>
	<?php endif; ?>



</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
