<?php 
/**
 * Fatory Class for Product Item
 * Extends XWP_Page
 *
 *
 * @author 		PcCowboy
 * @package 	XWP__WooCommerce/factories
 * @version     1
 * 	
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}
?>



<?php

class XWP_ProductFactory{
	
	protected $current_post_product = null;
	protected $current_post_products = array();
	
	protected $dummy_product = null;
	protected $dummy_products = array();
	
	protected $featured_products = array();
	
	
	public static function get_products($params){
		$result = array();
		
		return $result();
	}
	
	
	public static function load_current_post_product($params){
		$result = null;
		
		return $result();
	}
	
	public static function load_current_post_products($params){
		$result = array();
		
		return $result();
	}
	
	
	public static function load_dummy_product($params){
		$result = null;
		
		return $result();
	}
	
	public static function load_dummy_products($params){
		$result = array();
		
		return $result();
	}
	
	
	
	public static function load_featured_products($params){
		$result = array();
		
		return $result();
	}
}

?>