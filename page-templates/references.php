<?php
/**
 * Template Name: References
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

	<div class="filtres">

		<?php if ( have_rows( 'bandeau_filtres' ) ) : ?>
			<?php while ( have_rows( 'bandeau_filtres' ) ) :
				the_row(); ?>

				<?php if ( $description = get_sub_field( 'description' ) ) : ?>
					<p class="description text-light"><?php echo esc_html( $description ); ?></p>
				<?php endif; ?>

			<?php endwhile; ?>
		<?php endif; ?>

		<ul class="nav text-center" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link btn btn-link active" id="top-tab" data-bs-toggle="tab" data-bs-target="#top" role="tab" aria-controls="top" aria-selected="true"><?php echo esc_html__( 'Top', 'wayako' ); ?></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link btn btn-link" id="secteur-tab" data-bs-toggle="tab" data-bs-target="#secteur" role="tab" aria-controls="secteur" aria-selected="false"><?php echo esc_html__( 'Secteur', 'wayako' ); ?></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link btn btn-link" id="realisation-tab" data-bs-toggle="tab" data-bs-target="#realisation" role="tab" aria-controls="realisation" aria-selected="false"><?php echo esc_html__( 'Réalisation', 'wayako' ); ?></button>
			</li>
		</ul>

	</div>

	<div class="tab-content" id="myTabContent">

		<!-- Top -->
		<div id="top" class="top-tab tab-pane fade active show" role="tabpanel" aria-labelledby="top-tab">

			<?php
			wpgb_render_template(
				array(
					'id'                 => 'references-top-grid',
					'class'              => 'references-top-grid row gx-0',
					'source_type'        => 'post_type',
					'is_main_query'      => false,
					'query_args'         => array(
						'post_type'      => 'reference',
						'posts_per_page' => 12,
					//	'orderby' => 'title',
					//	'order' => 'ASC',
						'meta_key'       => 'featured_reference_checkbox',
						'orderby'        => 'meta_value_num',
						'order'          => 'ASC',
						'meta_query'     => array(
							array(
								'key'     => 'featured_reference_checkbox',
								'value'   => 'yes',
								'compare' => '=',
							),
						),
					),
					'render_callback'    => 'wayako_reference_render_callback',
					'noresults_callback' => 'wayako_reference_noresults_callback',
				),
			);

			wpgb_render_facet(
				array(
					'id'   => 1, // Load more facet.
					'class' => 'load-more-facet',
					'grid' => 'references-top-grid',
				),
			);
			?>

		</div>

		<!-- Secteur -->
		<div id="secteur" class="secteur-tab tab-pane fade" role="tabpanel" aria-labelledby="secteur-tab">

			<?php
			wpgb_render_facet(
				array(
					'id'    => 2, // secteur filter facet.
					'class' => 'secteur-filter-facet',
					'grid'  => 'references-secteur-grid',
				),
			);

			wpgb_render_template(
				array(
					'id'                 => 'references-secteur-grid',
					'class'              => 'references-secteur-grid row gx-0',
					'source_type'        => 'post_type',
					'is_main_query'      => false,
					'query_args'         => array(
						'post_type'      => 'reference',
						'posts_per_page' => 12,
					),
					'render_callback'    => 'wayako_reference_render_callback',
					'noresults_callback' => 'wayako_reference_noresults_callback',
				),
			);

			wpgb_render_facet(
				array(
					'id'   => 1, // Load more facet.
					'class' => 'load-more-facet',
					'grid' => 'references-secteur-grid',
				)
			);
			?>

		</div>

		<!-- Realisation -->
		<div id="realisation" class="realisation-tab tab-pane fade" role="tabpanel" aria-labelledby="realisation-tab">

			<?php
			wpgb_render_facet(
				array(
					'id'    => 3, // realisation filter facet.
					'class' => 'realisation-filter-facet',
					'grid'  => 'references-realisation-grid',
				),
			);

			wpgb_render_template(
				array(
					'id'                 => 'references-realisation-grid',
					'class'              => 'references-realisation-grid row gx-0',
					'source_type'        => 'post_type',
					'is_main_query'      => false,
					'query_args'         => array(
						'post_type'      => 'reference',
						'posts_per_page' => 12,
					),
					'render_callback'    => 'wayako_reference_render_callback',
					'noresults_callback' => 'wayako_reference_noresults_callback',
				),
			);
			?>

			<?php
			wpgb_render_facet(
				array(
					'id'    => 1, // Load more facet.
					'class' => 'load-more-facet',
					'grid'  => 'references-realisation-grid',
				),
			);
			?>

		</div>

	</div>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
