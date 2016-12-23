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
    <meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index, follow">

	<!-- Box reset stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/border-box-reset.css">

	<!-- Bootstrap stylesheet -->
	<!--
	 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.css">
	 -->

	<!-- Default stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">


    <title>Layout 1</title>
</head>

<body>
<div id="main-wrapper">
  	
	<?php get_template_part('template_parts/header', 'topbar');?>

	<!-- Header -->
	<header>
	    <div class="container-fluid">
        <h3>Header Yow Yow Yow</h3>
			<p class="fontSize1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mollis.</p>
	    </div>
	</header><!-- END Header -->


  	<?php get_template_part('template_parts/header', 'searchbar');?>