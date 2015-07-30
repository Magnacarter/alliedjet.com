<?php
/**
 * Custom Post Type: Aircrafts
 */
function aji_aircraft() {
	$labels = array(
		'name'               => 'Aircrafts',
		'singular_name'      => 'Aircraft',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New aircrafts',
		'edit_item'          => 'Edit aircrafts',
		'new_item'           => 'New aircrafts',
		'all_items'          => 'All aircrafts',
		'view_item'          => 'View aircrafts',
		'search_items'       => 'Search aircrafts',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Aircrafts',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'aircrafts' ),
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

register_post_type( 'Aircrafts', $args );
}
add_action( 'init', 'aji_aircraft' );

/**
 * Custom Post Type: Employees
 */
function aji_employees() {
	$labels = array(
		'name'               => 'Employees',
		'singular_name'      => 'Employee',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New employees',
		'edit_item'          => 'Edit employees',
		'new_item'           => 'New employees',
		'all_items'          => 'All employees',
		'view_item'          => 'View employees',
		'search_items'       => 'Search employees',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Employees',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'employees' ),
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

register_post_type( 'employees', $args );
}
add_action( 'init', 'aji_employees' );

/**
 * Custom Post Type: Services
 */
function aji_services() {
	$labels = array(
		'name'               => 'Service',
		'singular_name'      => 'service',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New service',
		'edit_item'          => 'Edit service',
		'new_item'           => 'New service',
		'all_items'          => 'All service',
		'view_item'          => 'View service',
		'search_items'       => 'Search service',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Service',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

register_post_type( 'services', $args );
}
add_action( 'init', 'aji_services' );