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

?>



<!-- Section main-content  -->
<section  id="main-content">

	
		<div class="container-fluid">
			<?php get_template_part('template_parts/content-single-product-content', 'display'); ?>
		</div><!-- END container -->
	

</section><!-- END Section main-content  -->

