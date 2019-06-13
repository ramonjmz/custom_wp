<?php get_header(); ?>
<!-- Inner Content -->
<div class="inner-page">
	<!-- Single Item Start -->
	<div class="single-item">
		<div class="container">
			<?php 
				if ( have_posts() ){
					while ( have_posts() ){
						the_post();
			?>
			<!-- Shopping single item contents -->
			<div class="single-item-content">
				<div class="row">
					<div class="col-md-4 col-sm-5">
						<!-- Product image -->
						<?php
							$id = ((int) get_field('id_slider'));
								if($id != 0):
									if ( function_exists( 'easingslider' ) ): easingslider( $id );
									endif;
								else:
									the_post_thumbnail('full', array('class' => 'img-responsive thumbnail')); 
								endif;
						?>
					</div>
					<div class="col-md-8 col-sm-7">
						<!-- Heading -->
						<h3 class="single-title"><?php the_title(); ?></h3>
						<div class="row">
							<div class="col-md-7 col-sm-12">
								<!-- Single item details -->
								<div class="item-details">
									<!-- Paragraph -->
									<p class="text-justify"><?php the_content(); ?></p>
									<!-- Heading -->
									<h5>Ficha tecnica:</h5>
									<!-- Recipe ingredients -->
									<?php $list = get_field('ficha_tecnica');
										  if($list):
									?>
										<ul class="data-sheet list-unstyled">
											<?php echo $list ?>
										</ul>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-md-5 col-sm-12">
								<!-- Blog sidebar page widget -->
								<div class="sidebar-widget">
									<!-- Widget Heading -->
									<h4>Familias</h4>
									<!-- Recent post list -->
									<h5 style="margin-top:20px;"><a href="#quimicos" data-toggle="collapse"><i class="fa fa-angle-double-right"></i> Químicos</a></h5>
									<div class="panel-collapse collapse" id="quimicos">
										<ul class="list-unstyled">
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/linea-quimicos">Todos</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/linea-hogar">Hogar</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/linea-industrial">Industria</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/linea-albercas">Albercas</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/linea-automotriz">Automotriz</a></li>
										</ul>
									</div>
									<h5 style="margin-top:20px;"><a href="#jarcieria" data-toggle="collapse"><i class="fa fa-angle-double-right"></i> Jarcieria</a></h5>
									<div class="panel-collapse collapse" id="jarcieria">
										<ul class="list-unstyled">
											<li><i class="fa fa-angle-double-right"></i> <a href="#">Todos</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="#">Escobas</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="#">Trapeadores</a></li>
										</ul>
									</div>
									<h5 style="margin-top:20px;"><a href="#papel" data-toggle="collapse"><i class="fa fa-angle-double-right"></i> Papel</a></h5>
									<div class="panel-collapse collapse" id="papel">
										<ul class="list-unstyled">
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/linea-papel">Todos</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/servilletas">Servilletas</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/higienicos">Higiénicos</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/toallas">Toallas</a></li>
										</ul>
									</div>
									<h5 style="margin-top:20px;"><a href="#dispensadores" data-toggle="collapse"><i class="fa fa-angle-double-right"></i> Dispensadores</a></h5>
									<div class="panel-collapse collapse" id="dispensadores">
										<ul class="list-unstyled">
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/linea-dispensadores">Todos</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/manos">Manos</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/higienicos-linea-dispensadores">Higiénicos</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/jaboneras">Jaboneras</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/servilleteros">Servilleteros</a></li>
											<li><i class="fa fa-angle-double-right"></i> <a href="<?php echo home_url() ?>/categorias_producto/botes/">Botes de basura</a></li>
										</ul>
									</div>
								</div>
								<!-- Form inside table wrapper -->
								<div class="table-responsive">
									<table class="table table-bordered">
										<tr>
											<td>Código</td>
											<td><?php echo get_post_meta($post->ID, 'codigo', true);  ?></td>
										</tr>
										<tr>
											<td>Disponibilidad</td>
											<td><?php echo get_post_meta($post->ID, 'disponibilidad', true);  ?></td>
										</tr>
										<tr>
											<td>Presentación</td>
											<td><?php echo get_post_meta($post->ID, 'presentacion', true);  ?></td>
										</tr>
										<tr>
											<td>Marca</td>
											<td><?php echo get_post_meta($post->ID, 'marca', true);  ?></td>
										</tr>
										<tr>
											<td>Teléfono</td>
											<td><?php echo get_post_meta($post->ID, 'telefono', true);  ?></td>
										</tr>
										<tr>
											<td style="vertical-align:middle">Ficha técnica</td>
											<td><div class="form-group text-center" style="margin-bottom:0px;">
											<?php 
												$file = get_field('pdf');
												if($file):
											?>
												<a href="<?php echo $file; ?>" download="Ficha-Tecnica-<?php the_title(); ?>" class="btn btn-danger btn-sm">Descargar</a>
											<?php 
												else:
											?>
												<a class="btn btn-danger btn-sm" disabled>No disponible</a>
											<?php
												endif;
											 ?>
											</div></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
					}
				}
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
