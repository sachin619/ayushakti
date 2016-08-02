<?php
function diseasesCategory() {
    // create a new taxonomy

    $labels = ['name' => _x('Type', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Type', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Type', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Type', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Type', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Type', 'your-plugin-textdomain'),
        'new_item' => __('New Type', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Type', 'your-plugin-textdomain'),
        'view_item' => __('View Type', 'your-plugin-textdomain'),
        'all_items' => __('All Types', 'your-plugin-textdomain'),
        'search_items' => __('Search Type', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Type:', 'your-plugin-textdomain'),
        'not_found' => __('No type found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No type found in Trash.', 'your-plugin-textdomain')
    ];

    register_taxonomy(
            'diseasesCategory', 'diseases', array(
        'labels' => $labels,
        'rewrite' => array('slug' => 'diseasesCategory'),
        'hierarchical' => true
            )
    );
}

add_action('init', 'diseasesCategory');

function herbalCategory() {
    // create a new taxonomy

    $labels = ['name' => _x('Type', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Type', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Type', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Type', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Type', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Type', 'your-plugin-textdomain'),
        'new_item' => __('New Type', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Type', 'your-plugin-textdomain'),
        'view_item' => __('View Type', 'your-plugin-textdomain'),
        'all_items' => __('All Types', 'your-plugin-textdomain'),
        'search_items' => __('Search Type', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Type:', 'your-plugin-textdomain'),
        'not_found' => __('No type found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No type found in Trash.', 'your-plugin-textdomain')
    ];

    register_taxonomy(
            'herbalCategory', 'herbalsupplements', array(
        'labels' => $labels,
        'rewrite' => array('slug' => 'herbalCategory'),
        'hierarchical' => true
            )
    );
}

add_action('init', 'herbalCategory');

function therapyCategory() {
    // create a new taxonomy

    $labels = ['name' => _x('Type', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Type', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Type', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Type', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Type', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Type', 'your-plugin-textdomain'),
        'new_item' => __('New Type', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Type', 'your-plugin-textdomain'),
        'view_item' => __('View Type', 'your-plugin-textdomain'),
        'all_items' => __('All Types', 'your-plugin-textdomain'),
        'search_items' => __('Search Type', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Type:', 'your-plugin-textdomain'),
        'not_found' => __('No type found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No type found in Trash.', 'your-plugin-textdomain')
    ];

    register_taxonomy(
            'therapyCategory', 'therapy', array(
        'labels' => $labels,
        'rewrite' => array('slug' => 'therapyCategory'),
        'hierarchical' => true
            )
    );
}

add_action('init', 'therapyCategory');


function pulseCategory() {
    // create a new taxonomy

    $labels = ['name' => _x('Type', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Type', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Type', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Type', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Type', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Type', 'your-plugin-textdomain'),
        'new_item' => __('New Type', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Type', 'your-plugin-textdomain'),
        'view_item' => __('View Type', 'your-plugin-textdomain'),
        'all_items' => __('All Types', 'your-plugin-textdomain'),
        'search_items' => __('Search Type', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Type:', 'your-plugin-textdomain'),
        'not_found' => __('No type found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No type found in Trash.', 'your-plugin-textdomain')
    ];

    register_taxonomy(
            'pulseCategory', 'pulses', array(
        'labels' => $labels,
        'rewrite' => array('slug' => 'pulseCategory'),
        'hierarchical' => true
            )
    );
}

add_action('init', 'pulseCategory');