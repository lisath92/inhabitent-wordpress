<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register 
function inhabitent_register_product_cpt() {

  $labels = array(
    'name'                  => 'Products',
    'singular_name'         => 'Product',
    'menu_name'             => 'Products',
    'name_admin_bar'        => 'Product',
    'archives'              => 'Products Archives',
    'parent_item_colon'     => 'Parent Product',
    'all_items'             => 'All Custom Post TypeProducts',
    'add_new_item'          => 'Add New Product',
    'add_new'               => 'Add New',
    'new_item'              => 'New Product',
    'edit_item'             => 'Edit Product',
    'update_item'           => 'Update Product',
    'view_item'             => 'View Product',
    'search_items'          => 'Search Product',
    'not_found'             => 'Not found',
    'not_found_in_trash'    => 'Not found in Trash',
    'featured_image'        => 'Product Image',
    'set_featured_image'    => 'Set product image',
    'remove_featured_image' => 'Remove product image',
    'use_featured_image'    => 'Use as featured image',
    'insert_into_item'      => 'Insert into Product',
    'uploaded_to_this_item' => 'Uploaded to this product',
    'items_list'            => 'products list',
    'items_list_navigation' => 'Products list navigation',
    'filter_items_list'     => 'Filter products list',
  );
  $args = array(
    'label'                 => 'Product',
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-cart',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => 'products',
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
  );
  register_post_type( 'product', $args );

}
add_action( 'init', 'inhabitent_register_product_cpt', 0 );

// Register Custom Post Type
function inhabitent_register_adventure_cpt() {

    $labels = array(
        'name'                  => 'Adventures',
        'singular_name'         => 'Adventure',
        'menu_name'             => 'Adventure',
        'name_admin_bar'        => 'Adventure',
        'archives'              => 'Adventure Archives',
        'parent_item_colon'     => 'Parent Adventure',
        'all_items'             => 'All Adventures',
        'add_new_item'          => 'Add New Adventure',
        'add_new'               => 'Add New',
        'new_item'              => 'New Adventure',
        'edit_item'             => 'Edit Adventure',
        'update_item'           => 'Update Adventure',
        'view_item'             => 'View Adventure',
        'search_items'          => 'Search Adventure',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into adventure',
        'uploaded_to_this_item' => 'Uploaded to this adventure',
        'items_list'            => 'Adventures list',
        'items_list_navigation' => 'Adventures list navigation',
        'filter_items_list'     => 'Filter adventures list',
    );
    $args = array(
        'label'                 => 'Adventure',
        'description'           => 'Latest adventure posts',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-location',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'adventure', $args );

}
add_action( 'init', 'inhabitent_register_adventure_cpt', 0 );