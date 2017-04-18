<?php

function TBZ_add_post_type(){
    // register post_types
    $labels = array(
        'name'               => __('TableZino', 'kcm'),
        'singular_name'      => __('Table', 'kcm'),
        'add_new'            => __('Add table', 'kcm'),
        'add_new_item'       => __('Add new table', 'kcm'),
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

    register_post_type( 'tablezino', $args );
}

add_action('init', 'TBZ_add_post_type');