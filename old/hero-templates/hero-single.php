<?php
/**
 * Partial template for header in page.php
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( is_single() ) : ?>

	<header class="entry-header hero hero-single">
		<div class="hero-single__content">

			<?php the_title( '<h1 class="hero-single__title">', '</h1>' ); ?>

			<div class="entry-meta">

				<?php wayako_posted_on(); ?>

				<?php wayako_comments_quantity(); ?>

			</div>

			<?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'hero-single__image' ) ); ?>

		</div>
	</header>

<?php endif; ?>
