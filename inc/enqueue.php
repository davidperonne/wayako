<?php
/**
 * Wayako enqueue scripts
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wayako_scripts' ) ) :

	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function wayako_scripts() {
		$theme_version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), $theme_version );
		wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/vendor/flexslider/css/flexslider.min.css', array(), $theme_version );
		wp_enqueue_style( 'wayako-styles', get_stylesheet_directory_uri() . '/assets/css/wayako.min.css', array(), $theme_version );
		wp_enqueue_style( 'wayako-custom-styles', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), $theme_version );

		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), $theme_version, true );
		wp_enqueue_script( 'flexslider-scripts', get_template_directory_uri() . '/vendor/flexslider/js/jquery.flexslider-min.js', array(), $theme_version, true );
		wp_enqueue_script( 'isotope-scripts', get_template_directory_uri() . '/vendor/isotope/isotope.pkgd.min.js', array(), $theme_version, true );
		wp_enqueue_script( 'wayako-scripts', get_stylesheet_directory_uri() . '/assets/js/wayako.js', array(), $theme_version, true );
		wp_enqueue_script( 'gsap-scripts', get_template_directory_uri() . '/vendor/gsap3/gsap.min.js', array(), $theme_version, false );
		wp_enqueue_script( 'scrollmagic-scripts', get_template_directory_uri() . '/vendor/scrollmagic/ScrollMagic.min.js', array(), $theme_version, false );
		wp_enqueue_script( 'animation-gsap-scripts', get_template_directory_uri() . '/vendor/scrollmagic/plugins/animation.gsap.min.js', array(), $theme_version, false );
		wp_enqueue_script( 'debug-addIndicators-scripts', get_template_directory_uri() . '/vendor/scrollmagic/plugins/debug.addIndicators.min.js', array(), $theme_version, false );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Localize the script with new data.
		$script_data_array = array(
			'ajaxurl'  => admin_url( 'admin-ajax.php' ),
			'security' => wp_create_nonce( 'view_modal' ),
		);
		wp_localize_script( 'wayako-scripts', 'blog', $script_data_array );

		// Load critical styles in production.
		wp_register_style( 'wayako-critical-styles', '' );
		wp_add_inline_style( 'wayako-critical-styles', wayako_get_font_face_styles() );
		if ( false === WP_DEBUG ) {
			// Only in production.
		//	wp_add_inline_style( 'wayako-critical-styles', wayako_get_critical_style() );
		}
		wp_enqueue_style( 'wayako-critical-styles' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'wayako_scripts' );


if ( ! function_exists( 'wayako_get_critical_style' ) ) :

	/**
	 * Load critical css file content function.
	 *
	 * @return void
	 */
	function wayako_get_critical_style() {

		ob_start();
		include_once get_template_directory() . '/assets/css/critical-style.min.css';
		return ob_get_clean();
	}

endif;


if ( ! function_exists( 'wayako_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @return void
	 */
	function wayako_editor_styles() {

		$theme_version = wp_get_theme()->get( 'Version' );
		wp_enqueue_style( 'wayako-editor-styles', get_stylesheet_directory_uri() . '/assets/css/editor.min.css', array(), $theme_version );

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', wayako_get_font_face_styles() );
	}

endif;

add_action( 'admin_init', 'wayako_editor_styles' );


if ( ! function_exists( 'wayako_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions wayako_styles() and wayako_editor_styles() above.
	 *
	 * @return string
	 */
	function wayako_get_font_face_styles() {
		return "
		@font-face{
			font-family: 'Montserrat';
			font-weight: 300;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/montserrat-v23-latin-300.woff2' ) . "') format('woff2'),
				url('" . get_theme_file_uri( 'assets/fonts/montserrat-v23-latin-300.woff' ) . "') format('woff');
			font-display: swap;
		}
		@font-face{
			font-family: 'Montserrat';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/montserrat-v23-latin-regular.woff2' ) . "') format('woff2'),
				url('" . get_theme_file_uri( 'assets/fonts/montserrat-v23-latin-regular.woff' ) . "') format('woff');
			font-display: swap;
		}

		@font-face{
			font-family: 'Montserrat';
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/montserrat-v23-latin-500.woff2' ) . "') format('woff2'),
				url('" . get_theme_file_uri( 'assets/fonts/montserrat-v23-latin-500.woff' ) . "') format('woff');
			font-display: swap;
		}
		@font-face{
			font-family: 'Montserrat';
			font-weight: 600;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/montserrat-v23-latin-600.woff2' ) . "') format('woff2'),
				url('" . get_theme_file_uri( 'assets/fonts/montserrat-v23-latin-600.woff' ) . "') format('woff');
			font-display: swap;
		}		
		";
	}

endif;


if ( ! function_exists( 'wayako_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (e.g. it used
	 * on every heading). The other font is only needed if there is any applicable content in italic style, and
	 * therefore preloading it would in most cases regress performance when that font would otherwise not be loaded at
	 * all.
	 *
	 * @return void
	 */
	function wayako_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/montserrat-v23-latin-regular.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'wayako_preload_webfonts' );
