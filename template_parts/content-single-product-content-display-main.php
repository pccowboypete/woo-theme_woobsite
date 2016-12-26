<?php 
/**
 * The template is for providing the center display for  content-single-product-content-display.php
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


<div class="col-sm-9 single-main" style="padding-left : 0px; margin : 0px;">
	<div class="single-main-wrapper">
		<p>Cras volutpat, lacus quis semper pharetra, nisi enim dignissim est, et sollicitudin quam ipsum vel mi. Sed commodo urna ac urna. Nullam eu tortor. Curabitur sodales scelerisque magna. Donec ultricies tristique pede. Nullam libero. Nam sollicitudin felis vel metus. Nullam posuere molestie metus. Nullam molestie, nunc id suscipit rhoncus, felis mi vulputate lacus, a ultrices tortor dolor eget augue. Aenean ultricies felis ut turpis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse placerat tellus ac nulla. Proin adipiscing sem ac risus. Maecenas nisi. Cras semper.</p>
	</div>

</div>