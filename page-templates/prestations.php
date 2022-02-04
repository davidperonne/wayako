<?php
/**
 * Template Name: Prestations
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

	<?php if ( have_rows( 'prestations' ) ) : ?>

		<!-- Section prestations -->
		<section class="prestations">
			<div class="prestations__content container-xl">

				<?php while ( have_rows( 'prestations' ) ) :
					the_row(); ?>

					<?php if ( $title = get_sub_field( 'title' ) ) : ?>
						<h2 class="display-2 fade-up text-center fade-up"><?php echo esc_html( $title ); ?></h2>
					<?php endif; ?>

					<div id="organisation" class="content-1">

						<?php if ( $sub_title_1 = get_sub_field( 'sub_title_1' ) ) : ?>
							<h3 class="prestations__sub-title fade-up"><?php echo wp_kses_post( $sub_title_1 ); ?></h3>
						<?php endif; ?>
						<?php if ( $description_1 = get_sub_field( 'description_1' ) ) : ?>
							<div class="fade-up"><?php echo $description_1; ?></div>
						<?php endif; ?>

					</div>

					<div class="illustrations"> 

						<?php
						$image_left = get_sub_field( 'image_left');
						if ( $image_left ) : ?>
							<figure class="figure-img-1">
								<?php echo wp_get_attachment_image( $image_left['id'], 'medium_large', false, array( 'class' => 'attachment-medium_large size-medium_large img-left img-cover reveal1', 'alt' => esc_attr( $image_left['alt'] ) ) ); ?>
							</figure>
						<?php endif; ?>

						<?php
						$image_right = get_sub_field( 'image_right');
						if ( $image_right ) : ?>
							<figure class="figure-img-2">
								<?php echo wp_get_attachment_image( $image_right['id'], 'medium_large', false, array( 'class' => 'attachment-medium_large size-medium_large img-right img-cover reveal1', 'alt' => esc_attr( $image_right['alt'] ) ) ); ?>
							</figure>
						<?php endif; ?>

						<?php
						$logo = get_sub_field( 'logo');
						if ( $logo ) : ?>
							<figure class="logo">
								<?php echo wp_get_attachment_image( $logo['id'], 'medium_large', false, array( 'class' => 'attachment-medium_large size-medium_large img-logo img-contain reveal1', 'alt' => esc_attr( $logo['alt'] ) ) ); ?>
							</figure>	
						<?php endif; ?>

					</div>

					<div class="d-flex flex-column flex-md-row">
						<div id="jour-j" class="content-2">

							<?php if ( $sub_title_2 = get_sub_field( 'sub_title_2' ) ) : ?>
								<h3 class="prestations__sub-title fade-up"><?php echo esc_html( $sub_title_2 ); ?></h3>
							<?php endif; ?>
							<?php if ( $description_2 = get_sub_field( 'description_2' ) ) : ?>
							<div class="fade-up"><?php echo $description_2; ?></div>
							<?php endif; ?>

						</div>

						<div id="ceremonie-laique" class="content-3">

							<?php if ( $sub_title_3 = get_sub_field( 'sub_title_3' ) ) : ?>
								<h3 class="prestations__sub-title fade-up"><?php echo esc_html( $sub_title_3 ); ?></h3>
							<?php endif; ?>
							<?php if ( $description_3 = get_sub_field( 'description_3' ) ) : ?>
							<div class="fade-up"><?php echo $description_3; ?></div>
							<?php endif; ?>

						</div>
					</div>

				<?php endwhile; ?>

			</div>
		</section>

	<?php endif; ?>


	<?php if ( have_rows( 'etapes_banner' ) ) : ?>

		<!-- Section etapes-banner -->
		<section id="etapes" class="etapes-banner">
			<div class="etapes-banner__content container">

				<?php while ( have_rows( 'etapes_banner' ) ) :
					the_row(); ?>

					<?php if ( $image = get_sub_field( 'image' ) ) : ?>
						<figure>
							<?php echo wp_get_attachment_image( $image['id'], 'medium_large', false, array( 'class' => 'attachment-medium_large size-medium_large img-cover reveal1', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
							<figcaption class="d-flex flex-column justify-content-center align-items-center">

								<?php if ( $title = get_sub_field( 'title' ) ) : ?>
									<h2 class="display-2 fade-up"><?php echo esc_html( $title ); ?></h2>
								<?php endif; ?>

								<a class="btn btn-light" href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>"><?php echo esc_html__( 'Let\'s meet up', 'wayako' ); ?></a>

							</figcaption>
						</figure>
					<?php endif; ?>

					<?php if ( have_rows( 'etapes' ) ) : ?>
						<div class="row etapes">
							<div class="col-12 col-md-6 align-self-center">

								<?php while ( have_rows( 'etapes' ) ) :
									the_row(); ?>

									<div class="etape">

										<span class="etape__number fade-up">0<?php echo get_row_index(); ?></span>

										<?php if ( $title = get_sub_field( 'title' ) ) : ?>
											<h3 class="etape__title fade-up"><?php echo esc_html( $title ); ?></h3>
										<?php endif; ?>

										<?php if ( $description = get_sub_field( 'description' ) ) : ?>
											<div class="etape__description fade-up"><?php echo $description; ?></div>
										<?php endif; ?>

									</div>

									<?php if ( get_row_index() == 3 ) : ?>
										</div>
										<div class="col-12 col-md-6 align-self-center">
									<?php endif; ?>

								<?php endwhile; ?>

							</div>
						</div>
					<?php endif; ?>

				<?php endwhile; ?>

			</div>
		</section>

	<?php endif; ?>

	<?php get_template_part( 'global-templates/prestations' ); ?>

	<!-- Section images-banner -->
	<?php if ( have_rows( 'images_banner' ) ) : ?>
		<section class="images-banner d-flex flex-row">
			<?php while ( have_rows( 'images_banner' ) ) :
				the_row(); ?>

				<?php if ( $image = get_sub_field( 'image' ) ) : ?>
					<figure>
						<?php echo wp_get_attachment_image( $image['id'], 'square_large', false, array( 'class' => 'img-contain reveal1', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
					</figure>
				<?php endif; ?>

			<?php endwhile; ?>
		</section>
	<?php endif; ?>

	<?php //get_template_part( 'global-templates/partners' ); ?>

	<?php get_template_part( 'global-templates/parallax-footer' ); ?>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
