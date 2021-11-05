<?php
/**
 * Template Name: Single expertise
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


	<?php if ( have_rows( 'item_1' ) ) : ?>
		<?php while ( have_rows( 'item_1' ) ) :
			the_row(); ?>

			<!-- Section item 1 -->
			<section class="item-1">

				<div class="first-row d-flex flex-column flex-md-row">
					<div class="left">

						<div class="number">01</div>

						<?php if ( $title = get_sub_field( 'title' ) ) : ?>
							<h2 class="h5"><?php echo esc_html( $title ); ?></h2>
						<?php endif; ?>

						<?php if ( $description = get_sub_field( 'description' ) ) : ?>
							<div class="description"><?php echo wp_kses_post( $description ); ?></div>
						<?php endif; ?>

					</div>
					<div class="right d-flex">

						<?php if ( $image = get_sub_field( 'image' ) ) : ?>
							<?php echo wp_get_attachment_image( $image['id'], 'full', false, array( 'class' => 'd-block w-100', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
						<?php endif; ?>

					</div>	
				</div>	

				<?php if ( $description_2 = get_sub_field( 'description_2' ) ) : ?>
					<div class="description-2"><?php echo wp_kses_post( $description_2 ); ?></div>
				<?php endif; ?>

				<div class="second-row d-flex flex-column flex-md-row">
					<div class="left text-end">

						<?php if ( $slogan = get_sub_field( 'slogan' ) ) : ?>
							<div class="slogan h5"><?php echo esc_html( $slogan ); ?></div>
						<?php endif; ?>

						<?php if ( $image_2 = get_sub_field( 'image_2' ) ) : ?>
							<?php echo wp_get_attachment_image( $image_2['id'], 'full', false, array( 'class' => 'image-2 d-block w-100', 'alt' => esc_attr( $image_2['alt'] ) ) ); ?>
						<?php endif; ?>

						<?php if ( $image_3 = get_sub_field( 'image_3' ) ) : ?>
							<?php echo wp_get_attachment_image( $image_3['id'], 'full', false, array( 'class' => 'image-3 d-block ms-auto', 'alt' => esc_attr( $image_3['alt'] ) ) ); ?>
						<?php endif; ?>

					</div>
					<div class="right d-flex">

						<?php if ( have_rows( 'elements' ) ) : ?>
							<ul class="list-group">
								<?php while ( have_rows( 'elements' ) ) :
									the_row(); ?>

									<li class="list-group-item">
										<?php if ( $title = get_sub_field( 'title' ) ) : ?>
											<h3 class="h5"><?php echo esc_html( $title ); ?></h3>
										<?php endif; ?>

										<?php if ( $description = get_sub_field( 'description' ) ) : ?>
											<div class="description"><?php echo wp_kses_post( $description ); ?></div>
										<?php endif; ?>
									</li>

								<?php endwhile; ?>
							</ul>
						<?php endif; ?>

					</div>	
				</div>	

			</section>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'item_2' ) ) : ?>
		<?php while ( have_rows( 'item_2' ) ) :
			the_row(); ?>

			<!-- Section item 2 -->
			<section class="item-2 d-flex flex-column flex-md-row">

				<div class="right order-md-last">

					<div class="number">02</div>

					<?php if ( $title = get_sub_field( 'title' ) ) : ?>
						<h2 class="h5"><?php echo esc_html( $title ); ?></h2>
					<?php endif; ?>

					<?php if ( $description = get_sub_field( 'description' ) ) : ?>
						<div class="description"><?php echo wp_kses_post( $description ); ?></div>
					<?php endif; ?>

				</div>	
				<div class="left order-md-first">

					<?php if ( $slogan = get_sub_field( 'slogan' ) ) : ?>
						<div class="slogan"><?php echo esc_html( $slogan ); ?></div>
					<?php endif; ?>

					<?php if ( $image = get_sub_field( 'image' ) ) : ?>
						<?php echo wp_get_attachment_image( $image['id'], 'full', false, array( 'class' => 'd-block w-100', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
					<?php endif; ?>

				</div>

			</section>

		<?php endwhile; ?>
	<?php endif; ?>


	<?php if ( have_rows( 'item_3' ) ) : ?>
		<?php while ( have_rows( 'item_3' ) ) :
			the_row(); ?>

			<!-- Section item 3 -->
			<section class="item-3 d-flex flex-column flex-md-row">

				<div class="left">

					<div class="number">03</div>

					<?php if ( $title = get_sub_field( 'title' ) ) : ?>
						<h2 class="h5"><?php echo esc_html( $title ); ?></h2>
					<?php endif; ?>

					<?php if ( $description = get_sub_field( 'description' ) ) : ?>
						<div class="description"><?php echo wp_kses_post( $description ); ?></div>
					<?php endif; ?>

					<?php if ( $slogan = get_sub_field( 'slogan' ) ) : ?>
						<div class="slogan"><?php echo esc_html( $slogan ); ?></div>
					<?php endif; ?>

					<?php if ( $image = get_sub_field( 'image' ) ) : ?>
						<?php echo wp_get_attachment_image( $image['id'], 'full', false, array( 'class' => 'd-block w-100', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
					<?php endif; ?>

				</div>
				<div class="right d-flex justify-content-center">

					<?php if ( have_rows( 'elements' ) ) : ?>
						<ul class="list-group list-group-horizontal-md align-self-center text-center">
							<?php while ( have_rows( 'elements' ) ) :
								the_row(); ?>

								<li class="list-group-item">
									<?php if ( $title = get_sub_field( 'title' ) ) : ?>
										<h3 class="h6"><?php echo esc_html( $title ); ?></h3>
									<?php endif; ?>
								</li>

							<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</div>	

			</section>

		<?php endwhile; ?>
	<?php endif; ?>


	<?php if ( have_rows( 'item_4' ) ) : ?>
		<?php while ( have_rows( 'item_4' ) ) :
			the_row(); ?>

			<!-- Section item 4 -->
			<section class="item-4">

				<div class="number">04</div>

				<?php if ( $title = get_sub_field( 'title' ) ) : ?>
					<h2 class="h4"><?php echo esc_html( $title ); ?></h2>
				<?php endif; ?>

				<?php if ( have_rows( 'elements' ) ) : ?>
					<ul class="list-group list-group-horizontal-md text-center">
						<?php while ( have_rows( 'elements' ) ) :
							the_row(); ?>

							<li class="list-group-item">
								<?php if ( $title = get_sub_field( 'title' ) ) : ?>
									<h3 class="h5"><?php echo esc_html( $title ); ?></h3>
								<?php endif; ?>

								<?php if ( $description = get_sub_field( 'description' ) ) : ?>
									<div class="description"><?php echo wp_kses_post( $description ); ?></div>
								<?php endif; ?>
							</li>

						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

			</section>

		<?php endwhile; ?>
	<?php endif; ?>

	<div class="call-to-action text-center">
		<a class="btn btn-dark reveal1 mb-3" href="" title="">Expertise suivante<br> <strong>Titre...</strong></a>			
	</div>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
