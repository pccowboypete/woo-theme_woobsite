<?php 
/**
 * This file is for including all the needed files
 *
 *
 * @author 		PcCowboy
 * @package 	XWP
 * @version     1
 */

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}
?>

<?php 
//Objects


//factories
require_once 'factories/XWP_MenuFactory.php';
require_once 'factories/XWP_PostFactory.php';
require_once 'factories/XWP_PageFactory.php';

//utilities
require_once 'utilies/XWP_Util.php';


//HTMLHelpers
require_once 'HTMLHelpers/XWP_MenuHTMLHelper.php';
require_once 'HTMLHelpers/XWP_PostHTMLHelper.php';
require_once 'HTMLHelpers/XWP_PageHTMLHelper.php';




?>