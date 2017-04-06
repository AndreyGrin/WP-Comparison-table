<?php
    function get_WCT_img($filename){
        return WCT_DIR_URL . 'assets/img/' . $filename;
    }

    function WCT_response( $code, $data ){
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

    function WCT_get_order_details( $id ){
        $skips = WCT_get_option('WCT_skips');
        $total = get_post_meta($id, 'WCT_total', 1);
        return array(
            'skip_size' => $skips[get_post_meta($id, 'WCT_skip_size', 1) - 1]['title'],
            'hire_date' => get_post_meta($id, 'WCT_date_start', 1) . ' - ' . get_post_meta($id, 'WCT_date_end', 1),
            'time_slot' => get_post_meta($id, 'WCT_timeslot', 1),
            'permit'    => get_post_meta($id, 'WCT_permit', 1),
            'full_name' => get_post_meta($id, 'WCT_full_name', 1),
            'phone'     => get_post_meta($id, 'WCT_phone', 1),
            'email'     => get_post_meta($id, 'WCT_email', 1),
            'address'   => get_post_meta($id, 'WCT_address', 1),
            'postcode'  => get_post_meta($id, 'WCT_postcode', 1),
            'total'     => ( $total == '' ) ? '£0' : '£'.$total,
            'status'    => get_post_meta($id, 'WCT_status', 1),
            'payment'   => get_post_meta($id, 'WCT_payment', 1),
        );
    }