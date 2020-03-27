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
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


/**
 * Add textdomain.
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'wayako', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );




require_once( dirname( __FILE__ ) . '/includes/custom_post_types.php' );
require_once( dirname( __FILE__ ) . '/includes/menus.php' );
require_once( dirname( __FILE__ ) . '/includes/taxonomies.php' );


/**
 * Gutenberg admin width.
 */
function my_theme_setup() {
	add_theme_support('editor-styles');
	add_editor_style( 'css/style-editor.css' );
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );


/**
 * Google Analytics.
 */
function my_google_analytics() { 
	if ( function_exists('cn_cookies_accepted') && cn_cookies_accepted() ) { ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-10532779-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-10532779-1');
		</script>
<?php }
}
add_action( 'wp_head', 'my_google_analytics', 1 );


/*pour ne plus afficher automatiquement les liens vers flux */
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version



add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');
 
function new_mail_from($old) {
return 'contact@wayako.com';
}
function new_mail_from_name($old) {
return 'Wayako';
}



add_filter( 'after_setup_theme', 'remove_redundant_shortlink' );

function remove_redundant_shortlink() {
	// remove HTML meta tag
	// <link rel='shortlink' href='http://example.com/?p=25' />
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );

	// remove HTTP header
	// Link: <https://example.com/?p=25>; rel=shortlink
	remove_action( 'template_redirect', 'wp_shortlink_header', 11 );
}


