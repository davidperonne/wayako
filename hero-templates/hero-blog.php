<?php
/**
 * Partial template for header in page.php
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( is_home() ) :

	$page_for_posts = get_option( 'page_for_posts' );
	?>

	<header class="entry-header hero hero-blog">

		<?php if ( $header_image = get_field( 'header_image', $page_for_posts ) ) : ?>
			<figure class="is-background">
				<?php echo wp_get_attachment_image( $header_image['id'], '16_9_landscape_large', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $header_image['alt'] ) ) ); ?>
			</figure>
		<?php endif; ?>

		<div class="hero-blog__content">

			<h1 class="hero-blog__title">

				<?php
				$header_logo = get_field( 'header_logo', $page_for_posts );
				if ( $header_logo ) : ?>
					<img class="hero-blog__image" src="<?php echo esc_url( $header_logo['url'] ); ?>" alt="<?php echo esc_attr( $header_logo['alt'] ); ?>" />
				<?php endif; ?>

				<?php echo get_the_title( get_option( 'page_for_posts' ) ); ?>

			</h1>

		</div>

	</header>

<?php endif; ?>
