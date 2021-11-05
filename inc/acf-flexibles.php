<?php
/**
 * Modules - flexibles ACF elements.
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function elements_flexibles( $post_id = false ) {

	if ( ! function_exists( 'get_field' ) )
		return;

	$post_id = $post_id ? intval( $post_id ) : get_the_ID();

	// Check value exists.
	if ( have_rows( 'elements_flexibles', $post_id ) ) :
		while ( have_rows( 'elements_flexibles', $post_id ) ) : the_row();

			if ( get_row_layout() == 'descriptif' ) : ?>

				<?php get_template_part( 'global-templates/reference-flexibles/descriptif' ); ?>

			<?php elseif ( get_row_layout() == 'gros_visuel' ) : ?>

				<?php get_template_part( 'global-templates/reference-flexibles/gros-visuel' ); ?>

			<?php elseif ( get_row_layout() == 'accroche' ) : ?>

				<?php get_template_part( 'global-templates/reference-flexibles/accroche' ); ?>

			<?php elseif ( get_row_layout() == 'composition_2_visuels_et_texte' ) : ?>

				<?php get_template_part( 'global-templates/reference-flexibles/composition-2-visuels-et-texte' ); ?>

			<?php elseif ( get_row_layout() == 'bandeau_intermediaire' ) : ?>

				<?php get_template_part( 'global-templates/reference-flexibles/bandeau-intermediaire' ); ?>

			<?php elseif ( get_row_layout() == 'bandeau_2_visuels' ) : ?>

				<?php get_template_part( 'global-templates/reference-flexibles/bandeau-2-visuels' ); ?>

			<?php endif;

		endwhile;
	endif;
}
