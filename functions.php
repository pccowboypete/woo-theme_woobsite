<?php

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}

//Hook the XWP Library
require_once 'XWP/XWP_Setup.php';
//Hook the XWP_WooCommerce Library
require_once 'XWP_WooCommerce/XWP_WooCommerce_SetUp.php';



function mytheme_resources(){
		wp_enqueue_style('normalize', get_template_directory_uri().'/assets/normalize.css', false,'1.0','all');
		//wp_enqueue_style('bootstrap.css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css', false,'1.0','all');
		wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mytheme_resources');


//Register Navigations Menus 
register_nav_menus(array(
		'topbar-home' => __('Top Bar Menu - Home'),
		'primary' => __('Primary Menu Links'),
		'footer' => __('Footer Menu Links')
));

?>