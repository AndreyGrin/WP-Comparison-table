<?php
add_action( 'cmb2_init', 'TBZ_entry_meta' );

function TBZ_entry_meta() {
    $prefix = 'TBZ_';

    $cmb_entry = new_cmb2_box( array(
        'id'           => $prefix . 'metabox',
        'title'        => esc_html__( 'Entry details', 'cmb2' ),
        'object_types' => array( 'entry' ),
    ) );

    $cmb_entry->add_field( array(
        'name'   => esc_html__( 'Logo', 'cmb2' ),
        'id'     => $prefix . 'logo',
        'type'   => 'file',
        'column' => true,
    ) );

    $cmb_entry->add_field( array(
        'name'   => esc_html__( 'Bonus', 'cmb2' ),
        'id'     => $prefix . 'bonus',
        'type'   => 'text_medium',
        'column' => true,
    ) );

    $cmb_entry->add_field( array(
        'name'   => esc_html__( 'Spins', 'cmb2' ),
        'id'     => $prefix . 'spins',
        'type'   => 'text_medium',
        'column' => true,
    ) );

    $cmb_entry->add_field( array(
        'name'       => esc_html__( 'Advantages', 'cmb2' ),
        'id'         => $prefix . 'advantages',
        'type'       => 'text_medium',
        'column'     => true,
        'repeatable' => true,
    ) );

    $cmb_entry->add_field( array(
        'name'             => esc_html__( 'Rating', 'cmb2' ),
        'id'               => $prefix . 'rating',
        'type'             => 'select',
        'column'           => true,
        'show_option_none' => false,
        'default'          => '0',
        'options'          => array(
            '0' => '0',
            '1' => '1 stars',
            '2' => '2 stars',
            '3' => '3 stars',
            '4' => '4 stars',
            '5' => '5 stars',
        ),
    ) );

    $cmb_entry->add_field( array(
        'name'      => esc_html__( 'Link to details', 'cmb2' ),
        'id'        => $prefix . 'link',
        'type'      => 'text_url',
        'column'    => true,
        'protocols' => array( 'http', 'https' ),
    ) );

    $cmb_entry->add_field( array(
        'name'      => esc_html__( 'Date launch', 'cmb2' ),
        'id'        => $prefix . 'launch',
        'type'      => 'text_date',
        'date_format' => 'Y-m-d',
        'column'    => true,
    ) );

}