<?php
get_header();?>

<!-- Inner Content -->
<div class="inner-page padd">

	<!-- Banner Start -->
	
	<div class="banner padd" style="background: url('<?php bloginfo('template_url');?>/img/categories/<?php echo rand (1,5) ?>.png') center center;">
		<div class="container">
			<!-- Image -->
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/img/crown-white.png" alt="" />
			<!-- Heading -->
			<h2 class="white">Todos los productos</h2>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url(); ?>">Inicio</a></li>
				<li class="active">Productos</li>
			</ol>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<!-- Banner End -->


	<!-- Shoppin Start -->
	<div class="shopping">
		<div class="container">
			<!-- Shopping items content -->
			<div class="shopping-content">
				<div class="row">
					<?php 
						if ( have_posts() ){
							while ( have_posts() ){
								the_post();
					?>
					<div class="col-md-3 col-sm-6">
						<!-- Shopping items -->
						<div class="shopping-item">
							<!-- Image -->
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thb-index', array('class' => 'img-responsive')); ?></a>
							<!-- Shopping item name / Heading -->
							<h4 class="pull-left"><a href="item-single.html"><?php the_title(); ?></a></h4>
							<span class="item-price pull-right"><?php echo get_post_meta($post->ID, 'precio', true);  ?></span>
							<div class="clearfix"></div>
							<!-- Paragraph -->
							<?php the_excerpt(); ?>
							<!-- Buy now button -->
							<div class="visible-xs">
								<a class="btn btn-danger btn-sm" href="#">Buy Now</a>
							</div>
							<!-- Shopping item hover block & link -->
							<div class="item-hover br-red hidden-xs"></div>
							<a class="link hidden-xs" href="#">Ver màs</a>
						</div>
					</div>
					<?php
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>

</div><!-- / Inner Page Content End -->	


<?php get_footer(); ?>