<?php
/**
 * Custom post types
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Register Reference Custom Post Type.
 */
function create_reference_cpt() {

	$labels = array(
		'name'                  => _x( 'Référence', 'Post Type General Name', 'wayako' ),
		'singular_name'         => _x( 'Référence', 'Post Type Singular Name', 'wayako' ),
		'menu_name'             => _x( 'Références', 'Admin Menu text', 'wayako' ),
		'name_admin_bar'        => _x( 'Référence', 'Add New on Toolbar', 'wayako' ),
		'archives'              => __( 'Archives', 'wayako' ),
		'attributes'            => __( 'Attributs', 'wayako' ),
		'parent_item_colon'     => __( 'Parent:', 'wayako' ),
		'all_items'             => __( 'Toutes les références', 'wayako' ),
		'add_new_item'          => __( 'Ajouter un ...', 'wayako' ),
		'add_new'               => __( 'Ajouter', 'wayako' ),
		'new_item'              => __( 'New ...', 'wayako' ),
		'edit_item'             => __( 'Editer', 'wayako' ),
		'update_item'           => __( 'Mettre à jour', 'wayako' ),
		'view_item'             => __( 'Voir', 'wayako' ),
		'view_items'            => __( 'Voir tous les ...', 'wayako' ),
		'search_items'          => __( 'Recherche merchant', 'wayako' ),
		'not_found'             => __( 'Non trouvé', 'wayako' ),
		'not_found_in_trash'    => __( 'Non trouvé en corbeille', 'wayako' ),
		'featured_image'        => __( 'Image illustration', 'wayako' ),
		'set_featured_image'    => __( 'Ajouter image illustration', 'wayako' ),
		'remove_featured_image' => __( 'Retirer image illustration', 'wayako' ),
		'use_featured_image'    => __( 'Utiliser image illustration', 'wayako' ),
		'insert_into_item'      => __( 'Ajouter dans cette fiche merchant', 'wayako' ),
		'uploaded_to_this_item' => __( 'Charger dans cette fiche merchant', 'wayako' ),
		'items_list'            => __( 'Liste des ...', 'wayako' ),
		'items_list_navigation' => __( '... list navigation', 'wayako' ),
		'filter_items_list'     => __( 'Filter ... list', 'wayako' ),
	);
	$rewrite = array(
		'slug' => 'reference',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label'               => __( 'Référence', 'wayako' ),
		'description'         => __( 'Référence', 'wayako' ),
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-admin-post',
		'supports'            => array(
			'title',
			'thumbnail',
			'author',
		),
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 30,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'show_in_rest'        => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'rewrite'             => $rewrite,
	);
	register_post_type( 'reference', $args );

}
add_action( 'init', 'create_reference_cpt', 0 );


/**
 * Register Team member Custom Post Type.
 */
function create_team_member_cpt() {

	$labels = array(
		'name'                  => _x( 'Equipe', 'Post Type General Name', 'wayako' ),
		'singular_name'         => _x( 'Equipe', 'Post Type Singular Name', 'wayako' ),
		'menu_name'             => _x( 'Equipe', 'Admin Menu text', 'wayako' ),
		'name_admin_bar'        => _x( 'Equipe', 'Add New on Toolbar', 'wayako' ),
		'archives'              => __( 'Archives', 'wayako' ),
		'attributes'            => __( 'Attributs', 'wayako' ),
		'parent_item_colon'     => __( 'Parent:', 'wayako' ),
		'all_items'             => __( 'Tous les membres', 'wayako' ),
		'add_new_item'          => __( 'Ajouter un membre', 'wayako' ),
		'add_new'               => __( 'Ajouter', 'wayako' ),
		'new_item'              => __( 'Nouveau membre', 'wayako' ),
		'edit_item'             => __( 'Editer', 'wayako' ),
		'update_item'           => __( 'Mettre à jour', 'wayako' ),
		'view_item'             => __( 'Voir', 'wayako' ),
		'view_items'            => __( 'Voir tous les ...', 'wayako' ),
		'search_items'          => __( 'Recherche merchant', 'wayako' ),
		'not_found'             => __( 'Non trouvé', 'wayako' ),
		'not_found_in_trash'    => __( 'Non trouvé en corbeille', 'wayako' ),
		'featured_image'        => __( 'Image illustration', 'wayako' ),
		'set_featured_image'    => __( 'Ajouter image illustration', 'wayako' ),
		'remove_featured_image' => __( 'Retirer image illustration', 'wayako' ),
		'use_featured_image'    => __( 'Utiliser image illustration', 'wayako' ),
		'insert_into_item'      => __( 'Ajouter dans cette fiche merchant', 'wayako' ),
		'uploaded_to_this_item' => __( 'Charger dans cette fiche merchant', 'wayako' ),
		'items_list'            => __( 'Liste des membres', 'wayako' ),
		'items_list_navigation' => __( '... list navigation', 'wayako' ),
		'filter_items_list'     => __( 'Filter ... list', 'wayako' ),
	);
	$rewrite = array(
		'slug' => 'team',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label'               => __( 'Membre', 'wayako' ),
		'description'         => __( 'Membre', 'wayako' ),
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-admin-post',
		'supports'            => array(
			'title',
			'author',
		),
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 30,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'show_in_rest'        => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'rewrite'             => $rewrite,
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'create_team_member_cpt', 0 );
