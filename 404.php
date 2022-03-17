<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Wayako
 */

get_header();
?>

<section class="error-404 not-found">

	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wayako' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wayako' ); ?></p>
	</div><!-- .page-content -->

</section><!-- .error-404 -->

<?php
get_footer();
