<?php
// Register Custom Post Types
require_once STYLESHEETPATH . '/includes/post-types.php';

// Register Advanced Custom Fields
require_once STYLESHEETPATH . '/includes/acf.php';

/**
 * Load scripts and styles for the theme
 *
 * @action wp_enqueue_scripts
 *
 * @return void
 */
function lbp_enqueue_scripts() {
	// Theme CSS
	wp_enqueue_style( 'grid', get_stylesheet_directory_uri() . '/css/grid.css' );
	wp_enqueue_style( 'lbp-main', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'lbp-social', get_stylesheet_directory_uri() . '/ss_icon_fonts/ss-social.css' );
	wp_register_style( 'flexslider' , get_template_directory_uri() . '/css/flexslider.css');


	// Theme JS
	wp_enqueue_script( 'flexslider' , get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '' , true);
	wp_enqueue_script( 'lbp-theme-js', get_stylesheet_directory_uri() . '/js/theme.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'fittext' , get_template_directory_uri() . '/js/jquery.fittext.js"', array('jquery'), '' , true);
}
add_action( 'wp_enqueue_scripts', 'lbp_enqueue_scripts' );

/**
 * Add an acf options page
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/**
 * Set up our theme features and register sidebars
 *
 * @action after_setup_theme
 *
 * @return void
 */
function lbp_after_setup_theme() {
	// Custom menus
	add_theme_support( 'menus' );

	// Sidebar areas
	register_sidebar(
		array(
			'name'          => 'Sidebar Widgets',
			'id'            => 'lbp_sidebar',
			'description'   => 'Displays in the right hand rail',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'LBP Widgets',
			'id'            => 'lbp_homepage_widget',
			'description'   => 'Displays in the body of the homepage',
			'before_widget' => '<div id="%1$s" class="widget %2$s grid-20 tablet-grid-20 mobile-grid-50">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'LBP Project Widgets',
			'id'            => 'lbp_project_widget',
			'description'   => 'Displays in the body of the Project Page',
			'before_widget' => '<div id="%1$s" class="single_pro_widget %2$s grid-33 tablet-grid-100 mobile-grid-50">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'after_setup_theme', 'lbp_after_setup_theme' );





