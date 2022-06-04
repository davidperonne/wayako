<?php
/**
 * Hero template
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<header class="entry-header d-flex hero">

	<div class="hero__inner alignwide">

		<p class="hero__sub-title"><?php //echo esc_html( $sub_title ); ?></p>

		<h1 class="hero__title entry-title"><?php echo get_the_title(); ?></h1>



		<?php

		if ( is_front_page() && is_home() ) :

			// Default homepage.
			the_title( '<h1 id="entry-title" class="entry-title">', '</h1>' );

		elseif ( is_front_page() ) :

			// Static homepage.
			//the_title( '<h1 id="entry-title" class="entry-title">', '</h1>' );

			echo '<h1 id="entry-title" class="entry-title"> ' . get_bloginfo('title') . ' <span>' . get_the_title() . '</span></h1>';

		elseif ( is_home() ) :

			// Blog page.
			echo '<h1 id="entry-title" class="entry-title">' . esc_html__( 'Blog', 'wayako' ) . '</h1>';

		elseif ( 'post' === get_post_type() && is_single() ) :

			// Blog single page.
			echo '<div id="entry-title" class="h1 entry-title">' . esc_html__( 'Nouvelles', 'wayako' ) . '</div>';

		elseif ( is_category() ) :

			// Blog category page.
			the_archive_title( '<h1 id="entry-title" class="entry-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );

		else :

			// Everything else.
			the_title( '<h1 id="entry-title" class="entry-title">', '</h1>' );

		endif;
		?>












		<?php if ( function_exists( 'seopress_display_breadcrumbs' ) ) { seopress_display_breadcrumbs(); } ?>

	</div>

</header>





	<?php
/*	$image = get_field( 'image', 'options' );
	$size  = 'full';
	if ( $image ) : ?>
		<figure class="is-background">
			<?php echo wp_get_attachment_image( $image['id'], $size, "", array( 'alt' => esc_attr( $image['alt'] ) ) ); ?>
		</figure>
	<?php endif; ?>

	<?php

	if ( is_front_page() && is_home() ) :

		// Default homepage.
		the_title( '<h1 id="entry-title" class="entry-title">', '</h1>' );

	elseif ( is_front_page() ) :

		// Static homepage.
		//the_title( '<h1 id="entry-title" class="entry-title">', '</h1>' );

		echo '<h1 id="entry-title" class="entry-title"> ' . get_bloginfo('title') . ' <span>' . get_the_title() . '</span></h1>';
		//echo '<span class="frequencies">101,1 Edmundston. 105,1 Grand-Sault￼</span>';

	elseif ( is_home() ) :

		// Blog page.
		echo '<h1 id="entry-title" class="h1 entry-title">' . esc_html__( 'Nouvelles', 'wayako' ) . '</h1>';

	elseif ( 'post' === get_post_type() && is_single() ) :

		// Blog single page.
		echo '<div id="entry-title" class="h1 entry-title">' . esc_html__( 'Nouvelles', 'wayako' ) . '</div>';

	elseif ( is_category() ) :

		// Blog category page.
		the_archive_title( '<h1 id="entry-title" class="entry-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );

	else :

		// Everything else.
		the_title( '<h1 id="entry-title" class="entry-title">', '</h1>' );

	endif;
	?>

	<?php if ( function_exists( 'seopress_display_breadcrumbs' ) ) { seopress_display_breadcrumbs(); }*/ ?>


