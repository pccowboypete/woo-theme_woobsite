<?php 
/**
 * The template is for providing the left display for  content-single-product-content-display.php
 *
 *
 * @author 		PcCowboy
 * @package 	woo-theme_woobsite/template_parts
 * @version     1
 */

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}


global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>

<div class="col-sm-3 single-left">
	<div class="single-left-wrapper">
		<ul>
			<li>
				<a href="#">
				<i class="fa fa-apple" aria-hidden="true"></i>
				Item</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-apple" aria-hidden="true"></i>
				Item</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-umbrella" aria-hidden="true"></i>
				Item</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-umbrella" aria-hidden="true"></i>
				Item</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-umbrella" aria-hidden="true"></i>
				Item</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-umbrella" aria-hidden="true"></i>
				Item</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-umbrella" aria-hidden="true"></i>
				Item</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-umbrella" aria-hidden="true"></i>
				Item</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-umbrella" aria-hidden="true"></i>
				Item</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-umbrella" aria-hidden="true"></i>
				Item</a>
			</li>
		</ul>
	</div>
</div>