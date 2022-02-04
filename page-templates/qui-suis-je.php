<?php
/**
 * Template Name: Qui suis-je
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

	<?php if ( have_rows( 'qui_suis-je' ) ) : ?>

		<!-- Section qui-suis-je -->
		<section id="qui-suis-je" class="qui-suis-je">
			<div class="d-flex flex-column flex-lg-row">

				<?php while ( have_rows( 'qui_suis-je' ) ) :
					the_row(); ?>

					<div class="right d-flex order-lg-last">

						<div class="inner-content align-self-center">
							<?php if ( $title = get_sub_field( 'title' ) ) : ?>
								<h2 class="fade-up"><?php echo esc_html( $title ); ?></h2>
							<?php endif; ?>

							<?php if ( $description = get_sub_field( 'description' ) ) : ?>
								<div class="description fade-up"><?php echo wp_kses_post( $description ); ?></div>
							<?php endif; ?>

							<?php if ( $signature = get_sub_field( 'signature' ) ) : ?>
								<div class="qui-suis-je__signature fade-up"><?php echo esc_html( $signature ); ?></div>
							<?php endif; ?>

							<?php if ( $function = get_sub_field( 'function' ) ) : ?>
								<div class="qui-suis-je__function fade-up"><?php echo wp_kses_post( $function ); ?></div>
							<?php endif; ?>
						</div>

					</div>
					<div class="left align-self-center order-lg-first ">

						<?php
						$image_1 = get_sub_field( 'image_1');
						if ( $image_1 ) : ?>
							<figure class="figure-img-1">
								<?php echo wp_get_attachment_image( $image_1['id'], 'medium_large', false, array( 'class' => 'attachment-medium_large size-medium_large img-1 img-contain reveal1', 'alt' => esc_attr( $image_1['alt'] ) ) ); ?>
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

	<?php if ( have_rows( 'mes_formations' ) ) : ?>

		<!-- Section mes-formations -->
		<section id="mes-formations" class="mes-formations">

			<?php while ( have_rows( 'mes_formations' ) ) :
				the_row(); ?>

				<?php if ( $title = get_sub_field( 'title' ) ) : ?>
					<h2 class="display-2 text-center fade-up"><?php echo esc_html( $title ); ?></h2>
				<?php endif; ?>

				<?php if ( have_rows( 'formations' ) ) : ?>

					<div class="formations">

						<?php while ( have_rows( 'formations' ) ) :
							the_row(); ?>

							<div class="formation">

								<div class="formation__title">

									<span class="formation__number fade-up">0<?php echo get_row_index(); ?></span>

									<?php if ( $title = get_sub_field( 'title' ) ) : ?>
										<h3 class="fade-up"><?php echo esc_html( $title ); ?></h3>
									<?php endif; ?>

								</div>

								<?php
								$image = get_sub_field( 'image');
								if ( $image ) : ?>
								<figure>
									<?php echo wp_get_attachment_image( $image['id'], 'medium_large', false, array( 'class' => 'attachment-medium_large size-medium_large img-cover reveal1', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
								</figure>
									<?php endif; ?>

							</div>

						<?php endwhile; ?>

					</div>

				<?php endif; ?>

			<?php endwhile; ?>

		</section>

	<?php endif; ?>

	<?php if ( have_rows( 'mon_parcours' ) ) : ?>

		<!-- Section mon-parcours -->
		<section id="mon-parcours" class="mon-parcours">
			<div class="container">

				<?php while ( have_rows( 'mon_parcours' ) ) :
					the_row(); ?>

					<?php if ( $title = get_sub_field( 'title' ) ) : ?>
						<h2 class="display-2 text-center fade-up"><?php echo wp_kses_post( $title ); ?></h2>
					<?php endif; ?>

					<div class=" d-flex flex-column flex-lg-row">

						<div class="right align-self-center order-lg-last">

							<?php if ( $sub_title = get_sub_field( 'sub_title' ) ) : ?>
								<h3 class="h2 fade-up"><?php echo esc_html( $sub_title ); ?></h3>
							<?php endif; ?>

							<?php if ( $description = get_sub_field( 'description' ) ) : ?>
								<div class="fade-up"><?php echo $description; ?></div>
							<?php endif; ?>

						</div>
						<div class="left order-lg-first">

							<?php
							$image = get_sub_field( 'image');
							if ( $image ) : ?>
							<figure>
								<?php echo wp_get_attachment_image( $image['id'], 'medium_large', false, array( 'class' => 'attachment-medium_large size-medium_large img-cover reveal1', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
							</figure>
								<?php endif; ?>


							<?php
							$logo = get_sub_field( 'logo');
							if ( $logo ) : ?>
								<?php echo wp_get_attachment_image( $logo['id'], 'medium_large', false, array( 'class' => 'attachment-medium_large size-medium_large logo img-contain reveal1', 'alt' => esc_attr( $logo['alt'] ) ) ); ?>
							<?php endif; ?>

						</div>

					</div>

				<?php endwhile; ?>

			</div>
		</section>

	<?php endif; ?>

	<?php if ( have_rows( 'mes_valeurs' ) ) : ?>

		<!-- Section mes-valeurs -->
		<section id="mes-valeurs" class="mes-valeurs">

			<?php while ( have_rows( 'mes_valeurs' ) ) :
				the_row(); ?>

				<?php if ( $title = get_sub_field( 'title' ) ) : ?>
					<h2 class="display-2 text-center fade-up"><?php echo esc_html( $title ); ?></h2>
				<?php endif; ?>

				<?php if ( have_rows( 'valeurs' ) ) : ?>

					<div class="valeurs d-flex flex-column flex-lg-row justify-content-between">

						<?php while ( have_rows( 'valeurs' ) ) :
							the_row();

							$background_style = '';
							if ( $color = get_sub_field( 'color' ) ) {
								$background_style = 'style="background-color: ' . $color . '"';
							}
							?>

							<div class="item w-100" <?php echo $background_style; ?>>

								<span class="item__number fade-up">0<?php echo get_row_index(); ?></span>

								<?php if ( $title = get_sub_field( 'title' ) ) : ?>
									<h2 class="h3 fade-up"><?php echo esc_html( $title ); ?></h2>
								<?php endif; ?>

								<?php if ( $description = get_sub_field( 'description' ) ) : ?>
									<div class="fade-up"><?php echo $description; ?></div>
								<?php endif; ?>

							</div>

						<?php endwhile; ?>
					</div>
				<?php endif; ?>

			<?php endwhile; ?>

		</section>

	<?php endif; ?>

	<?php get_template_part( 'global-templates/partners' ); ?>

	<?php get_template_part( 'global-templates/parallax-footer' ); ?>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
