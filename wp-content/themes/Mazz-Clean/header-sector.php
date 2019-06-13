<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<!-- Title here -->
		<title><?php wp_title(' | ', true, 'right'); bloginfo('name'); ?></title>
		<!-- Description, Keywords and Author -->
		<!-- <meta name="description" content="Your description"> -->
		<!-- <meta name="keywords" content="Your,Keywords"> -->
		<!-- <meta name="author" content="ResponsiveWebInc"> -->
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Styles -->
		<?php wp_head(); ?>
		<!-- Bootstrap CSS -->
		<link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link href="<?php bloginfo('template_url');?>/css/settings.css" rel="stylesheet">
		<!-- FlexSlider Css -->
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/flexslider.css" media="screen" />
		<!-- Portfolio CSS -->
		<link href="<?php bloginfo('template_url');?>/css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="<?php bloginfo('template_url');?>/css/font-awesome.min.css" rel="stylesheet">	
		<!-- Custom Less -->
		<link href="<?php bloginfo('template_url');?>/css/less-style.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

		<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet" />
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

		<!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->
		
		<meta property="og:url" content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="When Great Minds Don’t Think Alike" />
		<meta property="og:description" content="How much does culture influence creative thinking?" />
		<meta property="og:image" content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicon.ico">
</head>
	<body <?php body_class(); ?>>