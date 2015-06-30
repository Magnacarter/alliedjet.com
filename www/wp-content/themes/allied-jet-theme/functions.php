<?php
//Register Custom Post Types
require_once STYLESHEETPATH . '/includes/post-types.php';

//Register Advanced Custom Fields
require_once STYLESHEETPATH . '/includes/acf.php';

//Register Barebones Hooks
require_once STYLESHEETPATH . '/includes/barebones-hooks.php';

/**
 * Load scripts and styles for the theme
 *
 * @action wp_enqueue_scripts
 *
 * @return void
 */
function barebones_enqueue_scripts() {
	// Theme CSS
	wp_enqueue_style( 'barebones-grid', get_stylesheet_directory_uri() . '/css/grid.css' );
	wp_enqueue_style( 'barebones-main', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'barebones-social', get_stylesheet_directory_uri() . '/ss_icon_fonts/ss-social.css' );
	wp_enqueue_style( 'barebones-flexslider' , get_template_directory_uri() . '/css/flexslider.css');
	wp_enqueue_style( 'barebones-push-menu' , get_template_directory_uri() . '/css/jPushMenu.css');

	// Theme JS
	wp_enqueue_script( 'barebones-theme-js', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'barebones-froogaloop' , get_template_directory_uri() . '/js/froogaloop.min.js', array('jquery'), '' , true);
	wp_enqueue_script( 'barebones-flexslider' , get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '' , true);
	wp_enqueue_script( 'barebones-mousewheel' , get_template_directory_uri() . '/js/jquery.mousewheel.js', array('jquery'), '' , true);
	wp_enqueue_script( 'barebones-easing' , get_template_directory_uri() . '/js/jquery.easing.js', array('jquery'), '' , true);
	wp_enqueue_script( 'barebones-fittext' , get_template_directory_uri() . '/js/jquery.fittext.js', array('jquery'), '' , true);
	wp_enqueue_script( 'barebones-pushmenu' , get_template_directory_uri() . '/js/jPushMenu.js', array('jquery'), '' , true);
}
add_action( 'wp_enqueue_scripts', 'barebones_enqueue_scripts' );

/**
 * Add an acf options page
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Add Jetpack share buttons above post
remove_filter( 'the_content', 'sharing_display', 19 );
remove_filter( 'the_excerpt', 'sharing_display', 19 );

/**
 * Add Jetpack Sharing buttons above the content
 *
 * @add_filter the_content
 * @add_filter the_excerpt
 *
 * @return void
 */
function barebones_share_buttons_above_post( $content = '' ) {
	if ( function_exists( 'sharing_display' ) ) {
		return sharing_display() . $content;
	} else {
		return $content;
	}
}
add_filter( 'the_content', 'barebones_share_buttons_above_post', 19 );
add_filter( 'the_excerpt', 'barebones_share_buttons_above_post', 19 );

/**
 * Add post thumbnail support
 */
add_theme_support( 'post-thumbnails' );

/**
 * Set up our theme features and register sidebars
 *
 * @action after_setup_theme
 *
 * @return void
 */
function barebones_after_setup_theme() {
	// Custom menus
	add_theme_support( 'menus' );

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
add_action( 'after_setup_theme', 'barebones_after_setup_theme' );
