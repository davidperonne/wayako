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

	<!-- Section agence -->
	<?php if ( have_rows( 'agence' ) ) : ?>
		<section class="agence">
			<?php while ( have_rows( 'agence' ) ) :
				the_row(); ?>

				<div class="gray-1"></div>

				<?php if ( $title = get_sub_field( 'title' ) ) : ?>
					<h2 class="display-1 outline"><?php echo esc_html( $title ); ?></h2>
				<?php endif; ?>

				<div class="d-flex flex-column flex-lg-row">
					<div class="left">

						<div class="agence__sub-title">
							<?php if ( $number_subtitle = get_sub_field( 'number_subtitle' ) ) : ?>
								<?php echo wp_get_attachment_image( $number_subtitle['id'], 'full', false, array( 'class' => 'number-subtitle d-inline-flex', 'alt' => esc_attr( $number_subtitle['alt'] ) ) ); ?>
							<?php endif; ?>

							<?php if ( $sub_title = get_sub_field( 'sub_title' ) ) : ?>
								<p class="h1 sub-title d-inline-flex"><?php echo wp_kses_post( $sub_title ); ?></p>
							<?php endif; ?>
						</div>

						<?php if ( $description = get_sub_field( 'description' ) ) : ?>
							<p class="description"><?php echo $description; ?></p>
						<?php endif; ?>

					</div>
					<div class="right align-self-end">

						<?php if ( $image = get_sub_field( 'image' ) ) : ?>								
							<?php echo wp_get_attachment_image( $image['id'], 'full', false, array( 'class' => 'd-block w-100', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
						<?php endif; ?>

					</div>
				</div>

				<?php if ( $slogan = get_sub_field( 'slogan' ) ) : ?>
					<div class="slogan bg-green text-white mb-3 mb-md-0"><?php echo $slogan; ?></div>
				<?php endif; ?>

				<?php if ( ( $text_button = get_sub_field( 'text_button' ) ) && ( $link_button = get_sub_field( 'link_button' ) ) ) : ?>
					<div class="call-to-action text-center">
						<a class="btn btn-dark reveal1" href="<?php echo esc_url( $link_button ); ?>"><?php echo wp_kses_post( $text_button ); ?></a>
					</div>
				<?php endif; ?>

			<?php endwhile; ?>
		</section>
	<?php endif; ?>

	<!-- Section expertises -->
	<?php if ( have_rows( 'expertises' ) ) : ?>
		<section class="expertises">
			<?php while ( have_rows( 'expertises' ) ) :
				the_row(); ?>

				<div class="gray-1"></div>
				<div class="gray-2"></div>

				<?php if ( $title = get_sub_field( 'title' ) ) : ?>
					<h2 class="display-1 outline"><?php echo esc_html( $title ); ?></h2>
				<?php endif; ?>

				<div class="d-flex flex-column flex-lg-row">
					<div class="left pe-5">

						<?php if ( $sub_title = get_sub_field( 'sub_title' ) ) : ?>
							<p class="h1 sub-title d-inline-flex"><?php echo wp_kses_post( $sub_title ); ?></p>
						<?php endif; ?>

						<?php if ( $description = get_sub_field( 'description' ) ) : ?>
							<p class="description"><?php echo $description; ?></p>
						<?php endif; ?>
					</div>
					<div class="right">

						<?php if ( $image = get_sub_field( 'image' ) ) : ?>
							<figure>
								<?php echo wp_get_attachment_image( $image['id'], 'square_large', false, array( 'class' => 'd-block w-100', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
							</figure>
						<?php endif; ?>

					</div>
				</div>

				<?php if ( ( $text_button = get_sub_field( 'text_button' ) ) && ( $link_button = get_sub_field( 'link_button' ) ) ) : ?>
					<div class="call-to-action text-center">
						<a class="btn btn-dark reveal1" href="<?php echo esc_url( $link_button ); ?>"><?php echo wp_kses_post( $text_button ); ?></a>
					</div>
				<?php endif; ?>

			<?php endwhile; ?>
		</section>
	<?php endif; ?>

	<!-- Section references -->
	<?php if ( have_rows( 'references' ) ) : ?>
		<section class="references">
			<?php while ( have_rows( 'references' ) ) :
				the_row(); ?>

				<div class="references__inner-container"> 

					<?php if ( $title = get_sub_field( 'title' ) ) : ?>
						<h2 class="display-1 outline"><?php echo esc_html( $title ); ?></h2>
					<?php endif; ?>

					<div class="gray-4"></div>

					<div class="clearfix"></div>

					<?php
					$posts = get_sub_field( 'reference_items' );
					if ( $posts ) : ?>
						<div class="row gx-0">
							<?php
							foreach( $posts as $post ) {

								setup_postdata( $post );
								get_template_part( 'loop-templates/content', 'reference' );
							}
							wp_reset_postdata();
							?>							
						</div>
					<?php endif; ?>

				</div>

				<?php if ( ( $text_button = get_sub_field( 'text_button' ) ) && ( $link_button = get_sub_field( 'link_button' ) ) ) : ?>
					<div class="call-to-action text-center">
						<a class="btn btn-dark reveal1" href="<?php echo esc_url( $link_button ); ?>"><?php echo wp_kses_post( $text_button ); ?></a>
					</div>
				<?php endif; ?>

			<?php endwhile; ?>
		</section>
	<?php endif; ?>

	<!-- Section slogan -->
	<?php if ( have_rows( 'slogan' ) ) : ?>
		<section class="slogan">
			<?php while ( have_rows( 'slogan' ) ) :
				the_row(); ?>

				<div class="inner-container"> 

					<?php if ( $description = get_sub_field( 'description' ) ) : ?>
						<p class="description text-center"><?php echo wp_kses_post( $description ); ?></p>
					<?php endif; ?>

				</div>

			<?php endwhile; ?>
		</section>
	<?php endif; ?>

	<!-- Section blog-contact -->
	<?php if ( have_rows( 'blog_contact' ) ) : ?>
		<section class="blog-contact">
			<?php while ( have_rows( 'blog_contact' ) ) :
				the_row(); ?>

				<div class="bg">
						<?php if ( $background_image = get_sub_field( 'background_image' ) ) : ?>							
						<?php echo wp_get_attachment_image( $background_image['id'], 'full', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $background_image['alt'] ) ) ); ?>
					<?php endif; ?>
				</div>
		
				<div class="d-flex flex-column flex-lg-row">
					<div class="left">

						<?php if ( $blog_title = get_sub_field( 'blog_title' ) ) : ?>
							<h2 class="display-1 outline"><?php echo esc_html( $blog_title ); ?></h2>
						<?php endif; ?>

						<div class="d-flex flex-row align-items-end">
							<?php if ( $blog_image = get_sub_field( 'blog_image' ) ) : ?>
								<figure>
									<?php echo wp_get_attachment_image( $blog_image['id'], 'large', false, array( 'class' => '', 'alt' => esc_attr( $blog_image['alt'] ) ) ); ?>
								</figure>
							<?php endif; ?>
							<div class="icon"></div>
						</div>

						<?php if ( ( $blog_text_button = get_sub_field( 'blog_text_button' ) ) && ( $blog_link_button = get_sub_field( 'blog_link_button' ) ) ) : ?>
							<div class="call-to-action text-end">
								<a class="btn btn-dark reveal1" href="<?php echo esc_url( $blog_link_button ); ?>"><?php echo wp_kses_post( $blog_text_button ); ?></a>
							</div>
						<?php endif; ?>

					</div>
					<div class="right">

						<?php if ( $contact_title = get_sub_field( 'contact_title' ) ) : ?>
							<h2 class="display-1 outline"><?php echo esc_html( $contact_title ); ?></h2>
						<?php endif; ?>

						<?php if ( ( $contact_text_button = get_sub_field( 'contact_text_button' ) ) && ( $contact_link_button = get_sub_field( 'contact_link_button' ) ) ) : ?>
							<div class="call-to-action">
								<a class="btn btn-dark reveal1" href="<?php echo esc_url( $contact_link_button ); ?>"><?php echo wp_kses_post( $contact_text_button ); ?></a>
							</div>
						<?php endif; ?>

						<div class="d-flex flex-row align-items-start">
							<div class="icon"></div>
							<?php if ( $contact_image = get_sub_field( 'contact_image' ) ) : ?>
								<figure>
									<?php echo wp_get_attachment_image( $contact_image['id'], 'large', false, array( 'class' => '', 'alt' => esc_attr( $contact_image['alt'] ) ) ); ?>
								</figure>
							<?php endif; ?>
						</div>

					</div>
				</div>

			<?php endwhile; ?>
		</section>
	<?php endif; ?>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
