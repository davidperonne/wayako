<?php




 
function custom_post_type() { 
	$labels = array(
		'name'                => _x( 'Portfolio', 'Post Type General Name', 'oceanwp-child' ),
		'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'oceanwp-child' ),
		'menu_name'           => __( 'Portfolio', 'oceanwp-child' ),
		'all_items'           => __( 'Tous les projets', 'oceanwp-child' ),
		'view_item'           => __( 'Voir le projet', 'oceanwp-child' ),
		'add_new_item'        => __( 'Ajouter un Nouveau projet', 'oceanwp-child' ),
		'add_new'             => __( 'Ajouter', 'oceanwp-child' ),
		'edit_item'           => __( 'Éditer un projet', 'oceanwp-child' ),
		'update_item'         => __( 'Mettre à jour un projet', 'oceanwp-child' ),
		'search_items'        => __( 'Rechercher un projet', 'oceanwp-child' ),
		'not_found'           => __( 'Aucun projet', 'oceanwp-child' ),
		'not_found_in_trash'  => __( 'Aucun projet dans la corbeille', 'oceanwp-child' ),
	);     
	$rewrite = array(
		'slug'                  => 'portfolio',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => false,
	);     
	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-gallery',
		'can_export'          => true, 
		'has_archive'         => false, 
		'exclude_from_search' => false, 
		'publicly_queryable' => true, 
		'rewrite'               => $rewrite,
		'capability_type'    => 'post',
		); 
	register_post_type( 'portfolio', $args );
}  
add_action( 'init', 'custom_post_type', 0 );
