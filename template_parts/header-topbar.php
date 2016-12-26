<?php 
/**
 * The template is for providing the header topbar
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

	<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" id="top-bar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo home_url(); ?>#page-top">
                    <span class="site-caption">Welcome to <span class="site-name">WoobSite!</span></span>
                    <br><span class="debug"></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="top-bar">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <?php echo XWP_MenuHTMLHelper::get_nav_menu_for_frontpage('primary', 0, false, false)?>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>