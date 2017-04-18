<?php
/*
Plugin Name: TableZino
Author: Andrey Grin
Author URL: https://www.upwork.com/freelancers/~0108aae217b1acb22f
Description: Table creating app
Version: 0.0.1
*/

define('TBZ_DIR', dirname(__FILE__));
define('TBZ_DIR_URL', plugin_dir_url( __FILE__ ));

// include assets: styles, scripts
require_once( TBZ_DIR . '/inc/assets.php' ); // Adds plugin JS and CSS

// table shortcode
require_once( TBZ_DIR . '/inc/shortcode.php' );

// utilities
require_once( TBZ_DIR . '/inc/utils.php' );

// post type
require_once( TBZ_DIR . '/inc/post-type.php' );

// CMB2
require_once( TBZ_DIR . '/vendor/CMB2/init.php');

// post type meta
require_once( TBZ_DIR . '/inc/entry-meta.php' );

// API
require_once( TBZ_DIR . '/inc/api.php' );