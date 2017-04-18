<?php
    function get_TBZ_img($filename){
        return TBZ_DIR_URL . 'assets/img/' . $filename;
    }

    function TBZ_response( $code, $data ){
        if( $code == 200 ){
            $response = array(
                'code' => $code,
                'data' => array(
                    'content' => $data
                )
            );
        } else {
            $response = array(
                'code' => $code,
                'data' => array(
                    'errors' => $data
                )
            );
        }

        return json_encode($response);
    }

    function TBZ_get_order_details( $id ){
        $skips = TBZ_get_option('TBZ_skips');
        $total = get_post_meta($id, 'TBZ_total', 1);
        return array(
            'skip_size' => $skips[get_post_meta($id, 'TBZ_skip_size', 1) - 1]['title'],
            'hire_date' => get_post_meta($id, 'TBZ_date_start', 1) . ' - ' . get_post_meta($id, 'TBZ_date_end', 1),
            'time_slot' => get_post_meta($id, 'TBZ_timeslot', 1),
            'permit'    => get_post_meta($id, 'TBZ_permit', 1),
            'full_name' => get_post_meta($id, 'TBZ_full_name', 1),
            'phone'     => get_post_meta($id, 'TBZ_phone', 1),
            'email'     => get_post_meta($id, 'TBZ_email', 1),
            'address'   => get_post_meta($id, 'TBZ_address', 1),
            'postcode'  => get_post_meta($id, 'TBZ_postcode', 1),
            'total'     => ( $total == '' ) ? '£0' : '£'.$total,
            'status'    => get_post_meta($id, 'TBZ_status', 1),
            'payment'   => get_post_meta($id, 'TBZ_payment', 1),
        );
    }