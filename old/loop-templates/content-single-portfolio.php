<?php
/**
 * Single book partial template
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">
		<div class="entry-content-inner">

			<?php the_content(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'wayako' ),
					'after'  => '</div>',
				)
			);
			?>

		</div>
	</div>

</article>
