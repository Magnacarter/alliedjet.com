<?php
/**
 * Custom Post Type: Portfolio
 */
function lbp_portfolio() {
	$labels = array(
		'name'               => 'Portfolio',
		'singular_name'      => 'Portfolio',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Portfolio',
		'edit_item'          => 'Edit Portfolio',
		'new_item'           => 'New Portfolio',
		'all_items'          => 'All Portfolio',
		'view_item'          => 'View Portfolio',
		'search_items'       => 'Search Portfolio',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Portfolio',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

register_post_type( 'Portfolio', $args );
}
add_action( 'init', 'lbp_portfolio' );