<?php
//Register Custom Post Types
require_once STYLESHEETPATH . '/includes/post-types.php';

//Register Advanced Custom Fields
require_once STYLESHEETPATH . '/includes/acf.php';

/**
 * Load scripts and styles for the theme
 *
 * @action wp_enqueue_scripts
 *
 * @return void
 */
function aji_enqueue_scripts() {
	// Theme CSS
	wp_enqueue_style( 'aji-grid', get_stylesheet_directory_uri() . '/css/grid.css' );
	wp_enqueue_style( 'aji-main', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'aji-social', get_stylesheet_directory_uri() . '/ss_icon_fonts/ss-social.css' );
	wp_enqueue_style( 'aji-flexslider' , get_template_directory_uri() . '/css/flexslider.css');
	wp_enqueue_style( 'aji-push-menu' , get_template_directory_uri() . '/css/jPushMenu.css');

	// Theme JS
	wp_enqueue_script( 'aji-theme-js', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'aji-flexslider' , get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '' , true);
	wp_enqueue_script( 'aji-mousewheel' , get_template_directory_uri() . '/js/jquery.mousewheel.js', array('jquery'), '' , true);
	wp_enqueue_script( 'aji-easing' , get_template_directory_uri() . '/js/jquery.easing.js', array('jquery'), '' , true);
	wp_enqueue_script( 'aji-pushmenu' , get_template_directory_uri() . '/js/jPushMenu.js', array('jquery'), '' , true);
}
add_action( 'wp_enqueue_scripts', 'aji_enqueue_scripts' );

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
function ajs_after_setup_theme() {
	// Custom menus
	add_theme_support( 'menus' );

	// Post thumbnail support
	add_theme_support( 'post-thumbnails' );

	// Sidebar areas
	register_sidebar(
		array(
			'name'          => 'Sidebar Widgets',
			'id'            => 'barebones_sidebar',
			'description'   => 'Displays in the right hand rail',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'after_setup_theme', 'ajs_after_setup_theme' );
