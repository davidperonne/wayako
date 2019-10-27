<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Remove styles and scripts.
 */
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

/**
 * Add styles and scripts.
 */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'wayako-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    
	// Add animate style.
	wp_enqueue_style( 'wayako-animate-styles', get_stylesheet_directory_uri() . '/css/animate.min.css', array(), $the_theme->get( 'Version' ) );

	// Add custom style.
	wp_enqueue_style( 'wayako-custom-styles', get_stylesheet_directory_uri() . '/css/custom.css', array(), $the_theme->get( 'Version' ) );

    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );

	// Add custom js.
	wp_enqueue_script( 'wayako-custom-scripts', get_stylesheet_directory_uri() . '/js/custom.js', array(), $the_theme->get( 'Version' ), true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}


/**
 * Add Google Fonts
 */
function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:400,600,700|Just+Me+Again+Down+Here&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


/**
 * Add textdomain.
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'wayako', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );




//require_once( dirname( __FILE__ ) . '/includes/custom_post_types.php' );
//require_once( dirname( __FILE__ ) . '/includes/acf.php' );
require_once( dirname( __FILE__ ) . '/includes/menus.php' );
//require_once( dirname( __FILE__ ) . '/includes/widgets.php' );
//require_once( dirname( __FILE__ ) . '/includes/breadcrumb.php' );
//require_once( dirname( __FILE__ ) . '/includes/taxonomies.php' );
//require_once( dirname( __FILE__ ) . '/includes/shortcodes.php' );
//require_once( dirname( __FILE__ ) . '/includes/login.php' );






/**
 * Add custom image size
 */
if ( function_exists( 'add_image_size' ) ) {

	//add_image_size( 'medium_square', 350, 350, true );
	//add_image_size( 'large_rectangle', 640, 360, true );

}



/**
 * Remove the read mode link after the excerpt.
 */
function remove_parent_hooks() {
	remove_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );
}
//add_action( 'after_setup_theme', 'remove_parent_hooks' );











