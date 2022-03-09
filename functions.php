<?php
/**
 * Wayako functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wayako
 */

if ( ! defined( '_WAYAKO_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_WAYAKO_VERSION', '1.0.0' );
}

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

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'wayako_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wayako_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wayako_content_width', 640 );
}
//add_action( 'after_setup_theme', 'wayako_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wayako_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'wayako' ),
			'id'            => 'footer-widget',
			'description'   => esc_html__( 'Footer sidebar widget area', 'wayako' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Copyright', 'wayako' ),
			'id'            => 'copyright-widget',
			'description'   => esc_html__( 'Copyright sidebar widget area', 'wayako' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
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
	//wp_enqueue_style( 'wayako-style-old', get_stylesheet_uri(), array(), _WAYAKO_VERSION );
	//wp_style_add_data( 'wayako-style-old', 'rtl', 'replace' );

	wp_enqueue_style( 'wayako-styles', get_stylesheet_directory_uri() . '/assets/css/wayako.min.css', array(), _WAYAKO_VERSION );
	wp_enqueue_style( 'wayako-custom-styles', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), _WAYAKO_VERSION );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'wayako-scripts', get_template_directory_uri() . '/assets/js/wayako.js', array(), _WAYAKO_VERSION, true );
	wp_enqueue_script( 'wayako-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _WAYAKO_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wayako_scripts' );

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