<?php
/**
 * wayako functions and definitions
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
	'/hooks.php',
	'/extras.php',
	'/custom-comments.php',
	'/class-wp-bootstrap-navwalker.php',
	'/editor.php',
	'/custom-post-types.php',
	'/taxonomies.php',
	'/gutenberg.php',
	'/deprecated.php',
	'/acf.php',
	'/acf-flexibles.php',
	//'/gridbuilder.php',
);

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	//$wayako_includes[] = '/jetpack.php';
}

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

	add_image_size( 'square_large', 2560, 2560, true );
	add_image_size( 'square_medium_large', 1920, 1920, true );
	add_image_size( 'square_medium', 1280, 1280, true );
	add_image_size( 'square_small', 640, 640, true );

	/* 16/9 landscape */

	add_image_size( '16_9_landscape_large', 2560, 1440, true );
	add_image_size( '16_9_landscape_medium_large', 1920, 1080, true );
	add_image_size( '16_9_landscape_medium', 1280, 720, true );
	add_image_size( '16_9_landscape_small', 640, 360, true );

	/* 4/3 portrait */

	add_image_size( '4_3_portrait_large', 1080, 1440, true );
	add_image_size( '4_3_portrait_medium_large', 810, 1080, true );
	add_image_size( '4_3_portrait_medium', 540, 720, true );
	add_image_size( '4_3_portrait_small', 270, 360, true );

	/* IMAX landscape */

	add_image_size( 'imax_landscape_large', 2060, 1440, true );
	add_image_size( 'imax_landscape_medium_large', 1545, 1080, true );
	add_image_size( 'imax_landscape_medium', 1030, 720, true );
	add_image_size( 'imax_landscape_small', 515, 360, true );
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


add_post_type_support( 'page', 'excerpt' );


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


/**
 * Customers ajax modal.
 *
 * @return void
 */
function load_customers_logo_by_ajax_callback() {

	check_ajax_referer( 'view_modal', 'security' );

	$arr_response = array();

	ob_start();
	?>

	<div class="close" title="Fermer" data-bs-dismiss="modal" aria-label="Fermer"></div>

	<?php if ( have_rows( 'customers', 'options' ) ) : ?>
		<div class="row">
			<?php while ( have_rows( 'customers', 'options' ) ) : the_row(); ?>

				<div class="col">

					<?php if ( $logo = get_sub_field( 'logo', 'options' ) ) : ?>
						<figure class="mb-0">
							<?php echo wp_get_attachment_image( $logo['id'], 'medium', false, array( 'class' => 'd-block', 'alt' => esc_attr( $logo['alt'] ) ) ); ?>
						</figure>
					<?php endif; ?>

				</div>

			<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<?php

	$arr_response = array(
		'title' => '',
		'content' => ob_get_clean(),
	);

	echo wp_json_encode( $arr_response );

	wp_die();
}
add_action( 'wp_ajax_load_customers_logo_by_ajax', 'load_customers_logo_by_ajax_callback' );
add_action( 'wp_ajax_nopriv_load_customers_logo_by_ajax', 'load_customers_logo_by_ajax_callback' );


/**
 * Team member ajax modal.
 *
 * @return void
 */
function load_team_member_post_by_ajax_callback() {

	check_ajax_referer( 'view_modal', 'security' );

	$member_id = $_POST['id'];

	$arr_response = array();

	ob_start();
	?>

	<div class="close" title="Fermer" data-bs-dismiss="modal" aria-label="Fermer"></div>

	<div class="left">
		<figure>

			<?php if ( $photo = get_field( 'photo', $member_id ) ) {
				echo wp_get_attachment_image( $photo['id'], 'full', false, array( 'class' => 'photo img-cover', 'alt' => esc_attr( $photo['alt'] ) ) );
			}
			?>

			<figcaption>
				<?php if ( $name = get_field( 'name', $member_id ) ) : ?>
					<div class="name"><?php echo esc_html( $name ); ?></div>
				<?php endif; ?>

				<?php if ( $function = get_field( 'function', $member_id ) ) : ?>
					<div class="function"><?php echo esc_html( $function ); ?></div>
				<?php endif; ?>
			</figcaption>

			<?php
			$illustration_1 = get_field( 'illustration_1', $member_id );
			if ( $illustration_1 ) : ?>
				<img class="illustration-1" src="<?php echo esc_url( $illustration_1['url'] ); ?>" alt="<?php echo esc_attr( $illustration_1['alt'] ); ?>" />
			<?php endif; ?>

			<?php
			$illustration_2 = get_field( 'illustration_2', $member_id );
			if ( $illustration_2 ) : ?>
				<img class="illustration-2" src="<?php echo esc_url( $illustration_2['url'] ); ?>" alt="<?php echo esc_attr( $illustration_2['alt'] ); ?>" />
			<?php endif; ?>

			<?php
			$illustration_3 = get_field( 'illustration_3', $member_id );
			if ( $illustration_3 ) : ?>
				<img class="illustration-3" src="<?php echo esc_url( $illustration_3['url'] ); ?>" alt="<?php echo esc_attr( $illustration_3['alt'] ); ?>" />
			<?php endif; ?>

		</figure>
	</div>
	<div class="right">
		<?php if ( $description = get_field( 'description', $member_id ) ) : ?>
			<div class="description"><?php echo $description; ?></div>
		<?php endif; ?>
	</div>

	<?php
	$arr_response = array(
		'title' => '',
		'content' => ob_get_clean(),
	);

	echo wp_json_encode( $arr_response );

	wp_die();
}
add_action( 'wp_ajax_load_team_member_post_by_ajax', 'load_team_member_post_by_ajax_callback' );
add_action( 'wp_ajax_nopriv_load_team_member_post_by_ajax', 'load_team_member_post_by_ajax_callback' );






