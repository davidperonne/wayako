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
	'/custom-post-types.php',
	'/taxonomies.php',
	'/gutenberg.php',
	'/deprecated.php',
	'/acf.php',
	'/blocks.php',
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


/**
 * Disable Emojis in WordPress.
 *
 * @return void
 */
function disable_emoji_feature() {

	// Prevent Emoji from loading on the front-end.
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Remove from admin area also.
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	// Remove from RSS feeds also.
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

	// Remove from Embeds.
	remove_filter( 'embed_head', 'print_emoji_detection_script' );

	// Remove from emails.
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Disable from TinyMCE editor. Currently disabled in block editor by default.
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );

	add_filter( 'option_use_smilies', '__return_false' );
}
add_action( 'init', 'disable_emoji_feature' );

function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		$plugins = array_diff( $plugins, array( 'wpemoji' ) );
	}
	return $plugins;
}


add_filter( 'option_use_smilies', '__return_false' );




add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

/**
 * Loading CF7 JavaScript and stylesheet only when it is necessary
 *
 * @return void
 */
function load_contactform7_on_specific_page() {

	if ( is_page( 'contact' ) ) {
		if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
			wpcf7_enqueue_scripts();
		}

		if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
			wpcf7_enqueue_styles();
		}
	}
}
add_action( 'wp_enqueue_scripts', 'load_contactform7_on_specific_page' );



// For speed !
add_filter( 'should_load_separate_core_block_assets', '__return_true' );


// Remove CookiesYes branding.
add_filter( 'wt_cli_enable_ckyes_branding', '__return_false', 11 );

/**
 * Replace h4 tag on privacy title popup.
 *
 * @param [type] $html
 * @param [type] $begin
 * @param [type] $end
 * @return void
 */
function wt_cli_add_html_wrapper( $html, $begin, $end ) {

	$begin = "<div class='h4'>";
	$end   = "</div>";
	$html  = $begin . $html . $end;
	return $html;
}
//add_filter( 'wt_cli_change_privacy_overview_title_tag', 'wt_cli_add_html_wrapper', 10, 3 );









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




/*

// Antispam test.
function preprocess_new_comment( $result, $tag ) {
	if ( ! isset( $_POST['is_legit'] ) ) {
	//	die(' You are bullshit' );
	}
	return $result;
}

// Processes the form.
add_filter( 'wpcf7_validate', 'preprocess_new_comment', 10, 2 );
*/
/*
if(function_exists('add_action')) {
	add_action('preprocess_comment', 'preprocess_new_comment');
}*/