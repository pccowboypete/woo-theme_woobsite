<?php

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<meta name="description" content="<?php single_post_title(); single_cat_title(); echo ' - '. XWP_Util::get_the_meta_description_by_id(get_the_ID()); ?>">
	<meta name="keywords" 
 	content="<?php single_post_title(); single_cat_title(); echo ', '; XWP_Util::get_the_tags(); ?>">
	<meta name="robots" content="index, follow">

	<!-- Box reset stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/border-box-reset.css">

	<!-- Bootstrap stylesheet -->
	 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.css">
	 
	 <!-- Font Awesome stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
	

	<!-- Default stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	
	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Sriracha" rel="stylesheet"> <!-- font 2 and 3 -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> <!-- font 4 -->




    <title><?php bloginfo('name'); ?><?php echo ' - ';single_post_title(); single_cat_title(); ?></title>
	<?php wp_head(); ?>
	
	
	
</head>

<body <?php body_class('index'); ?>>
<div id="main-wrapper">
  	
	<?php get_template_part('template_parts/header', 'topbar');?>

	<!-- Header -->
	<header>
	    <div class="container-fluid">
        	
			
	    </div>
	</header><!-- END Header -->


  	<?php get_template_part('template_parts/header', 'searchbar');?>