<?php 

//Create Products Custom Post Type
function custom_post_type_project() {
  $labels = array(
    'name'                  => __('Products', 'epsilon'),
    'singular_name'         => __('Product', 'epsilon'),
    'add_new'               => __('Add New', 'epsilon'),
    'add_new_item'          => __('Add Product', 'epsilon'),
    'edit_item'             => __('Edit Product', 'epsilon'),
    'new_item'              => __('New Product', 'epsilon'),
    'all_items'             => __('All Products', 'epsilon'),
    'view_items'            => __('Show Products', 'epsilon'),
    'search_items'          => __('Search Products', 'epsilon'),
    'not_found'             => __('Could not find any Products', 'epsilon'),
    'not_found_in_trash'    => __('Could not find any Products in Trash', 'epsilon'),
    'menu_name'             => __('Products', 'epsilon')
    );

  $args = array('labels'                => $labels,
                'description'           => __('Products', 'epsilon'),
                'show_ui'               => true, 
                'capability_type'       => 'post',
                'hierarchical'          => false,
                'public'                => true,
                'menu_position'         => 5,
                'menu_icon'             => 'dashicons-star-filled',
                'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
                'has_archive'           => true,
                'rewrite'               => array('slug' => 'products', 'with_front' => false),
                'show_in_nav_menus'     => true
                );

  register_post_type('products', $args);
}

add_action('init', 'custom_post_type_project');

// Add Product Categories
function taxonomies_products() {
    $labels = array(
        'name'              => __( 'Product Categories', 'epsilon' ),
        'singular_name'     => __( 'Product Category', 'epsilon' ), 
        'search_items'      => __( 'Search Product Categories', 'epsilon' ),
        'all_items'         => __( 'All Product Categories', 'epsilon' ),
        'parent_item'       => __( 'Parent Product Category', 'epsilon' ),
        'parent_item_colon' => __( 'Parent Product Category:', 'epsilon' ),
        'edit_item'         => __( 'Edit Product Category', 'epsilon' ), 
        'update_item'       => __( 'Update Product Category', 'epsilon' ),
        'add_new_item'      => __( 'Add New Product Category', 'epsilon' ),
        'new_item_name'     => __( 'New Product Category', 'epsilon' ),
        'menu_name'         => __( 'Product Categories', 'epsilon' ),
        );
        $args = array(
        'labels' => $labels,
        'hierarchical' => true
        );
  
    register_taxonomy( 'products_category', 'products', $args );
}
add_action( 'init', 'taxonomies_products', 0 );

?>