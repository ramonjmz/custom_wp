<?php 
/*
Template Name: Contacto
*/
get_header(); ?>

	<!-- Banner Start -->
	
	<div class="banner" style="background: url('<?php bloginfo('template_url');?>/img/categories/<?php echo rand (1,5) ?>.png') center center;">
		<div class="container">
			<!-- Heading -->
			<h2 class="green" style="margin-top:40px;">Contacto</h2>
			<ol class="breadcrumb">
				<li><a href="index.html">Inicio</a></li>
				<li class="active">Contacto</li>
			</ol>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<!-- Banner End -->

<!-- Inner Content -->
<div class="inner-page padd">

	<!-- Contact Us Start -->
				
	<div class="contactus">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<!-- Contact Us content -->
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<!-- Contact content details -->
							<div class="contact-details">
								<!-- Heading -->
								<h4>Direccion</h4><!-- Address / Icon -->
								<i class="fa fa-map-marker br-red"></i> <span>Av. San Juan No. 10 Int. 1,  Col. Unión y Progreso<br />Ixtaczoquitlan, Ver,<br /> CP. 94450</span>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<!-- Contact content details -->
							<div class="contact-details">
								<!-- Heading -->
								<h4>Contactanos</h4>
								<!-- Contact Number / Icon -->
								<i class="fa fa-phone br-green"></i> <span> (272) 72 1 13 04</span>
								<div class="clearfix"></div>
								<!-- Email / Icon -->
								<i class="fa fa-envelope-o br-lblue"></i> <span><a href="#">info@mazzclean.com</a></span>
								<div class="clearfix"></div>
							</div>
						</div>
					</div><!--/ Inner row end -->
					<!-- Contact form -->
					<div class="contact-form">
					<!-- Heading -->
						<h3>Envianos un mensaje</h3>
						<!-- Form -->
							<?php if (have_posts()) : 
									while (have_posts()) : the_post();			
							        	the_content();
									endwhile; 
								   endif;?>
					</div><!--/ Contact form end -->
				</div>
				<div class="col-md-6">
					<!-- Map holder -->
					<div class="map-container">
						<!-- Google Map -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.590832615995!2d-97.0655871!3d18.860852499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4fd3378c68f9d%3A0x966cc804ee91248d!2sSan+Juan+10%2C+Comisi%C3%B3n+Nacional+de+%C3%81reas+Naturales+Protegidas%2C+Escamela%2C+94463+Ixtaczoquitl%C3%A1n%2C+Ver.!5e0!3m2!1ses!2smx!4v1437285068831" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Contact Us End -->

</div><!-- / Inner Page Content End -->

<?php get_footer(); ?>
