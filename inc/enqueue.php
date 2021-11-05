<?php
/**
 * wayako enqueue scripts
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wayako_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function wayako_scripts() {
		$theme_version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), $theme_version );
		//wp_enqueue_style( 'fancybox-styles', get_template_directory_uri() . '/vendor/fancybox/css/jquery.fancybox.min.css', array(), $theme_version );
		wp_enqueue_style( 'wayako-styles', get_stylesheet_directory_uri() . '/assets/css/wayako.min.css', array(), $theme_version );
		wp_enqueue_style( 'conversion-custom-styles', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), $theme_version );

		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), $theme_version, true );
		wp_enqueue_script( 'wayako-scripts', get_stylesheet_directory_uri() . '/assets/js/wayako.js', array(), $theme_version, true );
		//wp_enqueue_script( 'fancybox-scripts', get_template_directory_uri() . '/vendor/fancybox/js/jquery.fancybox.min.js', array(), $theme_version, false );
		wp_enqueue_script( 'gsap-scripts', get_template_directory_uri() . '/vendor/gsap3/gsap.min.js', array(), $theme_version, false );
		wp_enqueue_script( 'scrollmagic-scripts', get_template_directory_uri() . '/vendor/scrollmagic/ScrollMagic.min.js', array(), $theme_version, false );
		wp_enqueue_script( 'animation-gsap-scripts', get_template_directory_uri() . '/vendor/scrollmagic/plugins/animation.gsap.min.js', array(), $theme_version, false );
		wp_enqueue_script( 'debug-addIndicators-scripts', get_template_directory_uri() . '/vendor/scrollmagic/plugins/debug.addIndicators.min.js', array(), $theme_version, false );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Localize the script with new data.
		$script_data_array = array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'security' => wp_create_nonce( 'view_modal' ),
		);
		wp_localize_script( 'wayako-scripts', 'blog', $script_data_array );
	}
} // End of if function_exists( 'wayako_scripts' ).

add_action( 'wp_enqueue_scripts', 'wayako_scripts' );



/* Critical styles (only in production) */

if ( ! function_exists( 'wayako_global_critical_styles' ) ) :
	/**
	 * Enqueue editor styles.
	 */
	function wayako_global_critical_styles() {
		if ( false === WP_DEBUG ) {
			wp_register_style( 'wayako-critical-styles', '' );
			//wp_add_inline_style( 'wayako-critical-styles', wayako_get_font_face_styles() );
			wp_add_inline_style( 'wayako-critical-styles', wayako_get_critical_style() );
			wp_enqueue_style( 'wayako-critical-styles' );
		}
	}
 	add_action( 'wp_enqueue_scripts', 'wayako_global_critical_styles' );
endif; 

/**
 * Load critical css file content function
 *
 * @return void
 */
function wayako_get_critical_style() {
	//$critical_style = file_get_contents( get_template_directory() . '/assets/css/critical-style.min.css' );
	//return $critical_style;

	ob_start();
	include_once get_template_directory() . '/assets/css/critical-style.min.css';
	return ob_get_clean();

}

if ( ! function_exists( 'wayako_get_font_face_styles' ) ) :
	/**
	 * Get font face styles. --------------------------------------> TODO !!!!!!!!!!
	 *
	 * @return string
	 */
	function wayako_get_font_face_styles() {
		return "
		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/source-serif-pro/SourceSerif4Variable-Italic.ttf.woff2' ) . "') format('woff2');
		}

		";
	}
endif;
