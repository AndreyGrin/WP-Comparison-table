<?php

function TBZ_assets(){
    wp_enqueue_script( 'TBZ-angular', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js', array ( 'jquery' ), '1.6.1' );
    wp_enqueue_script( 'TBZ-angular-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/angular-scroll/1.0.0/angular-scroll.min.js', array ( 'jquery' ), '1.0.1' );
    wp_enqueue_script( 'TBZ-angular-animate', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-animate.min.js', array ( 'jquery' ), '1.0.1' );
    wp_enqueue_script( 'TBZ-app-service', TBZ_DIR_URL . 'assets/js/app-service.js', array ( 'jquery' ), '1.0.1' );
    wp_enqueue_script( 'TBZ-app-controller', TBZ_DIR_URL . 'assets/js/app-controller.js', array ( 'jquery' ), '1.0.1' );
    wp_enqueue_script( 'TBZ-app-components', TBZ_DIR_URL . 'assets/js/app-components.js', array ( 'jquery' ), '1.0.1' );
    wp_enqueue_script( 'TBZ-module', TBZ_DIR_URL . 'assets/js/app-module.js', array ( 'jquery' ), '1.0.1' );
    wp_enqueue_script( 'TBZ-app', TBZ_DIR_URL . 'assets/js/app.js', array ( 'jquery' ), '1.0.1' );
    wp_enqueue_style( 'TBZ-bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array( ), '3.3.7' );
    wp_enqueue_style( 'TBZ-style', TBZ_DIR_URL . 'assets/css/style.css', array( ), '1.0.2' );

    wp_localize_script( 'TBZ-app', 'TBZ',
        array(
            'root' => esc_url_raw( rest_url() )
        )
    );
}
add_action('wp_enqueue_scripts', 'TBZ_assets');