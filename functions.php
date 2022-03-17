<?php
/**
 * Wayako functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wayako
 */

define( 'WAYAKO_VERSION', '1.0.0' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wayako_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Wayako, use a find and replace
		* to change 'wayako' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wayako', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => __( 'Primary menu', 'wayako' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);


	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'd1e4dd',
		)
	);

	// Editor color palette.
	$black     = '#000000';
	$dark_gray = '#28303D';
	$gray      = '#39414D';
	$green     = '#D1E4DD';
	$blue      = '#D1DFE4';
	$purple    = '#D1D1E4';
	$red       = '#E4D1D1';
	$cerise       = '#DD38B4'; // ok
	$orange    = '#ff7d2d'; // ok
	$yellow    = '#EEEADD';
	$white     = '#FFFFFF';
	$white_lilac = '#F6F7FC'; // ok

	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Black', 'wayako' ),
				'slug'  => 'black',
				'color' => $black,
			),
			array(
				'name'  => esc_html__( 'Dark gray', 'wayako' ),
				'slug'  => 'dark-gray',
				'color' => $dark_gray,
			),
			array(
				'name'  => esc_html__( 'Gray', 'wayako' ),
				'slug'  => 'gray',
				'color' => $gray,
			),
			array(
				'name'  => esc_html__( 'Green', 'wayako' ),
				'slug'  => 'green',
				'color' => $green,
			),
			array(
				'name'  => esc_html__( 'Blue', 'wayako' ),
				'slug'  => 'blue',
				'color' => $blue,
			),
			array(
				'name'  => esc_html__( 'Purple', 'wayako' ),
				'slug'  => 'purple',
				'color' => $purple,
			),
			array(
				'name'  => esc_html__( 'Red', 'wayako' ),
				'slug'  => 'red',
				'color' => $red,
			),
			array(
				'name'  => esc_html__( 'Cerise', 'wayako' ), // ok
				'slug'  => 'cerise',
				'color' => $cerise,
			),
			array(
				'name'  => esc_html__( 'Orange', 'wayako' ), // ok
				'slug'  => 'orange',
				'color' => $orange,
			),
			array(
				'name'  => esc_html__( 'Yellow', 'wayako' ),
				'slug'  => 'yellow',
				'color' => $yellow,
			),
			array(
				'name'  => esc_html__( 'White', 'wayako' ),
				'slug'  => 'white',
				'color' => $white,
			),
			array(
				'name'  => esc_html__( 'White Lilac', 'wayako' ), // ok
				'slug'  => 'white-lilac',
				'color' => $white_lilac,
			),
		)
	);

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'wayako_setup' );

/**
 * Widgets
 *
 * @return void
 */
function wayako_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'wayako' ),
			'id'            => 'footer-widget',
			'description'   => esc_html__( 'Footer sidebar widget area', 'wayako' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'wayako_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wayako_scripts() {

	wp_enqueue_style( 'wayako-styles', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(), WAYAKO_VERSION );
	wp_enqueue_style( 'wayako-custom-styles', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), WAYAKO_VERSION );

	//wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'wayako-scripts', get_template_directory_uri() . '/assets/js/wayako.js', array(), WAYAKO_VERSION, true );
	wp_enqueue_script( 'wayako-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), WAYAKO_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_tax( 'portfolio_cat' ) ) {

		wp_enqueue_script( 'isotope-scripts', get_template_directory_uri() . '/vendor/isotope/isotope.pkgd.min.js', array(), WAYAKO_VERSION, true );
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

		wp_enqueue_style( 'wayako-editor-styles', get_template_directory_uri() . '/assets/css/editor.min.css', array(), WAYAKO_VERSION );

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













/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
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