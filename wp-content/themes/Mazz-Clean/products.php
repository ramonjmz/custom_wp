<?php 
/*
Template Name: Productos
*/
get_header(); ?>

<!-- Banner Start -->
			
<div class="banner" style="background: url('<?php bloginfo('template_url');?>/img/categories/<?php echo rand (1,5) ?>.png') center center;">
	<div class="container">
		<!-- Heading -->
		<h2 class="green" style="margin-top:40px;">Donde comprar?</h2>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url(); ?>">Inicio</a></li>
			<li class="active">Productos</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>

<!-- Banner End -->

<!-- Dishes Start -->
					
<div class="inner-page dishes padd">
	<div class="container">
		<!-- Default Heading -->
		<div class="default-heading">
			<!-- Heading -->
			<h2>Proceso de compra</h2>
			<!-- Border -->
			<div class="border"></div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6">	
				<div class="dishes-item-container">
					<!-- Image Frame -->
					<div class="img-frame">
						<!-- Image -->
						<img src="<?php bloginfo('template_url');?>/img/400.png" class="img-responsive" alt="" />
						<!-- Block for on hover effect to image -->
						<div class="img-frame-hover">
							<!-- Hover Icon -->
							<a data-toggle="modal" href="#paso1"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- Dish Details -->
					<div class="dish-details">
						<!-- Heading -->
						<h3>Paso 1</h3>
						<!-- Paragraph -->
						<!-- <p>At vero eos et accusal gusto for ides residuum lores.</p> -->
						<!-- Button -->
						<!-- <a href="#" class="btn btn-danger btn-sm">Leer mas</a> -->
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="dishes-item-container">
					<!-- Image Frame -->
					<div class="img-frame">
						<!-- Image -->
						<img src="<?php bloginfo('template_url');?>/img/400.png" class="img-responsive" alt="" />
						<!-- Block for on hover effect to image -->
						<div class="img-frame-hover">
							<!-- Hover Icon -->
							<a data-toggle="modal" href="#paso2"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- Dish Details -->
					<div class="dish-details">
						<!-- Heading -->
						<h3>Paso 2</h3>
						<!-- Paragraph -->
						<!-- <p>At vero eos et accusal gusto for ides residuum lores.</p> -->
						<!-- Button -->
						<!-- <a href="#" class="btn btn-danger btn-sm">Leer mas</a> -->
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="dishes-item-container">
					<!-- Image Frame -->
					<div class="img-frame">
						<!-- Image -->
						<img src="<?php bloginfo('template_url');?>/img/400.png" class="img-responsive" alt="" />
						<!-- Block for on hover effect to image -->
						<div class="img-frame-hover">
							<!-- Hover Icon -->
							<a data-toggle="modal" href="#paso3"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- Dish Details -->
					<div class="dish-details">
						<!-- Heading -->
						<h3>Paso 3</h3>
						<!-- Paragraph -->
						<!-- <p>At vero eos et accusal gusto for ides residuum lores.</p> -->
						<!-- Button -->
						<!-- <a href="#" class="btn btn-danger btn-sm">Leer mas</a> -->
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="dishes-item-container">
					<!-- Image Frame -->
					<div class="img-frame">
						<!-- Image -->
						<img src="<?php bloginfo('template_url');?>/img/400.png" class="img-responsive" alt="" />
						<!-- Block for on hover effect to image -->
						<div class="img-frame-hover">
							<!-- Hover Icon -->
							<a data-toggle="modal" href="#paso4"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<!-- Dish Details -->
					<div class="dish-details">
						<!-- Heading -->
						<h3>Paso 4</h3>
						<!-- Paragraph -->
						<!-- <p>At vero eos et accusal gusto for ides residuum lores.</p> -->
						<!-- Button -->
						<!-- <a href="#" class="btn btn-danger btn-sm">Leer mas</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="nutrition">
		<div class="container">
			<div class="row">
				<div class="default-heading">
					<!-- Heading -->
					<h2>Porque comprar con nosotros?</h2>
					<!-- Paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<!-- Border -->
					<div class="border"></div>
				</div>
				<div class="col-md-4 col-sm-4">
					<!-- Nutrition Item -->
					<div class="nutrition-item">
						<!-- Heading -->
						<h4>Producto 1</h4>
						<!-- Image -->
						<img class="img-responsive img-thumbnail" src="<?php bloginfo('template_url');?>/img/products/detergente.jpg" alt="" />
						<!-- Paragraph -->
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercise.</p>
						<!-- Nutrition information table -->
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th>Propiedad</th>
									<th>Nosotros</th>
									<th>Competencia</th>
								</tr>
								<tbody>
									<tr>
										<td>Propiedad 1</td>
										<td>200</td>
										<td>500</td>
									</tr>
									<tr>
										<td>Propiedad 2</td>
										<td>9g</td>
										<td>15g</td>
									</tr>
									<tr>
										<td>Propiedad 3</td>
										<td>33%</td>
										<td>15%</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><!--/ Nutrition info end  -->
				</div><!--/ Column end  -->
				<div class="col-md-4 col-sm-4">
					<!-- Nutrition Item -->
					<div class="nutrition-item">
						<!-- Heading -->
						<h4>Producto 2</h4>
						<!-- Image -->
						<img class="img-responsive img-thumbnail" src="<?php bloginfo('template_url');?>/img/products/detergente.jpg" alt="" />
						<!-- Paragraph -->
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercise.</p>
						<!-- Nutrition information table -->
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th>Propiedad</th>
									<th>Nosotros</th>
									<th>Competencia</th>
								</tr>
								<tbody>
									<tr>
										<td>Propiedad 1</td>
										<td>200</td>
										<td>500</td>
									</tr>
									<tr>
										<td>Propiedad 2</td>
										<td>9g</td>
										<td>15g</td>
									</tr>
									<tr>
										<td>Propiedad 3</td>
										<td>33%</td>
										<td>15%</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><!--/ Nutrition info end  -->
				</div><!--/ Column end  -->
				<div class="col-md-4 col-sm-4">
					<!-- Nutrition Item -->
					<div class="nutrition-item">
						<!-- Heading -->
						<h4>Producto 3</h4>
						<!-- Image -->
						<img class="img-responsive img-thumbnail" src="<?php bloginfo('template_url');?>/img/products/detergente.jpg" alt="" />
						<!-- Paragraph -->
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercise.</p>
						<!-- Nutrition information table -->
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th>Propiedad</th>
									<th>Nosotros</th>
									<th>Competencia</th>
								</tr>
								<tbody>
									<tr>
										<td>Propiedad 1</td>
										<td>200</td>
										<td>500</td>
									</tr>
									<tr>
										<td>Propiedad 2</td>
										<td>9g</td>
										<td>15g</td>
									</tr>
									<tr>
										<td>Propiedad 3</td>
										<td>33%</td>
										<td>15%</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><!--/ Nutrition info end  -->
				</div><!--/ Column end  -->
			</div>
		</div>
	</div>

</div>

<!-- Dishes End -->

<div class="modal fade" id="paso1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Paso 1</h4>
			</div>
			<div class="modal-body">
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat eius iure quia veniam minima possimus, sit, sint consequatur ullam qui voluptates, culpa voluptatibus vitae labore. Impedit ratione alias cum corporis.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="paso2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Paso 2</h4>
			</div>
			<div class="modal-body">
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat eius iure quia veniam minima possimus, sit, sint consequatur ullam qui voluptates, culpa voluptatibus vitae labore. Impedit ratione alias cum corporis.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="paso3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Paso 3</h4>
			</div>
			<div class="modal-body">
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat eius iure quia veniam minima possimus, sit, sint consequatur ullam qui voluptates, culpa voluptatibus vitae labore. Impedit ratione alias cum corporis.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="paso4" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Paso 4</h4>
			</div>
			<div class="modal-body">
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat eius iure quia veniam minima possimus, sit, sint consequatur ullam qui voluptates, culpa voluptatibus vitae labore. Impedit ratione alias cum corporis.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<!-- Table comparative -->



<!-- End of Table comparative -->

<?php get_footer(); ?>
