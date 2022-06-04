<?php
/**
 * Enqueues and localize theme scripts and styles
 *
 * @package Wayako
 */

/**
 * Enqueue scripts and styles.
 */
function wayako_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'wayako-styles', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(), $theme_version );
	//wp_enqueue_style( 'wayako-custom-styles', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), $theme_version );

	//wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'wayako-scripts', get_template_directory_uri() . '/assets/js/wayako.js', array(), $theme_version, true );
	wp_enqueue_script( 'wayako-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), $theme_version, true );

	wp_enqueue_script( 'gsap-scripts', get_template_directory_uri() . '/vendor/gsap3/gsap.min.js', array(), $theme_version, false );
	wp_enqueue_script( 'gsap-scrolltrigger-scripts', get_template_directory_uri() . '/vendor/gsap3/ScrollTrigger.min.js', array(), $theme_version, false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_tax( 'portfolio_cat' ) ) {
		wp_enqueue_script( 'isotope-scripts', get_template_directory_uri() . '/vendor/isotope/isotope.pkgd.min.js', array(), $theme_version, true );
	}

	if ( is_single() && 'portfolio' == get_post_type() ) {
		wp_enqueue_style( 'glightbox-styles', get_template_directory_uri() . '/vendor/glightbox/css/glightbox.min.css', array(), $theme_version );
		wp_enqueue_script( 'glightbox-scripts', get_template_directory_uri() . '/vendor/glightbox/js/glightbox.min.js', array(), $theme_version, true );
	}

	// Load critical styles.
	wp_register_style( 'wayako-critical-styles', '' );
	wp_add_inline_style( 'wayako-critical-styles', wayako_get_font_face_styles() );
	wp_enqueue_style( 'wayako-critical-styles' );

}
add_action( 'wp_enqueue_scripts', 'wayako_scripts' );

if ( ! function_exists( 'wayako_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @return void
	 */
	function wayako_editor_styles() {

		$theme_version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style( 'wayako-editor-styles', get_template_directory_uri() . '/assets/css/editor.min.css', array(), $theme_version );

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
		@font-face{
			font-family: 'Mrs Saint Delafield';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/mrs-saint-delafield-v11-latin-regular.woff2' ) . "') format('woff2'),
				url('" . get_theme_file_uri( 'assets/fonts/mrs-saint-delafield-v11-latin-regular.woff' ) . "') format('woff');
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

