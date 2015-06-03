<?php

/***************************************
*************** THEME SETUP ************
****************************************/
function themeSetup() {
	// Add Featured Image Support 
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 150, 150, true); 
	add_image_size('medium-thumbnail', 230, 230, true);
	add_image_size('large-thumbnail', 400, 400, true);

	// Add Post Format Support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));

}

add_action('after_setup_theme', 'themeSetup');

// Add Widget Locations
function widgetsInit() {
	register_sidebar( array(
		'name' => 'Erbjudande',
		'id' => 'erbjudande_area'
		
	));

	register_sidebar( array(
		'name' => 'Nyheter',
		'id' => 'nyheter_area'
		
	));

	register_sidebar( array(
		'name' => 'Rea',
		'id' => 'rea_area'
		
	));
}
add_action('widgets_init', 'widgetsInit');

// Creates Projects Custom Post Type
require (get_template_directory() . '/cpt_products.php');

// Load Scripts
function loadScripts() {
	wp_enqueue_script("jquery");
	wp_enqueue_script( 'epsilon_script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
}

/* AJAX Actions */
function getSingleProduct() {
	get_template_part('single_products');
	die();
}

add_action( 'wp_enqueue_scripts', 'loadScripts' );

add_action('wp_ajax_load_single_product', 'getSingleProduct');

add_action('wp_ajax_nopriv_load_single_product', 'getSingleProduct'); //for users that are not logged in.

/* We might need this.. Let it be */
/*remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );*/