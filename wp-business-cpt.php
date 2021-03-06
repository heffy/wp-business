<?php

add_action( 'init', 'business_post_type', 0 );

function business_post_type() {

	$labels = array(
		'name'                => __( 'Business Posts', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => __( 'Business Post', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Business Post', 'text_domain' ),
		'name_admin_bar'      => __( 'Business Post', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Business:', 'text_domain' ),
		'all_items'           => __( 'All Business', 'text_domain' ),
		'add_new_item'        => __( 'Add New Business', 'text_domain' ),
		'add_new'             => __( 'Add New Business' ),
		'new_item'            => __( 'New Business'),
		'edit_item'           => __( 'Edit Business' ),
		'update_item'         => __( 'Update Business' ),
		'view_item'           => __( 'View Business' ),
		'search_items'        => __( 'Search Businesses' ),
		'not_found'           => __( 'No Business found'),
		'not_found_in_trash'  => __( 'Not Business in Trash'),
	);
	$args = array(
		'label'               => __( 'Business', 'text_domain' ),
		'singular_label' => __('Business'),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-businessman',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',

		'rewrite'=>array(
			'slug' => 'business',
			'with_front'=> false,
			'pages' => true,
			'feeds' => true,
			),

		'supports'=> array(
			'title',
			'editor',
			'thumbnail'
			)
		);
	register_post_type( 'business', $args );

	register_taxonomy("business-type", array("business"),
		array(
			  "hierarchical" => true, 
			  "label" => "Shopping Categories", 
			  "singular_label" => "Shopping Category", 
			  "rewrite" => true, 
			  "slug" => 'shopping'
			  )
		);
}

function purely_penzance_rewrite() {
	global $wp_rewrite;
	$wp_rewrite->add_permastruct('typename', 'typename/ ▶ %year%/%postname%/', true, 1);
	add_rewrite_rule('typename/([0-9]{4})/(.+)/?$', 'index.php?typename=$matches[2]', 'top');
	$wp_rewrite->flush_rules();
}
add_action('init', 'purely_penzance_rewrite');

?>
