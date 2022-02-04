<?php

/**
 * Register taxonomy secteur d'activité.
 */
function create_secteur_activite_tax() {

	$labels = array(
		'name'              => _x( 'Secteurs d\'activité', 'taxonomy general name', 'wayako' ),
		'singular_name'     => _x( 'Secteur d\'activité', 'taxonomy singular name', 'wayako' ),
		'search_items'      => __( 'Search secteurs d\'activité', 'wayako' ),
		'all_items'         => __( 'All secteurs d\'activité', 'wayako' ),
		'parent_item'       => __( 'Parent theme', 'wayako' ),
		'parent_item_colon' => __( 'Parent secteur d\'activité:', 'wayako' ),
		'edit_item'         => __( 'Edit secteur d\'activité', 'wayako' ),
		'update_item'       => __( 'Update secteur d\'activité', 'wayako' ),
		'add_new_item'      => __( 'Add new secteur d\'activité', 'wayako' ),
		'new_item_name'     => __( 'New secteur  d\'activité name', 'wayako' ),
		'menu_name'         => __( 'Secteurs d\'activité', 'wayako' ),
	);
	$rewrite = array(
		'slug' => 'secteur-activite',
		'with_front' => false,
		'hierarchical' => false,
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Secteur', 'wayako' ),
		'hierarchical' => true,
		'public' => true,
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
	register_taxonomy( 'secteur_activite', array( 'reference' ), $args );

}
add_action( 'init', 'create_secteur_activite_tax' );

/**
 * Register taxonomy type de réalisation.
 */
function create_type_realisation_tax() {

	$labels = array(
		'name'              => _x( 'Types de réalisation', 'taxonomy general name', 'wayako' ),
		'singular_name'     => _x( 'Type de réalisation', 'taxonomy singular name', 'wayako' ),
		'search_items'      => __( 'Search type de réalisation', 'wayako' ),
		'all_items'         => __( 'All type de réalisation', 'wayako' ),
		'parent_item'       => __( 'Parent theme', 'wayako' ),
		'parent_item_colon' => __( 'Parent type de réalisation:', 'wayako' ),
		'edit_item'         => __( 'Edit type de réalisation', 'wayako' ),
		'update_item'       => __( 'Update type de réalisation', 'wayako' ),
		'add_new_item'      => __( 'Add new type de réalisation', 'wayako' ),
		'new_item_name'     => __( 'New type de réalisation name', 'wayako' ),
		'menu_name'         => __( 'Types de réalisation', 'wayako' ),
	);
	$rewrite = array(
		'slug' => 'type-realisation',
		'with_front' => false,
		'hierarchical' => false,
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Types de réalisation', 'wayako' ),
		'hierarchical' => true,
		'public' => true,
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
	register_taxonomy( 'type_realisation', array( 'reference' ), $args );

}
add_action( 'init', 'create_type_realisation_tax' );
