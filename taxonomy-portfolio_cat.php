<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

	<main id="primary" class="site-main">

		<div class="alignwide">

			<header class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-header">
				<figure class="wp-block-media-text__media">
					<img loading="lazy" width="1024" height="683" src="https://www.wayako.local/wp-content/uploads/2022/02/beautiful-curly-young-woman-photographer-using-lap-P9WZ8WF-1024x683-1.jpg" alt="" class="wp-image-149 size-full" srcset="https://www.wayako.local/wp-content/uploads/2022/02/beautiful-curly-young-woman-photographer-using-lap-P9WZ8WF-1024x683-1.jpg 1024w, https://www.wayako.local/wp-content/uploads/2022/02/beautiful-curly-young-woman-photographer-using-lap-P9WZ8WF-1024x683-1-300x200.jpg 300w, https://www.wayako.local/wp-content/uploads/2022/02/beautiful-curly-young-woman-photographer-using-lap-P9WZ8WF-1024x683-1-768x512.jpg 768w" sizes="(max-width: 1024px) 100vw, 1024px">
				</figure>
				<div class="wp-block-media-text__content">
					<p class="sub-title">Portfolio</p>
					<h1><?php echo single_tag_title( '', false ); ?></h1>					
					<?php if ( function_exists( 'seopress_display_breadcrumbs' ) ) { seopress_display_breadcrumbs(); } ?>
				</div>
			</header>

			<?php
			$args = array(
				'post_type' => 'portfolio',

			);
			$portfolio = new WP_Query( $args );
			?>

			<?php if ( $portfolio->have_posts() ) : ?>

				<div class="grid">

					<?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

						<?php
						$items = '';

						foreach ( get_the_terms( get_the_ID(), 'portfolio_cat' ) as $portfolio_cat_term ) {
							$items .= ' ' . esc_html( $portfolio_cat_term->slug ) . ' ';
						}
						?>

						<div class="grid-item <?php echo esc_html( $items ); ?>">
							<a class="card" href="<?php echo esc_url( get_permalink() ); ?>">
								<figure>
									<?php echo get_the_post_thumbnail( get_the_ID(), 'medium_large', array( 'class' => 'img-cover' ) ); ?>
									<figcaption>										
										<?php the_title( '<h3 class="grid-item__title">', '</h3>' ); ?>
										<?php the_excerpt(); ?>
									</figcaption>
								</figure>
							</a>
						</div>

					<?php endwhile; ?>		

				</div>

				<script type="text/javascript">
					document.addEventListener("DOMContentLoaded", function(event) {

						// init Isotope
						var iso = new Isotope( '.grid', {
							itemSelector: '.grid-item',
							layoutMode: 'fitRows'
						});

						// filter functions
						var filterFns = {
							// show if number is greater than 50
							numberGreaterThan50: function( itemElem ) {
								var number = itemElem.querySelector('.number').textContent;
								return parseInt( number, 10 ) > 50;
							},
							// show if name ends with -ium
							ium: function( itemElem ) {
								var name = itemElem.querySelector('.name').textContent;
								return name.match( /ium$/ );
							}
						};

						// bind filter button click
						var filtersElem = document.querySelector('.filter-button-group');
						filtersElem.addEventListener( 'click', function( event ) {
							// only work with buttons
							if ( !matchesSelector( event.target, 'button' ) ) {
								return;
							}
							var filterValue = event.target.getAttribute('data-filter');
							// use matching filter function
							filterValue = filterFns[ filterValue ] || filterValue;
							iso.arrange({ filter: filterValue });
						});

						// change is-checked class on buttons
						var buttonGroups = document.querySelectorAll('.button-group');
						for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
							var buttonGroup = buttonGroups[i];
							radioButtonGroup( buttonGroup );
						}

						function radioButtonGroup( buttonGroup ) {
							buttonGroup.addEventListener( 'click', function( event ) {
								// only work with buttons
								if ( !matchesSelector( event.target, 'button' ) ) {
								return;
								}
								buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
								event.target.classList.add('is-checked');
							});
						}
					});
				</script>

			<?php else : ?>

				<?php get_template_part( 'loop-templates/content', 'none' ); ?>				

			<?php endif; ?>

		</div>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
