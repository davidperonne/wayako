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

		<!-- Section coordonnees -->
		<section class="coordonnees">
			<div class="container d-flex flex-column flex-lg-row">

				<?php while ( have_rows( 'coordonnees' ) ) :
					the_row(); ?>

					<div class="left align-self-center">

						<?php if ( $title = get_sub_field( 'title' ) ) : ?>
							<h2 class="fade-up"><?php echo esc_html( $title ); ?></h2>
						<?php endif; ?>

						<?php if ( $description = get_sub_field( 'description' ) ) : ?>
							<div class="description fade-up"><?php echo wp_kses_post( $description ); ?></div>
						<?php endif; ?>

						<?php get_template_part( 'global-templates/social-nav-3' ); ?>

					</div>
					<div class="right align-self-center">

						<?php
						$image_1 = get_sub_field( 'image_1');
						if ( $image_1 ) : ?>
							<figure class="figure-img-1">
								<?php echo wp_get_attachment_image( $image_1['id'], 'medium_large', false, array( 'class' => 'attachment-medium_large size-medium_large img-1 img-cover reveal1', 'alt' => esc_attr( $image_1['alt'] ) ) ); ?>
							</figure>
						<?php endif; ?>

						<?php
						$image_2 = get_sub_field( 'image_2');
						if ( $image_2 ) : ?>
							<figure class="figure-img-2">
								<?php echo wp_get_attachment_image( $image_2['id'], 'medium_large', false, array( 'class' => 'attachment-medium_large size-medium_large img-2 img-cover reveal1', 'alt' => esc_attr( $image_2['alt'] ) ) ); ?>
							</figure>
						<?php endif; ?>

						<?php if ( $caption = get_sub_field( 'caption' ) ) : ?>
							<div class="caption reveal1"><?php echo esc_html( $caption ); ?></div>
						<?php endif; ?>

					</div>

				<?php endwhile; ?>

			</div>
		</section>

	<?php endif; ?>

	<?php if ( have_rows( 'contact' ) ) : ?>
		<?php while ( have_rows( 'contact' ) ) :
			the_row(); ?>

			<!-- Section contact -->
			<section id="contact" class="contact">
				<div class="container">

					<?php if ( $title = get_sub_field( 'title' ) ) : ?>
						<h2 class="fade-up"><?php echo esc_html( $title ); ?></h2>
					<?php endif; ?>

					<?php if ( $description = get_sub_field( 'description' ) ) : ?>
						<p class="description fade-up"><?php echo wp_kses_post( $description ); ?></p>
					<?php endif; ?>

					<?php if ( $formulaire_de_contact = get_sub_field( 'formulaire_de_contact' ) ) : ?>
						<?php echo do_shortcode( wp_kses_post( $formulaire_de_contact ) ); ?>
					<?php endif; ?>

				</div>
			</section>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'rendez-vous' ) ) : ?>
		<?php while ( have_rows( 'rendez-vous' ) ) :
			the_row(); ?>

			<!-- Section rendez-vous -->
			<section class="rendez-vous">
				<div class="container d-flex flex-column flex-md-row">

					<div class="left">

						<?php
						$image = get_sub_field( 'image');
						if ( $image ) : ?>
						<figure>
							<?php echo wp_get_attachment_image( $image['id'], 'medium_large', false, array( 'class' => 'attachment-medium_large size-medium_large img-contain reveal1', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
						</figure>	<?php endif; ?>


						<?php
						$logo = get_sub_field( 'logo');
						if ( $logo ) : ?>
							<?php echo wp_get_attachment_image( $logo['id'], 'medium_large', false, array( 'class' => 'attachment-medium_large size-medium_large logo img-contain reveal1', 'alt' => esc_attr( $logo['alt'] ) ) ); ?>
						<?php endif; ?>

					</div>
					<div class="right align-self-center">

						<?php if ( $title = get_sub_field( 'title' ) ) : ?>
							<h2 class="fade-up"><?php echo esc_html( $title ); ?></h2>
						<?php endif; ?>

						<?php if ( $description = get_sub_field( 'description' ) ) : ?>
							<div class="description fade-up"><?php echo wp_kses_post( $description ); ?></div>
						<?php endif; ?>

						<a class="btn btn-green fade-up" href="#contact"><?php echo esc_html__( 'Let\'s meet up', 'wayako' ); ?></a>

					</div>

				</div>
			</section>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php get_template_part( 'global-templates/parallax-footer' ); ?>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
