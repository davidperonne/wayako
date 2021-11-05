<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// Set defaults.
$args = wp_parse_args(
    $args,
    array(
        'number' => '',
    )
);

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row">

		<div class="col-12 col-md-6 entry-thumbnail px-4 px-md-5 mb-3">
			<a href="<?php echo esc_url( get_permalink() ); ?>">
				<?php echo get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'w-100') ); ?>
			</a>
		</div>

		<div class="col-12 col-md-6 align-self-center px-4 px-md-5 mb-3">

			<header class="entry-header">

				<?php if ( 'post' === get_post_type() ) : ?>

					<div class="entry-meta">
						<?php wayako_posted_on(); ?>
						<div class="number fade-up"><?php echo str_pad($args['number'], 2, "0", STR_PAD_LEFT); ?></div>
					</div><!-- .entry-meta -->

				<?php endif; ?>

				<?php
				the_title(
					sprintf( '<h2 class="entry-title fade-up mb-4"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
					'</a></h2>'
				);
				?>

			</header><!-- .entry-header -->

			<div class="entry-content">

				<?php the_excerpt(); ?>

				<a class="btn btn-outline reveal1 mt-3" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">Continuer la <strong>lecture</strong></a>

				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'wayako' ),
						'after'  => '</div>',
					)
				);
				?>

			</div><!-- .entry-content -->

		</div>

	</div>

</article><!-- #post-## -->
