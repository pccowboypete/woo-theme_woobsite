<?php 
/**
 * The template #override for displaying product content within loops
 *
 *
 * @author 		PcCowboy
 * @package 	woo-theme_woobsite
 * @version     1
 */

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}
?>



<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
			
			<?php wc_get_template_part( 'content', 'single-product' ); ?>

	<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>


       	
       	
