<?php 
/*
Template Name: Principal
*/
?>


<?php get_header(); ?>

<?php include(TEMPLATEPATH. '/slideshow.php'); ?>

<div class="container">
	<div class="row first-row">
		<div class="row-height">
			<div class="col-xs-12 col-sm-4 col-sm-height top">
				<div class="first-box inside-full-height">
					<div class="box-title">
						<img src="<?php bloginfo('template_url');?>/img/icons/promociones.png" class="img-responsive inline-block icons" alt="Icono promociones">
						<h3 class="inline-block title-aside condensed">Productos en promoción.</h3>
					</div>
					<?php echo do_shortcode("[metaslider id=214]"); ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-sm-height top margin-mobile">
				<div class="first-box inside-full-height">
					<div class="box-title">
						<img src="<?php bloginfo('template_url');?>/img/icons/contacto.png" class="img-responsive inline-block icons" alt="Icono contacto">
						<h3 class="inline-block title-aside condensed">¡Dejenos Servirle Mejor!</h3>
					</div>
					<div class="padd-10-10">
						<p class="text-center condensed">Subscribete...</p>
						<?php echo do_shortcode("[contact-form-7 id='238' title='Subscripcion']"); ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-sm-height top margin-mobile hidden-xs">
				<div class="first-box inside-full-height facebook">
					<?php echo do_shortcode("[FBW]"); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="row category-row hidden-xs">
		<div class="col-xs-12">
			<div class="category-box">
				<div class="inline-block container-fluid">
					<div class="inline-block col-xs-3 text-center middle">
						<h3 class="condensed text-red-border-white">Tenemos una solución ESPECIAL para cada sector.</h3>
						<h3 class="condensed text-blue-border-white">¿Cual es el suyo?</h3>
					</div>
					<div class="inline-block col-xs-6 middle">
						<div class="row">
							<div class="col-xs-3"><a href="<?php bloginfo('template_url');?>/assets/pdf/mazz-hoteles.pdf" target="_blank"><img src="<?php bloginfo('template_url');?>/img/sector/sector-hoteles.png" class="img-responsive" alt="Sector hoteles"></a></div>
							<div class="col-xs-3"><a href="<?php bloginfo('template_url');?>/assets/pdf/mazz-escuelas.pdf" target="_blank"><img src="<?php bloginfo('template_url');?>/img/sector/sector-escuelas.png" class="img-responsive" alt="Sector escuelas"></a></div>
							<div class="col-xs-3"><a href="<?php bloginfo('template_url');?>/assets/pdf/mazz-oficinas.pdf" target="_blank"><img src="<?php bloginfo('template_url');?>/img/sector/sector-oficinas.png" class="img-responsive" alt="Sector oficinas"></a></div>
							<div class="col-xs-3"><a href="<?php bloginfo('template_url');?>/assets/pdf/mazz-industria.pdf" target="_blank"><img src="<?php bloginfo('template_url');?>/img/sector/sector-industria.png" class="img-responsive" alt="Sector "></a></div>
						</div>
						<div class="row" style="margin-top:5px;">
							<div class="col-xs-3"><a href="<?php bloginfo('template_url');?>/assets/pdf/mazz-restaurantes.pdf" target="_blank"><img src="<?php bloginfo('template_url');?>/img/sector/sector-restaurantes.png" class="img-responsive" alt="Sector restaurantes"></a></div>
							<div class="col-xs-3"><a href="<?php bloginfo('template_url');?>/assets/pdf/mazz-autolavados.pdf" target="_blank"><img src="<?php bloginfo('template_url');?>/img/sector/sector-autolavados.png" class="img-responsive" alt="Sector autolavados"></a></div>
							<div class="col-xs-3"><a href="<?php bloginfo('template_url');?>/assets/pdf/mazz-comercios.pdf" target="_blank"><img src="<?php bloginfo('template_url');?>/img/sector/sector-comercios.png" class="img-responsive" alt="Sector comercios"></a></div>
							<div class="col-xs-3"><a href="<?php bloginfo('template_url');?>/assets/pdf/mazz-hospitales.pdf" target="_blank"><img src="<?php bloginfo('template_url');?>/img/sector/sector-hospitales.png" class="img-responsive" alt="Sector hospitales"></a></div>
						</div>
					</div>
					<div class="inline-block col-xs-3 middle">
						<img src="<?php bloginfo('template_url');?>/img/sector/modelo.png" class="center-block img-responsive" alt="Modelo Mazz Clean">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row second-row">
		<div class="row-height">
			<div class="inline-block col-xs-12 col-sm-6 col-md-3 col-md-height top">
				<div class="second-box inside-full-height">
					<div class="box-title">
						<img src="<?php bloginfo('template_url');?>/img/menu/quimico.png" class="inline-block img-responsive" alt="Icono productos quimicos">
						<h3 class="inline-block title-aside condensed">Productos Químicos</h3>
					</div>
					<div>
						<img src="<?php bloginfo('template_url');?>/img/categories/quimicos.png" class="inline-block img-responsive col-md-6 col-xs-12 pad-0 middle" alt="">
						<ul class="inline-block col-md-6 col-xs-12 middle">
							<li><i class="fa fa-angle-right"></i> Desinfectantes</li>
							<li><i class="fa fa-angle-right"></i> Multiusos</li>
							<li><i class="fa fa-angle-right"></i> Aromatizante</li>
							<li><i class="fa fa-angle-right"></i> etc.</li>
							<li class="text-right"><a href="<?php echo home_url() ?>/categorias_producto/linea-quimicos" class="btn br-green white">Ver Productos</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="inline-block col-xs-12 col-sm-6 col-md-3 col-md-height top margin-mobile">
				<div class="second-box inside-full-height">
					<div class="box-title">
						<img src="<?php bloginfo('template_url');?>/img/menu/jarcieria.png" class="img-responsive inline-block" alt="Icono productos de jarcieria">
						<h3 class="inline-block title-aside condensed">Jarciería</h3>
					</div>
					<div>
						<img src="<?php bloginfo('template_url');?>/img/categories/jarcieria.png" class="inline-block img-responsive col-md-6 col-xs-12 pad-0 middle" alt="">
						<ul class="inline-block col-md-6 col-xs-12 middle">
							<li><i class="fa fa-angle-right"></i> Trapeadores</li>
							<li><i class="fa fa-angle-right"></i> Escobas</li>
							<li><i class="fa fa-angle-right"></i> Franelas</li>
							<li class="text-right"><a href="<?php echo home_url() ?>/categorias_producto/linea-jarcieria" class="btn br-green white">Ver Productos</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<div class="inline-block col-xs-12 col-sm-6 col-md-3 col-md-height top margin-mobile margin-tablet">
				<div class="second-box inside-full-height">
					<div class="box-title">
						<img src="<?php bloginfo('template_url');?>/img/menu/higienicos.png" class="img-responsive inline-block" alt="Icono productos higienicos">
						<h3 class="inline-block title-aside condensed">Higiénicos</h3>
					</div>
					<div >
						<img src="<?php bloginfo('template_url');?>/img/categories/higienicos.png" class="inline-block img-responsive col-md-6 col-xs-12 pad-0 middle" alt="">
						<ul class="inline-block col-md-6 col-xs-12 middle">
							<li><i class="fa fa-angle-right"></i> Servilletas</li>
							<li><i class="fa fa-angle-right"></i> Toallas</li>
							<li><i class="fa fa-angle-right"></i> Higienicos</li>
							<li class="text-right"><a href="<?php echo home_url() ?>/categorias_producto/linea-papel" class="btn br-green white">Ver Productos</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="inline-block col-xs-12 col-sm-6 col-md-3 col-md-height top margin-mobile margin-tablet">
				<div class="second-box inside-full-height">
					<div class="box-title">
						<img src="<?php bloginfo('template_url');?>/img/menu/dispensadores.png" class="img-responsive inline-block" alt="Icono productos dispensadores">
						<h3 class="inline-block title-aside condensed">Dispensadores</h3>
					</div>
					<div>
						<img src="<?php bloginfo('template_url');?>/img/categories/dispensadores.png" class="col-md-6 col-xs-12 inline-block middle img-responsive pad-0" alt="">
						<ul class="inline-block col-md-6 col-xs-12 middle">
							<li><i class="fa fa-angle-right"></i> Para manos</li>
							<li><i class="fa fa-angle-right"></i> Higienicos</li>
							<li><i class="fa fa-angle-right"></i> Jaboneras</li>
							<li><i class="fa fa-angle-right"></i> etc.</li>
							<li class="text-right"><a href="<?php echo home_url() ?>/categorias_producto/linea-dispensadores" class="btn br-green white">Ver Productos</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row third-row">
		<div class="row-height">
			<div class="col-xs-12 col-sm-6 col-sm-height">
				<div class="third-box inside-full-height">
					<div class="box-title">
						<img src="<?php bloginfo('template_url');?>/img/icons/video.png" class="img-responsive inline-block icons" alt="Youtube logo">
						<h3 class="inline-block title-aside condensed">Conoce Mazz</h3>
					</div>
					<div class="pad">
						<div class="embed-responsive embed-responsive-4by3">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/W7GkObl96uo" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-sm-height margin-mobile">
				<div class="third-box inside-full-height">
					<div class="box-title">
						<img src="<?php bloginfo('template_url');?>/img/icons/contact.png" class="img-responsive inline-block icons" alt="Icono de contacto">
						<h3 class="inline-block title-aside condensed">Contacto</h3>
					</div>
					<div class="information">
						<img src="<?php bloginfo('template_url');?>/img/icons/call-center.png" class="col-3 inline-block img-responsive  text-left" alt="Icono recepcionista">
						<div class="col-9 inline-block middle">
							<p class="help">¿Necesitas información ahora?</p>
							<p class="phone red">01-(272)-72-1-13-04</p>
						</div>
						<div class="border"></div>
					</div>
					<div class="data middle">
						<img src="<?php bloginfo('template_url');?>/img/slider/mazz.png" class="col-4 inline-block img-responsive" alt="Mazzcota">
						<div class="col-8 inline-block middle">
							<p><a href="https://www.facebook.com/Mazz-Clean-972059689486447/timeline/" target="_blanck"><img src="<?php bloginfo('template_url');?>/img/icons/facebook.png" class="col-2 img-responsive inline-block" alt="Icono facebook">&nbsp;&nbsp; Mazzclean</a></p>
							<p><a href="#"><img src="<?php bloginfo('template_url');?>/img/icons/youtube.png" class="col-2 img-responsive inline-block" alt="Icono youtube">&nbsp;&nbsp; Mazzclean</a></p>
							<p><a href="mailto:info@mazzclean.com"><img src="<?php bloginfo('template_url');?>/img/icons/correo.png" class="col-2 img-responsive inline-block" alt="Icono correo">&nbsp;&nbsp; info@mazzclean.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>