<?php
/**
 * Template Name: Single reference
 * Template Post Type: page, reference
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

	<?php elements_flexibles(); ?>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
