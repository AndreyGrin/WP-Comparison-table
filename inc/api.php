<?php

add_action( 'rest_api_init', function () {
    register_rest_route( 'wct/v1', '/casino', array(
        'methods' => 'GET',
        'callback' => 'wct_get_casino_data',
    ) );
} );

function wct_get_casino_data( WP_REST_Request $request ){

}
