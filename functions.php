<?php
/**
 * Wayako functions and definitions
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$wayako_includes = array(
	'/setup.php',
	'/menus.php',
	'/widgets.php',
	'/enqueue.php',
	'/template-tags.php',
	'/pagination.php',
	'/extras.php',
	'/custom-comments.php',
	'/class-wp-bootstrap-navwalker.php',
	'/editor.php',
	'/gutenberg.php',
	'/deprecated.php',
	'/acf.php',
);

foreach ( $wayako_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

// Debug log.
if ( ! function_exists( 'write_log' ) ) {

	function write_log( $log ) {
		if ( true === WP_DEBUG ) {
			if ( is_array( $log ) || is_object( $log ) ) {
				error_log( print_r( $log, true ) );
			} else {
				error_log( $log );
			}
		}
	}
}


/**
 * Add custom image size (thumbnail, small, light, normal, medium, large, full...).
 */
if ( function_exists( 'add_image_size' ) ) {

	/* square */

	//add_image_size( 'square_large', 2560, 2560, true );
	add_image_size( 'square_medium_large', 1920, 1920, true );
	add_image_size( 'square_medium', 1280, 1280, true );
	add_image_size( 'square_small', 640, 640, true );

	/* 16/9 landscape */

	//add_image_size( '16_9_landscape_large', 2560, 1440, true );
	add_image_size( '16_9_landscape_medium_large', 1920, 1080, true );
	add_image_size( '16_9_landscape_medium', 1280, 720, true );
	add_image_size( '16_9_landscape_small', 640, 360, true );
}



if ( ! function_exists( 'wayako_cmplz_show_banner_on_click' ) ) :

	/**
	 * Show the banner when a html element with class 'cmplz-show-banner' is clicked.
	 *
	 * @return void
	 */
	function wayako_cmplz_show_banner_on_click() {
		?>
		<script>
			function addEvent(event, selector, callback, context) {
				document.addEventListener(event, e => {
					if ( e.target.closest(selector) ) {
						callback(e);
					}
				});
			}
			addEvent('click', '.cmplz-show-banner', function(){
				document.querySelectorAll('.cmplz-manage-consent').forEach(obj => {
					obj.click();
				});
			});
		</script>
		<?php
	}

endif;

add_action( 'wp_footer', 'wayako_cmplz_show_banner_on_click' );

