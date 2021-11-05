<?php
/**
 * Template Name: Agence
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
	
	<?php if ( have_rows( 'agence' ) ) : ?>
		<?php while ( have_rows( 'agence' ) ) :
			the_row(); ?>

			<!-- Section agence -->
			<section class="agence d-flex flex-column flex-md-row">

				<div class="left">
					<h2 class="sub-title">
						<?php
						$number_subtitle = get_sub_field( 'number_subtitle' );
						if ( $number_subtitle ) : ?>									
							<img src="<?php echo esc_url( $number_subtitle['url'] ); ?>" class="" loading="lazy" alt="<?php echo esc_attr( $number_subtitle['alt'] ); ?>" />										
						<?php endif;  ?>

						<?php /*if ( $number_subtitle = get_sub_field( 'number_subtitle' ) ) : ?>
							<?php echo wp_get_attachment_image( $number_subtitle['id'], 'full', false, array( 'class' => 'number-subtitle d-inline-flex', 'alt' => esc_attr( $number_subtitle['alt'] ) ) ); ?>
						<?php endif;*/ ?>

						<?php if ( $sub_title = get_sub_field( 'sub_title' ) ) : ?>
							<p class="h1 d-inline-flex text-white"><?php echo wp_kses_post( $sub_title ); ?></p>
						<?php endif; ?>
					</h2>
				</div>
				<div class="right align-self-center">
					<?php if ( $description = get_sub_field( 'description' ) ) : ?>
						<div class="description"><?php echo wp_kses_post( $description ); ?></div>
					<?php endif; ?>
				</div>	

			</section>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'defis' ) ) : ?>
		<?php while ( have_rows( 'defis' ) ) :
			the_row(); ?>

			<!-- Section defis -->
			<section class="defis">

				<div class="d-flex flex-column flex-md-row">
					<div class="left">

						<?php if ( $title = get_sub_field( 'title' ) ) : ?>
							<h2 class="fade-up"><?php echo esc_html( $title ); ?></h2>
						<?php endif; ?>

						<?php if ( $description = get_sub_field( 'description' ) ) : ?>
							<div class="description"><?php echo wp_kses_post( $description ); ?></div>
						<?php endif; ?>

					</div>
					<div class="right">

						<?php if ( $image = get_sub_field( 'image' ) ) : ?>
							<figure class="mb-0">
								<?php echo wp_get_attachment_image( $image['id'], 'full', false, array( 'class' => 'd-block w-100', 'alt' => esc_attr( $image['alt'] ) ) ); ?>
							</figure>
						<?php endif; ?>

					</div>
				</div>

				<?php if ( $slogan = get_sub_field( 'slogan' ) ) : ?>
					<div class="slogan text-center bg-green text-white"><?php echo wp_kses_post( $slogan ); ?></div>
				<?php endif; ?>

			</section>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'valeurs' ) ) : ?>
		<?php while ( have_rows( 'valeurs' ) ) :
			the_row(); ?>

			<!-- Section valeurs -->
			<section class="valeurs">

				<h2 class="display-1 outline">
					<?php if ( $title = get_sub_field( 'title' ) ) : ?>
						<span><?php echo esc_html( $title ); ?></span>
					<?php endif; ?>

					<?php if ( $title_2 = get_sub_field( 'title_2' ) ) : ?>
						<span class="text-end"><?php echo esc_html( $title_2 ); ?></span>
					<?php endif; ?>
				</h2>

				<div class="d-flex flex-column flex-lg-row align-items-end">

					<div class="left text-white">

						<?php if ( $sub_title = get_sub_field( 'sub_title' ) ) : ?>
							<p class="h1 sub-title fade-up"><?php echo esc_html( $sub_title ); ?></p>
						<?php endif; ?>

						<?php if ( $description = get_sub_field( 'description' ) ) : ?>
							<div class="description"><?php echo wp_kses_post( $description ); ?></div>
						<?php endif; ?>
					</div>

					<div class="right">

						<div class="pictos d-flex flex-column flex-md-row justify-content-around align-items-center align-items-md-end">
							<div class="d-flex flex-column align-items-center">
								<?php
								$image_1 = get_sub_field( 'image_1' );
								if ( $image_1 ) : ?>
									<img src="<?php echo esc_url( $image_1['url'] ); ?>" class="image-1 mb-3" loading="lazy" alt="<?php echo esc_attr( $image_1['alt'] ); ?>" />
								<?php endif; ?>

								<?php if ( $image_legende_1 = get_sub_field( 'image_legende_1' ) ) : ?>
									<?php echo esc_html( $image_legende_1 ); ?>
								<?php endif; ?>
							</div>

							<div class="d-flex flex-column align-items-center">
								<?php
								$image_2 = get_sub_field( 'image_2' );
								if ( $image_2 ) : ?>
									<img src="<?php echo esc_url( $image_2['url'] ); ?>" class="image-2 mb-3" loading="lazy" alt="<?php echo esc_attr( $image_2['alt'] ); ?>" />
								<?php endif; ?>

								<?php if ( $image_legende_2 = get_sub_field( 'image_legende_2' ) ) : ?>
									<?php echo esc_html( $image_legende_2 ); ?>
								<?php endif; ?>
							</div>

							<div class="d-flex flex-column align-items-center">
								<?php
								$image_3 = get_sub_field( 'image_3' );
								if ( $image_3 ) : ?>
									<img src="<?php echo esc_url( $image_3['url'] ); ?>" class="image-3 mb-3" loading="lazy" alt="<?php echo esc_attr( $image_3['alt'] ); ?>" />
								<?php endif; ?>

								<?php if ( $image_legende_3 = get_sub_field( 'image_legende_3' ) ) : ?>
									<?php echo esc_html( $image_legende_3 ); ?>
								<?php endif; ?>
							</div>
						</div>

					</div>

				</div>

			</section>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'termes' ) ) : ?>
		<?php while ( have_rows( 'termes' ) ) :
			the_row(); ?>

			<!-- Section termes -->
			<section class="termes">

				<h2 class="display-1">
					<?php if ( $title = get_sub_field( 'title' ) ) : ?>
						<span class="element-1"><?php echo esc_html( $title ); ?></span>
					<?php endif; ?>

					<?php if ( $title_2 = get_sub_field( 'title_2' ) ) : ?>
						<span class="element-2"><?php echo esc_html( $title_2 ); ?></span>
					<?php endif; ?>

					<?php if ( $title_3 = get_sub_field( 'title_3' ) ) : ?>
						<span class="element-3"><?php echo esc_html( $title_3 ); ?></span>
					<?php endif; ?>
				</h2>

			</section>

		<?php endwhile; ?>
	<?php endif; ?>


	<?php if ( have_rows( 'equipe' ) ) : ?>
		<?php while ( have_rows( 'equipe' ) ) :
			the_row(); ?>

			<!-- Section equipe -->
			<section class="equipe">

				<?php if ( $title = get_sub_field( 'title' ) ) : ?>
					<h2 class="display-1 outline"><?php echo esc_html( $title ); ?></h2>
				<?php endif; ?>

				<div class="row items">

					<div class="col-12 col-md-4 d-flex align-items-center">
						<?php if ( $description = get_sub_field( 'description' ) ) : ?>
							<div class="description"><?php echo wp_kses_post( $description ); ?></div>
						<?php endif; ?>
					</div>

					<?php
					$posts = get_sub_field( 'team' );
					if ( $posts ) : ?>
						<?php foreach( $posts as $post) : ?>
							<?php setup_postdata( $post ); ?>

							<div class="col-12 col-md-4">
								<div class="item view-team-member" data-id="<?php echo get_the_ID(); ?>">

									<figure class="mb-4">
										<?php
										if ( $image_de_couverture = get_field( 'image_de_couverture', get_the_ID() ) ) {								
											echo wp_get_attachment_image( $image_de_couverture['id'], 'full', false, array( 'class' => 'image-de-couverture d-block img-cover', 'alt' => esc_attr( $image_de_couverture['alt'] ) ) );
										}

										if ( $photo = get_field( 'photo', get_the_ID() ) ) {
											echo wp_get_attachment_image( $photo['id'], 'full', false, array( 'class' => 'photo img-cover', 'alt' => esc_attr( $photo['alt'] ) ) );
										}
										?>
									</figure>

									<?php if ( $name = get_field( 'name', get_the_ID() ) ) : ?>
										<div class="name"><?php echo esc_html( $name ); ?></div>
										<?php endif; ?>

									<?php if ( $function = get_field( 'function', get_the_ID() ) ) : ?>
										<div class="function"><?php echo esc_html( $function ); ?></div>
									<?php endif; ?>

								</div>
							</div>

						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>

				</div>
			</section>

		<?php endwhile; ?>
	<?php endif; ?>


	<?php if ( have_rows( 'equipe_complementaire' ) ) : ?>
		<?php while ( have_rows( 'equipe_complementaire' ) ) :
			the_row(); ?>

			<!-- Section equipe complementaire  -->
			<section class="equipe-complementaire">

				<div class=" d-flex flex-column flex-lg-row">

					<div class="left">

						<?php if ( $title = get_sub_field( 'title' ) ) : ?>
							<h2 class=""><?php echo esc_html( $title ); ?></h2>
						<?php endif; ?>

						<?php if ( $description = get_sub_field( 'description' ) ) : ?>
							<div class="description"><?php echo wp_kses_post( $description ); ?></div>
						<?php endif; ?>

						<?php if ( have_rows( 'items' ) ) : ?>
							<ul>
								<?php while ( have_rows( 'items' ) ) :
									the_row(); ?>
									<li>
										<?php if ( $name = get_sub_field( 'name' ) ) : ?>
											<p class="name mb-0"><?php echo esc_html( $name ); ?></p>
										<?php endif; ?>

										<?php if ( $function = get_sub_field( 'function' ) ) : ?>
											<p class="function mb-0"><?php echo esc_html( $function ); ?></p>
										<?php endif; ?>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>

					</div>
					<div class="right">

						<?php if ( have_rows( 'items' ) ) : ?>
							<div class="photos">
								<?php while ( have_rows( 'items' ) ) :
									the_row(); ?>

									<?php if ( $photo = get_sub_field( 'photo' ) ) : ?>
											<figure>
												<?php echo wp_get_attachment_image( $photo['id'], 'square_medium', false, array( 'class' => 'd-block img-cover', 'alt' => esc_attr( $photo['alt'] ) ) ); ?>
											</figure>
										<?php endif; ?>

								<?php endwhile; ?>
							</div>
						<?php endif; ?>

					</div>
				</div>

			</section>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'references' ) ) : ?>	
		<?php while ( have_rows( 'references' ) ) :
			the_row(); ?>

			<!-- Section references -->
			<section class="references">

				<div class="inner-container"> 

					<?php if ( $title = get_sub_field( 'title' ) ) : ?>
						<h2 class="display-1 outline"><?php echo esc_html( $title ); ?></h2>
					<?php endif; ?>

					<div class="gray-4"></div>
					<div class="clearfix"></div>

					<?php
					$posts = get_sub_field( 'items' );
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

			</section>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'contact' ) ) : ?>
		<?php while ( have_rows( 'contact' ) ) :
			the_row(); ?>

			<!-- Section contact -->
			<section class="contact d-flex justify-content-start align-items-center">

				<div class=" d-flex flex-column flex-xxl-row justify-content-between align-items-center mx-auto">

					<div class="left">
						<h2 class="title">
							<?php if ( $title = get_sub_field( 'title' ) ) : ?>
								<span><?php echo esc_html( $title ); ?></span>
							<?php endif; ?>

							<?php if ( $title_2 = get_sub_field( 'title_2' ) ) : ?>
								<span><?php echo esc_html( $title_2 ); ?></span>
							<?php endif; ?>

							<?php if ( $title_3 = get_sub_field( 'title_3' ) ) : ?>
								<span><?php echo esc_html( $title_3 ); ?></span>
							<?php endif; ?>
						</h2>
					</div>

					<div class="right">
						<?php if ( ( $text_button = get_sub_field( 'text_button' ) ) && ( $link_button = get_sub_field( 'link_button' ) ) ) : ?>
							<div class="call-to-action text-center">
								<a class="btn btn-dark" href="<?php echo esc_url( $link_button ); ?>"><?php echo wp_kses_post( $text_button ); ?></a>
							</div>
						<?php endif; ?>
					</div>

				</div>

			</section>

		<?php endwhile; ?>
	<?php endif; ?>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
