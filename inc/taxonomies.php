<?php
/**
 * Taxonomies
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Register taxonomy secteur d'activité.
 */
function create_portfolio_tax() {

	$labels = array(
		'name'              => _x( 'Portfolio categories', 'taxonomy general name', 'wayako' ),
		'singular_name'     => _x( 'Portfolio categorie', 'taxonomy singular name', 'wayako' ),
		'search_items'      => __( 'Search book categories', 'wayako' ),
		'all_items'         => __( 'All book categories', 'wayako' ),
		'parent_item'       => __( 'Parent theme', 'wayako' ),
		'parent_item_colon' => __( 'Parent Categorie:', 'wayako' ),
		'edit_item'         => __( 'Edit Categorie', 'wayako' ),
		'update_item'       => __( 'Update Categorie', 'wayako' ),
		'add_new_item'      => __( 'Add new Categorie', 'wayako' ),
		'new_item_name'     => __( 'New category name', 'wayako' ),
		'menu_name'         => __( 'Catégorie', 'wayako' ),
	);
	$rewrite = array(
		'slug'         => 'book-cat',
		'with_front'   => false,
		'hierarchical' => false,
	);
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Portfolio categories', 'wayako' ),
		'hierarchical'       => true,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,		
		'rewrite' => $rewrite,
	);
	register_taxonomy( 'book_cat', array( 'portfolio' ), $args );

}
//add_action( 'init', 'create_portfolio_tax' );
