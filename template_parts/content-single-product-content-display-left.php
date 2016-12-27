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
				<i class="fa fa-home link-icon" aria-hidden="true"></i>
				<span>Electronics</span>
				<i class="fa fa-chevron-right chevron-right" aria-hidden="true"></i>
				</a>
			</li>
			
			<li>
				<a href="#">
					<i class="fa fa-apple link-icon" aria-hidden="true"></i>
					<span>Women's Fashion</span>
					<i class="fa fa-chevron-right chevron-right" aria-hidden="true"></i>
				
				</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-male link-icon" aria-hidden="true"></i>
				<span>Men's Fashion</span>
				<i class="fa fa-chevron-right chevron-right" aria-hidden="true"></i>
				</a>
			</li>
			
			<li>
				<a href="#">
					<i class="fa fa-umbrella link-icon" aria-hidden="true"></i>
					<span>Health and Beauty</span>
					<i class="fa fa-chevron-right chevron-right" aria-hidden="true"></i>
				
				</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-home link-icon" aria-hidden="true"></i>
				<span>Home and Living</span>
				<i class="fa fa-chevron-right chevron-right" aria-hidden="true"></i>
				</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-bath link-icon" aria-hidden="true"></i>
				<span>Baby and Toys</span>
				<i class="fa fa-chevron-right chevron-right" aria-hidden="true"></i>
				</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-futbol-o link-icon" aria-hidden="true"></i>
				<span>Sports and Travel</span>
				<i class="fa fa-chevron-right chevron-right" aria-hidden="true"></i>
				</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-camera-retro link-icon" aria-hidden="true"></i>
				<span>Media and Gadgets</span>
				<i class="fa fa-chevron-right chevron-right" aria-hidden="true"></i>
				</a>
			</li>
			
			<li>
				<a href="#">
				<i class="fa fa-camera-retro link-icon" aria-hidden="true"></i>
				<span>Computer Accessories</span>
				<i class="fa fa-chevron-right chevron-right" aria-hidden="true"></i>
				</a>
			</li>

		</ul>
	</div>
</div>