<?php 
/*
Template Name: A cerca de
*/
get_header();
 ?>

<!-- Banner Start -->
			
<div class="banner" style="background: url('<?php bloginfo('template_url');?>/img/categories/<?php echo rand (1,5) ?>.png') center center;">
	<div class="container">
		<!-- Heading -->
		<h2 class="yellow" style="margin-top:40px;">Acerca de</h2>
		<ol class="breadcrumb">
			<li><a href="index.html">Inicio</a></li>
			<li class="active">Acerca de</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>

<!-- Banner End -->

<!-- Inner Content -->
<div class="inner-page padd">

	<!-- About company -->
	<div class="about-company padd">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<!-- About Compnay Item -->
					<div class="about-company-item">
						<!-- About Company Image -->
						<img class="img-responsive img-thumbnail" src="<?php bloginfo('template_url');?>/img/about-1.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-6">
					<!-- About Compnay Item -->
					<div class="about-company-item">
						<!-- Heading -->
						<h3>Acerca de <span class="lblue">Mazz Clean</span></h3>
						<!-- Paragraph -->
						<p class="text-justify">Somos una empresa dedicada a la fabricación y distribución de productos de limpieza biodegradables; fabricamos limpiadores multiusos, shampoos para manos, autos y alfombras, limpiadores de aluminio, aromatizantes, germicidas, limpiadores de vinil, sarricidas, suavizantes de telas, limpiadores de cristales y desengrasantes en general, los productos que distribuimos son dispensadores de higiénicos, jarcería, accesorios industriales para limpieza, higiénicos, detergentes, aromatizantes ambientales. Nuestros clientes son la industria en general y los hogares.</p>
						<br /><!--/ Line break -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Testimonial Start -->

	<div class="testimonial padd">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:50px;">
					<div class="flexslider-testimonial">
						<ul class="slides">
							<li>
								<!-- Testimonial Content -->
								<div class="testimonial-item">
									<!-- Quote -->
									<span class="quote lblue">&#8220;</span> 
									<!-- Your comments -->
									<blockquote>
										<!-- Paragraph -->
										<p><strong>Misión</strong></p>
										<p>Contribuir y aportar soluciones de limpieza a nuestros clientes de manera eficiente, por medio de productos de calidad y que respeten el medio ambiente, teniendo pasión por innovar y que nuestra gente se desarrolle personal y profesionalmente.</p>
									</blockquote>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<!-- Testimonial Content -->
								<div class="testimonial-item">
									<!-- Quote -->
									<span class="quote lblue">&#8220;</span> 
									<!-- Your comments -->
									<blockquote>
										<!-- Paragraph -->
										<p><strong>Visión</strong></p>
										<p>Ser líderes en la fabricación y distribución de productos de limpieza, siendo auténticos, con una identidad distintiva en productos biodegradables, manteniendo una productividad y crecimiento constante, siendo rentables y dando a nuestros clientes ventajas competitivas.</p>
									</blockquote>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<!-- Testimonial Content -->
								<div class="testimonial-item">
									<!-- Quote -->
									<span class="quote lblue">&#8220;</span> 
									<!-- Your comments -->
									<blockquote>
										<!-- Paragraph -->
										<p><strong>Valores</strong></p>
										<ul class="list-unstyled">
											<li><i class="fa fa-check"></i> Honradez</li>
											<li><i class="fa fa-check"></i> Respeto</li>
											<li><i class="fa fa-check"></i> Valor</li>
											<li><i class="fa fa-check"></i> Comunicación</li>
											<li><i class="fa fa-check"></i> Compañerismo</li>											
										</ul>
									</blockquote>
									<div class="clearfix"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="flexslider-recent">
						<ul class="slides">
							<li>
								<!-- Image for background -->
								<img class="center-block img-responsive" src="<?php bloginfo('template_url');?>/img/mini-slider/mini-slider.png" alt="Mision Mazz Clean" />
								
							</li>
							<li>
								<!-- Image for background -->
								<img class="center-block img-responsive" src="<?php bloginfo('template_url');?>/img/mini-slider/mini-slider-1.png" alt="Vision Mazz Clean" />
								
							</li>
							<li>
								<!-- Image for background -->
								<img class="center-block img-responsive" src="<?php bloginfo('template_url');?>/img/mini-slider/mini-slider-2.png" alt="Valores Mazz Clean" />
								
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- General Info End -->

</div><!-- / Inner Page Content End -->	
<?php get_footer(); ?>
