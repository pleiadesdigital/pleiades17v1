<?php

/*====================================================
		pleiades17 Custom Post Types
====================================================*/
function pleiades17_custom_post_types() {
	// Servicios Post Type
	$labels = array(
		'name'                => 'Servicios',
		'singular_name'       => 'Servicio',
		'menu_name'           => 'Servicios',
		'name_admin_bar'			=> 'Servicio',
		'add_new'             => 'Add New',
		'add_new_item'				=> 'Add New Servicio',
		'new_item'            => 'New Servicio',
		'edit_item'           => 'Edit Servicio',	
		'view_item'           => 'View Servicio',
		'all_items'						=> 'All Servicios',
		'search_items'        => 'Search Servicios',
		'parent_item_colon'   => 'Parent Servicios:',
		'not_found'           => 'No Servicio Found.',
		'not_found_in_trash'  => 'No Servicios Found In Trash.',
	);
	$args = array(
		'labels'              => $labels,
		'public'							=> true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,	
		'menu_icon'           => 'dashicons-id-alt',
		'query_var'           => true,
		'rewrite'             => array('slug' => 'servicios'),
		'capability_type'     => 'post', //page
		'has_archive'         => false, //false
		'hierarchical'        => true, //true
		'supports'            => array('title', 'editor', 'thumbnail','excerpt')
	);
	register_post_type('servicios', $args);
	
	// Portfolio Post Type
	$labels = array(
		'name' 							=> 'Portfolio',
		'singular_name' 		=> 'Portfolio',
		'add_new'						=> 'Add Portfolio Item',
		'all_items'					=> 'All Items',
		'add_new_item'			=> 'Add Item',
		'edit_item'					=> 'Edit Item',
		'new_item'					=> 'New Item',
		'view_item'					=> 'View Item',
		'search_item'				=> 'Search Portfolio',
		'not_found'					=> 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon'	=> 'Parent Item'
	);
	$args = array(
		'labels'							=> $labels,
		'public'							=> true,
		'has_archive'					=> true,
		'publicly_queryable' 	=> true,
		'query_var'						=> true,
		'rewrite'							=> true,
		'capability_type'			=> 'post',
		'hierarchical'				=> false,
		'supports'							=> array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
			'custom-fields',
		),
		'taxonomies' => array(
			'category',
			'post_tag',
		),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('portfolio', $args);
} //pleiades17_custom_post_types()
add_action('init', 'pleiades17_custom_post_types');