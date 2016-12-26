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
    <div class="container-fluid">
    	<div class="col-md-3 search-left">
    		<div class="search-left-wrapper">
    			<a  href="#"><span class="glyphicon glyphicon-th-list"></span>All Departments</a>
    		</div>
    	</div>
    	
    	<div class="col-md-6 search-center">
    		<div class="search-center-wrapper">
	    		<div class="input-group">
			      
			      <!-- Dropdown -->
			      <div class="input-group-btn">
			        <button type="button" class="btn btn-default dropdown-toggle search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
			        <ul class="dropdown-menu">
			          <li><a href="#">Action</a></li>
			          <li><a href="#">Another action</a></li>
			          <li><a href="#">Something else here</a></li>
			          <li role="separator" class="divider"></li>
			          <li><a href="#">Separated link</a></li>
			        </ul>
			      </div><!-- /btn-group -->
			      
			      <!-- Text field -->
			      <input type="text" class="form-control" aria-label="..." placeholder="Search what you want!">
			      
			      <!-- Search button -->
			      <span class="input-group-btn">
			        <button class="btn btn-default search-button" type="button">
			        	<span class="glyphicon glyphicon-search"></span>
			        </button>
			      </span>
			      
			    </div><!-- /input-group -->
			</div><!-- END search-control-wrapper  -->
    	</div>
    	
    	<div class="col-md-3 search-right">
    		<div class="search-right-wrapper">
	    		<a  href="#"  class="btn btn-default" title="Wishlist" data-toggle="tooltip" data-placement="right">
	    			<span class="glyphicon glyphicon-heart link-icon"></span>
	    			<span class="badge badge-notify">20</span>
	    			
	    		</a>
	    		
	    		<a  href="#" class="btn btn-default" title="Retweet"  data-toggle="tooltip" data-placement="right">
	    			<span class="glyphicon glyphicon-retweet link-icon"></span>
	    			<span class="badge badge-notify">20</span>
	    		</a>
	    		
	    		<a  href="#" class="btn btn-default" title="Cart"  data-toggle="tooltip" data-placement="left">
	    			<span class="glyphicon glyphicon-shopping-cart  link-icon"></span>
	    			<span class="badge badge-notify">20</span>
	    		</a>
    		</div>

    	</div>
    </div>
    
	<?php 
		//$arg = array('theme_location' => 'primary');
			
		//wp_nav_menu($arg);
	?>
  </nav><!-- END Search Navigation Bar -->