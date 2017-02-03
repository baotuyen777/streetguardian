<?php

add_action('init', 'product_register');

function product_register() {
    global $themename;
    $labels = array(
        'name' => __('Product', 'post type general name', $themename),
        'singular_name' => __('Product Item', 'post type singular name', $themename),
        'add_new' => __('Add New', 'Product', $themename),
        'add_new_item' => __('Add New Product', $themename),
        'edit_item' => __('Edit Product', $themename),
        'new_item' => __('New Product', $themename),
        'view_item' => __('View Product', $themename),
        'search_items' => __('Search Product', $themename),
        'not_found' => __('No Product have been added yet', $themename),
        'not_found_in_trash' => __('Nothing found in Product', $themename),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'rewrite' => false,
        'supports' => array('title', 'editor', 'thumbnail','excerpt'),
        'has_archive' => true,
    );

    register_post_type('product', $args);
}

add_action('init', 'create_product_taxonomies', 0);

function create_product_taxonomies() {
    register_taxonomy(
            'product_cat', 'product', array(
        'labels' => array(
            'name' => 'Product Categories',
            'add_new_item' => 'Add New Category',
            'new_item_name' => "New Type Category"
        ),
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,
        'sort' => 1,
            )
    );
}

add_action('init', 'firmware_register');

function firmware_register() {
    global $themename;
    $labels = array(
        'name' => __('Firmware', 'post type general name', $themename),
        'singular_name' => __('Firmware Item', 'post type singular name', $themename),
        'add_new' => __('Add New', 'Firmware', $themename),
        'add_new_item' => __('Add New Firmware', $themename),
        'edit_item' => __('Edit Firmware', $themename),
        'new_item' => __('New Firmware', $themename),
        'view_item' => __('View Firmware', $themename),
        'search_items' => __('Search Firmware', $themename),
        'not_found' => __('No Firmware have been added yet', $themename),
        'not_found_in_trash' => __('Nothing found in Firmware', $themename),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'rewrite' => false,
        'supports' => array('title', 'editor', 'thumbnail','excerpt'),
        'has_archive' => true,
    );

    register_post_type('firmware', $args);
}

//add_action('init', 'create_product_taxonomies', 0);

//function create_firmware_taxonomies() {
//    register_taxonomy(
//            'product_cat', 'product', array(
//        'labels' => array(
//            'name' => 'Product Categories',
//            'add_new_item' => 'Add New Category',
//            'new_item_name' => "New Type Category"
//        ),
//        'show_ui' => true,
//        'show_tagcloud' => true,
//        'show_admin_column' => true,
//        'hierarchical' => true,
//        'sort' => 1,
//            )
//    );
//}

