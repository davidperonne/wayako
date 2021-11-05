<?php
/**
 * WP Grid Builder
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * This callback is called for each reference in the loop.
 *
 * @param object $post Holds post, term or user object (depending of the source_type).
 */
function reference_render_callback( $post ) {

	get_template_part( 'loop-templates/content', 'reference' );

}


/**
 * This callback is called when no results match selected facets.
 */
function reference_noresults_callback() {

	get_template_part( 'loop-templates/content', 'none' );

}
