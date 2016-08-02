<?php

function diseases() {
    $labels = array(
        'name' => _x('Diseases', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Disease', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Diseases', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Disease', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Disease', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Disease', 'your-plugin-textdomain'),
        'new_item' => __('New Disease', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Disease', 'your-plugin-textdomain'),
        'view_item' => __('View Disease', 'your-plugin-textdomain'),
        'all_items' => __('All Diseases', 'your-plugin-textdomain'),
        'search_items' => __('Search Diseases', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Diseases:', 'your-plugin-textdomain'),
        'not_found' => __('No diseases found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No diseases found in Trash.', 'your-plugin-textdomain')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array('category'),
        'rewrite' => array('slug' => 'diseases'),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'diseases'),
        'query_var' => true,
        'menu_icon' => 'dashicons-smiley',
        'supports' => array(
            'title',
            'thumbnail',
            'author')
    );
    register_post_type('diseases', $args);
}

add_action('init', 'diseases');

function herbalSupplements() {
    $labels = array(
        'name' => _x('Herbal Supplements', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Herbal Supplement', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Herbal Supplements', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Herbal Supplement', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Herbal Supplement', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Herbal Supplement', 'your-plugin-textdomain'),
        'new_item' => __('New Herbal Supplement', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Herbal Supplement', 'your-plugin-textdomain'),
        'view_item' => __('View Herbal Supplement', 'your-plugin-textdomain'),
        'all_items' => __('All Herbal Supplements', 'your-plugin-textdomain'),
        'search_items' => __('Search Herbal Supplements', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Herbal Supplements:', 'your-plugin-textdomain'),
        'not_found' => __('No Herbal Supplements found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Herbal Supplements found in Trash.', 'your-plugin-textdomain')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array('category'),
        'rewrite' => array('slug' => 'herbal-supplement'),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'herbal-supplement'),
        'query_var' => true,
        'menu_icon' => 'dashicons-smiley',
        'supports' => array(
            'title',
            'thumbnail',
            'author',
            'editor'
            )
    );
    register_post_type('herbalSupplements', $args);
}

add_action('init', 'herbalSupplements');


function therapy() {
    $labels = array(
        'name' => _x('Therapy', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Therapy', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Therapy', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Therapy', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Therapy', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Therapy', 'your-plugin-textdomain'),
        'new_item' => __('New Therapy', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Therapy', 'your-plugin-textdomain'),
        'view_item' => __('View Therapy', 'your-plugin-textdomain'),
        'all_items' => __('All Therapy', 'your-plugin-textdomain'),
        'search_items' => __('Search Therapy', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Therapy:', 'your-plugin-textdomain'),
        'not_found' => __('No Therapy found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Therapy found in Trash.', 'your-plugin-textdomain')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array('category'),
        'rewrite' => array('slug' => 'therapy'),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'therapy'),
        'query_var' => true,
        'menu_icon' => 'dashicons-smiley',
        'supports' => array(
            'title',
            'thumbnail',
            'author',
            'editor'
            )
    );
    register_post_type('therapy', $args);
}

add_action('init', 'therapy');

function pulses() {
    $labels = array(
        'name' => _x('Pulses', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Pulses', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Pulses', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Pulses', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Pulses', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Pulses', 'your-plugin-textdomain'),
        'new_item' => __('New Pulse', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Pulse', 'your-plugin-textdomain'),
        'view_item' => __('View Pulse', 'your-plugin-textdomain'),
        'all_items' => __('All Pulse', 'your-plugin-textdomain'),
        'search_items' => __('Search Pulses', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Pulse:', 'your-plugin-textdomain'),
        'not_found' => __('No Pulses found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Pulses found in Trash.', 'your-plugin-textdomain')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array('category'),
        'rewrite' => array('slug' => 'pulses'),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'pulses'),
        'query_var' => true,
        'menu_icon' => 'dashicons-smiley',
        'supports' => array(
            'title',
            'thumbnail',
            'author',
            'editor'
            )
    );
    register_post_type('pulses', $args);
}

add_action('init', 'pulses');