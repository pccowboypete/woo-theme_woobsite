<?php 
/**
 * The template is for getting the template parts of main-content
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

	<div class="row">
		<div class="container">
			<?php get_template_part('template_parts/main-content', 'leftbar');?>			
    	    <?php get_template_part('template_parts/main-content', 'center-content');?>
   	    	<?php get_template_part('template_parts/main-content', 'right-content');?>
		</div><!-- END container -->
	</div><!-- END row -->

</section><!-- END Section main-content  -->