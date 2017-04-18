<?php

add_action( 'rest_api_init', function () {
    register_rest_route( 'TBZ/v1', '/casino', array(
        'methods'  => 'GET',
        'callback' => 'TBZ_get_casino_data',
    ) );
} );

function TBZ_get_casino_data() {
    $casino = get_posts(
        array(
            'post_type'      => 'entry',
            'posts_per_page' => - 1
        )
    );

    $collection = array();

    foreach ( $casino as $item ) {
        $entry = array();

        $entry['title']      = $item->post_title;
        $entry['logo']       = get_post_meta( $item->ID, 'TBZ_logo', 1 );
        $entry['bonus']      = (int) get_post_meta( $item->ID, 'TBZ_bonus', 1 );
        $entry['spins']      = (int) get_post_meta( $item->ID, 'TBZ_spins', 1 );
        $entry['advantages'] = get_post_meta( $item->ID, 'TBZ_advantages', 1 );
        $entry['rating']     = array_fill(0, get_post_meta( $item->ID, 'TBZ_rating', 1 ), null);
        $entry['link']       = get_post_meta( $item->ID, 'TBZ_link', 1 );
        $entry['date']     = get_post_meta( $item->ID, 'TBZ_launch', 1 );

        $collection[] = $entry;
    }

    $response = array(
        'code'    => 200,
        'casinos' => $collection
    );

    return new WP_REST_Response( $response, 200 );
}
