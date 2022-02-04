<?php
/**
 * Template Name: Home Page
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

	<!-- Section intro-banner -->
	<?php if ( have_rows( 'intro_banner' ) ) : ?>

		<section class="intro-banner">
			<div class="container">
			<div class="d-flex flex-column flex-md-row justify-content-center">

				<?php while ( have_rows( 'intro_banner' ) ) :
					the_row(); ?>

					<div class="left">

						<?php if ( $title = get_sub_field( 'title' ) ) : ?>
							<h2 class="intro-banner__title h2 text-center fade-up"><?php echo esc_html( $title ); ?></h2>
						<?php endif; ?>

						<?php if ( $description = get_sub_field( 'description' ) ) : ?>
							<div class="intro-banner__description text-center fade-up"><?php echo wp_kses_post( $description ); ?></div>
						<?php endif; ?>

						<a class="btn btn-light fade-up" href="<?php echo get_permalink( get_page_by_path( 'prestations' ) ); ?>"><?php echo esc_html__( 'Find out more', 'wayako' ); ?></a>

					</div>
					<div class="right">

						<?php if ( $image = get_sub_field( 'image' ) ) : ?>
							<figure>
								<?php echo wp_get_attachment_image( $image['id'], 'square_large', false, array( 'class' => 'img-contain reveal1', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
								<?php if ( $slogan = get_sub_field( 'slogan' ) ) : ?>
									<div class="intro-banner__slogan"><?php echo esc_html( $slogan ); ?></div>
								<?php endif; ?>
							</figure>
						<?php endif; ?>

					</div>

				<?php endwhile; ?>

				</div>
			</div>
		</section>

	<?php endif; ?>

	<!-- Section your-history-banner -->
	<?php if ( have_rows( 'your_history_banner' ) ) : ?>

		<section class="your-history-banner container">

			<?php while ( have_rows( 'your_history_banner' ) ) :
				the_row(); ?>

				<?php if ( $title = get_sub_field( 'title' ) ) : ?>
					<h2 class="your-history-banner__title display-2"><?php echo esc_html( $title ); ?></h2>
				<?php endif; ?>

				<div class="your-history-banner__first-row d-flex flex-column flex-md-row justify-content-center">
					<div class="text-column order-md-last">

						<?php if ( $title_1 = get_sub_field( 'title_1' ) ) : ?>
							<h3 class="fade-up"><?php echo esc_html( $title_1 ); ?></h3>
						<?php endif; ?>

						<?php if ( $description_1 = get_sub_field( 'description_1' ) ) : ?>
							<div class="description fade-up"><?php echo wp_kses_post( $description_1 ); ?></div>
						<?php endif; ?>

						<a class="btn btn-light mb-4 fade-up" href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>"><?php echo esc_html__( 'Let\'s meet up', 'wayako' ); ?></a>

					</div>
					<div class="image-column order-md-first align-self-center">

						<?php if ( $image_1 = get_sub_field( 'image_1' ) ) : ?>
							<figure>
								<?php echo wp_get_attachment_image( $image_1['id'], 'square_large', false, array( 'class' => 'img-cover reveal1', 'alt' => esc_attr( $image_1['alt'] ) ) ); ?>
							</figure>
						<?php endif; ?>

					</div>
				</div>

				<div class="your-history-banner__second-row d-flex flex-column flex-md-row justify-content-center">
					<div class="text-column">

						<?php if ( $title_2 = get_sub_field( 'title_2' ) ) : ?>
							<h3 class="fade-up"><?php echo esc_html( $title_2 ); ?></h3>
						<?php endif; ?>

						<?php if ( $description_2 = get_sub_field( 'description_2' ) ) : ?>
							<div class="description fade-up"><?php echo wp_kses_post( $description_2 ); ?></div>
						<?php endif; ?>

						<?php if ( $signature = get_sub_field( 'signature' ) ) : ?>
							<div class="your-history-banner__signature fade-up"><?php echo esc_html( $signature ); ?></div>
						<?php endif; ?>

						<?php if ( $function = get_sub_field( 'function' ) ) : ?>
							<div class="your-history-banner__function fade-up"><?php echo wp_kses_post( $function ); ?></div>
						<?php endif; ?>

						<a class="btn btn-light mb-4 fade-up" href="<?php echo get_permalink( get_page_by_path( 'qui-suis-je' ) ); ?>"><?php echo esc_html__( 'Let\'s get acquainted', 'wayako' ); ?></a>

					</div>
					<div class="image-column align-self-center">

						<?php if ( $image_2 = get_sub_field( 'image_2' ) ) : ?>
							<figure>
								<?php echo wp_get_attachment_image( $image_2['id'], 'square_large', false, array( 'class' => 'img-contain reveal1', 'alt' => esc_attr( $image_2['alt'] ) ) ); ?>
							</figure>
						<?php endif; ?>

					</div>
				</div>

			<?php endwhile; ?>

		</section>

	<?php endif; ?>

	<?php get_template_part( 'global-templates/prestations' ); ?>

	<!-- Section wrote-story-banner -->
	<?php if ( have_rows( 'wrote_story_banner' ) ) : ?>

		<section class="wrote-story-banner">
			<div class="wrote-story-banner__content container">
				<div class="d-flex flex-column flex-md-row justify-content-center">

					<?php while ( have_rows( 'wrote_story_banner' ) ) :
						the_row(); ?>

						<div class="text-column order-md-last">

							<?php if ( $title = get_sub_field( 'title' ) ) : ?>
								<h2 class="wrote-story-banner__title fade-up"><?php echo esc_html( $title ); ?></h2>
							<?php endif; ?>

							<?php if ( $description = get_sub_field( 'description' ) ) : ?>
								<div class="wrote-story-banner__description fade-up"><?php echo wp_kses_post( $description ); ?></div>
							<?php endif; ?>

							<a class="btn btn-light mb-4 fade-up" href="<?php echo get_permalink( get_page_by_path( 'book' ) ); ?>"><?php echo esc_html__( 'To discover', 'wayako' ); ?></a>

						</div>
						<div class="image-column align-self-center align-self-lg-start order-md-first">

							<?php if ( $image = get_sub_field( 'image' ) ) : ?>
								<figure>
									<?php echo wp_get_attachment_image( $image['id'], 'square_large', false, array( 'class' => 'img-contain reveal1', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
								</figure>
							<?php endif; ?>

						</div>

					<?php endwhile; ?>

				</div>
			</div>
		</section>

	<?php endif; ?>

	<!-- Section testimonials -->
	<?php if ( have_rows( 'testimonials' ) ) : ?>
		<section class="testimonials parallax-hero-bg">
			<div class="testimonials__container container">

				<div class="flexslider testimonials__flexslider">
					<ul class="slides d-flex">

						<?php while ( have_rows( 'testimonials' ) ) :
							the_row(); ?>

							<li>
								<?php if ( $title = get_sub_field( 'title' ) ) : ?>
									<div class="testimonials__title"><?php echo esc_html( $title ); ?></div>
								<?php endif; ?>

								<?php if ( $testimonial = get_sub_field( 'testimonial' ) ) : ?>
									<div class="testimonials__text"><?php echo esc_html( $testimonial ); ?></div>
								<?php endif; ?>

								<?php if ( $author = get_sub_field( 'author' ) ) : ?>
									<div class="testimonials__author"><?php echo esc_html( $author ); ?></div>
								<?php endif; ?>
							</li>

						<?php endwhile; ?>

					</ul>
				</div>

			</div>
		</section>
	<?php endif; ?>

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
