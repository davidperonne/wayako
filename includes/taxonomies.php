<?php




// Add Custom Category
function portfolio_category() {
	register_taxonomy(
		'project-cat',
		'portfolio',
		array(
			'label' => __( 'Catégories' ),
			'rewrite' => array( 'slug' => 'portfolio-cat' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'portfolio_category' );

