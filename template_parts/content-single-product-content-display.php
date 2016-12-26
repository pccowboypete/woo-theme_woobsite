<?php 
/**
 * The template is for providing the wrapper of the content-single-product-content.php
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

<?php get_template_part('template_parts/content-single-product-content-display', 'left'); ?>
<?php get_template_part('template_parts/content-single-product-content-display', 'main'); ?>