/**
 * Add metabox to reference CPT.
 *
 * @return void
 */
function wayako_featured_reference_checkbox() {
	add_meta_box(
		'featured_reference_meta',
		__( 'Mise en avant', 'wayako' ),
		'wayako_featured_reference_checkbox_callback',
		'reference',
		'side'
	);
}
add_action( 'add_meta_boxes', 'wayako_featured_reference_checkbox' );

/**
 * Metabox form.
 *
 * @param [type] $post
 * @return void
 */
function wayako_featured_reference_checkbox_callback( $post ) {
	$featured = get_post_meta( $post->ID );
	?>

	<p>
		<div class="sm-row-content">
			<label for="featured_reference_checkbox">
				<input 
					type="checkbox" 
					name="featured_reference_checkbox" 
					id="featured_reference_checkbox" 
					value="yes" <?php if ( isset ( $featured['featured_reference_checkbox'] ) ) checked( $featured['featured_reference_checkbox'][0], 'yes' ); ?>
				/>
				<?php esc_html_e( 'Mise en avant', 'wayako' ); ?>
			</label>

		</div>
	</p>

	<?php
}

/**
 * Saves the metabox.
 *
 * @param [type] $post_id
 * @return void
 */
function wayako_featured_reference_checkbox_save( $post_id ) {

	// Checks save status.
	$is_autosave    = wp_is_post_autosave( $post_id );
	$is_revision    = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['sm_nonce'] ) && wp_verify_nonce( $_POST['sm_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exits script depending on save status.
	if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
		return;
	}

	// Checks for input and saves.
	if ( isset( $_POST['featured_reference_checkbox'] ) ) {
		update_post_meta( $post_id, 'featured_reference_checkbox', 'yes' );
	} else {
		update_post_meta( $post_id, 'featured_reference_checkbox', '' );
	}
}
add_action( 'save_post', 'wayako_featured_reference_checkbox_save' );














/**
 * Add the custom columns to the reference post type.
 *
 * @param [type] $columns
 * @return void
 */
function wayako_set_custom_edit_reference_columns( $columns ) {

	$columns['featured_reference'] = __( 'Mise en avant', 'wayako' );

	return $columns;
}
add_filter( 'manage_reference_posts_columns', 'wayako_set_custom_edit_reference_columns' );

/**
 * Add the data to the custom columns for the reference post type.
 *
 * @param [type] $column
 * @param [type] $post_id
 * @return void
 */
function wayako_custom_reference_column( $column, $post_id ) {

	if ( 'featured_reference' == $column ) {

		$featured_reference_checkbox_value = get_post_meta( $post_id, 'featured_reference_checkbox', true );

		if ( $featured_reference_checkbox_value ) {
			echo esc_html__( 'Oui', 'wayako' );
		}
	}
}
add_action( 'manage_reference_posts_custom_column', 'wayako_custom_reference_column', 10, 2 );




/**
 * This callback is called for each reference in the loop.
 *
 * @param [type] $post
 * @return void
 */
function wayako_reference_render_callback( $post ) {

	get_template_part( 'loop-templates/content', 'reference' );
}


/**
 * This callback is called when no results match selected facets.
 *
 * @return void
 */
function wayako_reference_noresults_callback() {

	get_template_part( 'loop-templates/content', 'none' );
}
