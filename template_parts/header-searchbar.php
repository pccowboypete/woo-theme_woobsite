<?php 
/**
 * The template is for providing the header search navigation bar
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


<!-- Search Navigation Bar -->
  <nav id="search-bar">
    <div class="container">
    	<div class="col-md-3">
    		<a  href="#"><span class="glyphicon glyphicon-th-list"></span>All Departments</a>
    	</div>
    	
    	<div class="col-md-6">
    	</div>
    	
    	<div class="col-md-3">
    		<a  href="#"  class="btn btn-default" title="Wishlist" data-toggle="tooltip" data-placement="right">
    			<span class="glyphicon glyphicon-heart link-icon"></span>
    			<span class="badge badge-notify">20</span>
    			
    		</a>
    		
    		<a  href="#" class="btn btn-default" title="Retweet"  data-toggle="tooltip" data-placement="right">
    			<span class="glyphicon glyphicon-retweet link-icon"></span>
    			<span class="badge badge-notify">20</span>
    		</a>
    		
    		<a  href="#" class="btn btn-default" title="Cart"  data-toggle="tooltip" data-placement="right">
    			<span class="glyphicon glyphicon-shopping-cart  link-icon"></span>
    			<span class="badge badge-notify">20</span>
    		</a>

    	</div>
    </div>
    
	<?php 
		//$arg = array('theme_location' => 'primary');
			
		//wp_nav_menu($arg);
	?>
  </nav><!-- END Search Navigation Bar -->