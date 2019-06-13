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
		<!-- Page Wrapper -->
		<div class="wrapper">
		<!-- Header Start -->
		<h1 class="hidden">Mazz Clean</h1>
			<div class="header">
				<div class="container">
					<!-- Header top area content -->
					<div class="header-top">
						<div class="row">
							<div class="col-sm-12">
								<!--Header top left content contact-->
								<div class="header-contact">
									<!-- Contact number -->
									<span><i class="fa fa-phone green"></i> (272) 72 1 13 04</span>
									<span class="pull-right">&nbsp;<i class="fa fa-envelope green"></i><a href="<?php echo home_url()?>/contacto">info@mazzclean.com</a></span>
								</div>
							</div>
							<!-- <div class="col-md-6 col-sm-12 text-right">
								<div class="header-contact">
									<button class="btn btn-danger btn-sm" type="button" style="margin-top: 5px;">Registrate</button>
								</div>
								<div class="clearfix"></div>
							</div> -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-4">
							<!-- Link -->
							<a href="<?php echo site_url(); ?>">
								<!-- Logo area -->
								<div class="logo">
									<img class="img-responsive" src="<?php bloginfo('template_url');?>/img/logo.png" alt="Mazz Clean logo" style="height:118px;"/>
								</div>
							</a>
						</div>
						<div class="col-md-9 col-sm-8">
						<!-- Navigation -->
						
						<nav class="navbar navbar-default navbar-right" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php bloginfo('template_url');?>/img/menu/quimico.png" class="img-responsive" alt="" /> Químicos <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo home_url()?>/categorias_producto/linea-hogar">Hogar</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/linea-industrial">Industria</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/linea-albercas">Albercas</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/linea-automotriz">Automotriz</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php bloginfo('template_url');?>/img/menu/jarcieria.png" class="img-responsive" alt="" /> Jarcieria <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo home_url()?>/categorias_producto/escobas">Cepillos y Escobas</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/cubetas">Cubetas</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/fibras">Fibras</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/guantes">Guantes</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/jabones">Jabones y Detergentes</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/jaladores">Jaladores</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/sacudidores">Sacudidores</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/trapeadores">Mechudos y Trapeadores</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/franelas">Jergas y Franelas</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/otros/">Otros</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php bloginfo('template_url');?>/img/menu/higienicos.png" class="img-responsive" alt="" /> Papel <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo home_url()?>/categorias_producto/servilletas">Servilletas</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/higienicos">Higiénicos</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/toallas">Toallas</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php bloginfo('template_url');?>/img/menu/dispensadores.png" class="img-responsive" alt=""> Dispensadores <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo home_url()?>/categorias_producto/manos/">Manos</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/higienicos-linea-dispensadores">Higiénicos</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/jaboneras">Jaboneras</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/servilleteros">Servilleteros</a></li>
												<li><a href="<?php echo home_url()?>/categorias_producto/botes">Botes de basura</a></li>
											</ul>
										</li>
										<li><a href="<?php echo home_url()?>/ideas-y-tips"><img src="<?php bloginfo('template_url');?>/img/menu/blog.png" class="img-responsive" alt="" /> Ideas y Tips </a></li>
										<li><a href="<?php echo home_url()?>/contacto"><img src="<?php bloginfo('template_url');?>/img/menu/contacto.png" class="img-responsive" alt="" /> Contacto </a></li>
										<li><a href="<?php echo home_url()?>/a-cerca-de"><img src="<?php bloginfo('template_url');?>/img/menu/acerca.png" class="img-responsive" alt="" /> Descubre Mazz </a></li>
									</ul>
								</div>
							</div>
						</nav>

						</div>
					</div>
				</div> <!-- / .container -->
			</div>
			
			<!-- Header End -->