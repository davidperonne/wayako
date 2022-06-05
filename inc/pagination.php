<?php
/**
 * Pagination layout.
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


if ( ! function_exists( 'wayako_pagination' ) ) {

	function wayako_pagination( $args = array(), $class = 'pagination' ) {

		if ( $GLOBALS['wp_query']->max_num_pages <= 1 ) {
			return;
		}

		$args = wp_parse_args(
			$args,
			array(
				'mid_size'           => 2,
				'prev_next'          => true,
				'prev_text'          => __( '&laquo;', 'wayako' ),
				'next_text'          => __( '&raquo;', 'wayako' ),
				'screen_reader_text' => __( 'Posts navigation', 'wayako' ),
				'type'               => 'array',
				'current'            => max( 1, get_query_var( 'paged' ) ),
			)
		);

		$links = paginate_links( $args );

		?>

		<nav aria-label="<?php echo $args['screen_reader_text']; ?>">

			<ul class="pagination">

				<?php
				foreach ( $links as $key => $link ) {
					?>
					<li class="page-item <?php echo strpos( $link, 'current' ) ? 'active' : ''; ?>">
						<?php echo str_replace( 'page-numbers', 'page-link', $link ); ?>
					</li>
					<?php
				}
				?>

			</ul>

		</nav>

		<?php
	}
}


/**/


if ( ! function_exists( 'wayako_nav' ) ) {

	/**
	 * Prev next navigation.
	 *
	 * @return void
	 */
	function wayako_nav() {
		?>

		<nav class="prev-next-navigation alignwide">
			<h2 class="screen-reader-text">Navigation</h2>
			<div class="nav-links">

				<?php
				$prev_post = get_previous_post();
				if ( $prev_post ) {
					echo '<span class="nav-previous"><a rel="prev" href="' . get_permalink($prev_post->ID) . '" class="btn btn-blue"><span>' . esc_html__( 'Previous', 'wayako' ) . '</span></a></span>';
				} else {
					echo '<span class="nav-previous"><a rel="prev" href="#" class="btn btn-blue disabled"><span>' . esc_html__( 'Previous', 'wayako' ) . '</span></a></span>';
				}
				?>

				<?php
				$next_post = get_next_post();
				if ( $next_post ) {
					echo '<span class="nav-next"><a rel="next" href="' . get_permalink($next_post->ID) . '" class="btn btn-blue"><span>' . esc_html__( 'Next', 'wayako' ) . '</span></a></span>';
				} else {
					echo '<span class="nav-next"><a rel="next" href="#" class="btn btn-blue disabled"><span>' . esc_html__( 'Next', 'wayako' ) . '</span></a></span>';
				}
				?>

			</div><!-- .nav-links -->
		</nav>

		<?php
	}
}
