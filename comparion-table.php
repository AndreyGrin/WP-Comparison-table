<?php
/*
Plugin Name: Comparison table
Author: Andrey Grin
Author URL: https://www.upwork.com/freelancers/~0108aae217b1acb22f
Description: Example of bootstrap responsive comparison tables with filters
Version: 0.0.1
*/

define('WCT_DIR', dirname(__FILE__));
define('WCT_DIR_URL', plugin_dir_url( __FILE__ ));

// include assets: styles, scripts
require_once( WCT_DIR . '/inc/assets.php' ); // Adds plugin JS and CSS

// table shortcode
require_once( WCT_DIR . '/inc/shortcode.php' );

// utilities
require_once( WCT_DIR . '/inc/utils.php' );

// post type
require_once( WCT_DIR . '/inc/post-type.php' );

// CMB2
require_once( WCT_DIR . '/vendor/CMB2/init.php');

// post type meta
require_once( WCT_DIR . '/inc/entry-meta.php' );

// API
require_once( WCT_DIR . '/inc/api.php' );