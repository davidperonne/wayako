<?php
/**
 * Single post partial template
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$col_class = 'col-12 col-md-6 col-xl-4';
?>

<article class="reference <?php echo $col_class; ?>" id="post-<?php the_ID(); ?>">

	<a class="" href="<?php echo esc_url( get_permalink() ); ?>">

		<figure>
			<?php
			// Default image if no product image.
			if ( has_post_thumbnail() ) {
				echo get_the_post_thumbnail( $post, 'square_medium', array( 'class' => 'img-cover', 'alt' => get_the_title() ) );
			} else {
				echo '<img class="rounded-circle" src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/normal-square-default.jpg" />';
			}
			?>

			<figcaption class="text-center">
				<div class="figcaption__inner-container">
					<h3 class="figcaption__title"><?php the_title(); ?></h3>
					<p class="figcaption__sub-title">Sous-titre de la référence</p>
				</div>
			</figcaption>

		</figure>

	</a>

</article>
