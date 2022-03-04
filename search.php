<?php
/**
 * The template for displaying search results pages
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="wrapper" id="content">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">

			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: query term */
					esc_html__( 'Search Results for: %s', 'wayako' ),
					'<span>' . get_search_query() . '</span>'
				);
				?>
			</h1>

		</header><!-- .page-header -->

		<?php /* Start the Loop */ ?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'loop-templates/content', 'search' );
		endwhile;
		?>

	<?php else : ?>

		<?php get_template_part( 'loop-templates/content', 'none' ); ?>

	<?php endif; ?>

	<!-- The pagination component -->
	<?php wayako_pagination(); ?>

</div><!-- #content -->

<?php
get_footer();
