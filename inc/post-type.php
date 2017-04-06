<?php

function WCT_add_post_type(){
    // register post_types
    $labels = array(
        'name'               => __('Table entries', 'kcm'),
        'singular_name'      => __('Table entry', 'kcm'),
        'add_new'            => __('Add table entry', 'kcm'),
        'add_new_item'       => __('Add new table entry', 'kcm'),
        'not_found'          => __('No entries found.', 'kcm'),
    );

    // Create an array for the $args
    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'query_var'          => true,
        'rewrite'            => true,
        'menu_icon'          => 'dashicons-id-alt',
        'hierarchical'       => false,
        'menu_position'      => null,
        'has_archive'        => true,
        'supports'           => array( 'title' )
    );

    register_post_type( 'entry', $args );
}

add_action('init', 'WCT_add_post_type');