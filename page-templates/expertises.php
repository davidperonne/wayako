<?php
/**
 * Template Name: Expertises
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

	<?php
	$args = array(
		'post_type'      => 'page',
		'posts_per_page' => -1,
		'post_parent'    => $post->ID,
	//	'order'          => 'ASC',
	//	'orderby'        => 'menu_order',
		'meta_key'       => 'header_number',
		'orderby'        => 'meta_value',
		'order'          => 'ASC'
	);

	$parent = new WP_Query( $args );

	$expertise_number = 1;

	if ( $parent->have_posts() ) :

		while ( $parent->have_posts() ) : $parent->the_post(); ?>

			<!-- Section expertise -->
			<section id="expertise-<?php echo $post->ID; ?>" class="expertise d-flex flex-column flex-md-row">

				<div class="left">

					<?php if ( $header_number = get_field( 'header_number', $post->ID ) ) : ?>
						<div class="number fade-up"><?php echo esc_html( $header_number ); ?></div>
					<?php endif; ?>

					<h2 class="title fade-up mb-5"><?php the_title(); ?></h2>

					<div class="excerpt">
						<?php echo $post->post_excerpt; ?>
					</div>

					<div class="call-to-action">
						<a class="btn btn-dark reveal1 mb-3" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">En savoir <strong>plus</strong></a>			
					</div>

				</div>

				<div class="right">
					<?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'w-100 align-self-end' ) ); ?>
				</div>				

				<?php
				$header_logo = get_field( 'header_logo' );
				if ( $header_logo ) : ?>
					<figure class="picto">
						<img class="" src="<?php echo esc_url( $header_logo['url'] ); ?>" alt="<?php echo esc_attr( $header_logo['alt'] ); ?>" />
					</figure>
				<?php endif; ?>	

			</section>

		<?php endwhile; 

		$expertise_number++;
	
	endif;

	wp_reset_postdata();
	?>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
