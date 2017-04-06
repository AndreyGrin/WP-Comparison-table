<?php

function WCT_assets(){
    wp_enqueue_script( 'wct-angular', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js', array ( 'jquery' ), '1.6.1' );
    wp_enqueue_script( 'wct-angular-animate', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-animate.min.js', array ( 'jquery' ), '1.0.1' );
    wp_enqueue_script( 'wct-app-service', WCT_DIR_URL . 'assets/js/app-service.js', array ( 'jquery' ), '1.0.1' );
    wp_enqueue_script( 'wct-app-controller', WCT_DIR_URL . 'assets/js/app-controller.js', array ( 'jquery' ), '1.0.1' );
    wp_enqueue_script( 'wct-module', WCT_DIR_URL . 'assets/js/app-module.js', array ( 'jquery' ), '1.0.1' );
    wp_enqueue_script( 'wct-app', WCT_DIR_URL . 'assets/js/app.js', array ( 'jquery' ), '1.0.1' );
    wp_enqueue_style( 'wct-style', WCT_DIR_URL . 'assets/css/style.css', array( ), '1.0.2' );

    wp_localize_script( 'wct-init', 'wct',
        array(
            'root' => esc_url_raw( rest_url() )
        )
    );
}
add_action('wp_enqueue_scripts', 'WCT_assets');