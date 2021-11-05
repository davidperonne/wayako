<?php
/**
 * Partial template for header in page.php
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<header class="entry-header hero hero-page">

	<?php if ( $header_image = get_field( 'header_image' ) ) : ?>
		<figure class="is-background">
			<?php echo wp_get_attachment_image( $header_image['id'], '16_9_landscape_large', false, array( 'class' => 'img-cover', 'alt' => esc_attr( $header_image['alt'] ) ) ); ?>
		</figure>
	<?php endif; ?>

	<div class="hero-page__content">

		<h1 class="hero-page__title">

			<?php
			$header_logo = get_field( 'header_logo' );
			if ( $header_logo ) : ?>
				<img class="hero-page__image" src="<?php echo esc_url( $header_logo['url'] ); ?>" alt="<?php echo esc_attr( $header_logo['alt'] ); ?>" />
			<?php endif; ?>

			<?php the_title(); ?>

		</h1>

	</div>
	
</header>
