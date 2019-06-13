<?php
get_header();?>

<!-- Banner Start -->
<div class="banner padd" style="background: url('<?php bloginfo('template_url');?>/img/categories/<?php echo rand (1,5) ?>.png') center center;">
	<div class="container">
		<!-- Heading -->
		<h2 class="yellow" style="margin-top:40px;"><?php single_cat_title( '', true ); ?></h2>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url(); ?>">Inicio</a></li>
			<li class="active">Productos</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>

<!-- Banner End -->

<!-- Inner Content -->
<div class="inner-page padd">

	<!-- Shoppin Start -->
	<div class="shopping" style="margin-top:0px;">
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
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?></a>
							<!-- Shopping item name / Heading -->
							<div class="clearfix"></div>
							<!-- Paragraph -->
							<div class="tabla center-block">
							<table class="table table-striped">
								<tbody>
									<tr>
										<td>Código:</td>
										<td><strong><?php echo get_post_meta($post->ID, 'codigo', true);  ?></strong></td>
									</tr>
									<tr>
										<td>Descripción:</td>
										<td><strong><?php echo get_post_meta($post->ID, 'descripcion', true);  ?></strong></td>
									</tr>
									<tr>
										<td>Presentación:</td>
										<td><strong><?php echo get_post_meta($post->ID, 'presentacion', true);  ?></strong></td>
									</tr>
									<tr>
									        <!--<td>Disponibilidad:</td>
										<td><strong><?php echo get_post_meta($post->ID, 'disponibilidad', true);  ?></strong></td>--!>
									</tr>
								</tbody>
							</table>
							</div>
							<!-- Buy now button -->
							<!--<div class="visible-xs">--!>
								<!--<a class="btn btn-danger btn-sm" href="#">Buy Now</a>--!>
							<!--</div>--!>
							<!-- Shopping item hover block & link -->
							<div class="item-hover br-red hidden-xs"></div>
							<a class="link hidden-xs" href="<?php the_permalink() ?>">Ver màs</a>
							<span class="hot-tag" style="background-color:<?php echo get_post_meta($post->ID, 'color', true) ?>;"><?php the_title(); ?></span>
						</div>
					</div>
					<?php
							}
						}
					?>
				</div>
				<ul class="pager">
					<li class="pull-left"><?php previous_posts_link('<- Pagina anterior'); ?></li>
					<li class="pull-right"><?php next_posts_link('Pagina siguiente ->'); ?></li>
				</ul>
			</div>
		</div>
	</div>

</div><!-- / Inner Page Content End -->	


<?php get_footer(); ?>
