<?php get_header('sector'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="inner-page" style="background: url('<?php echo get_field('imagen_de_fondo'); ?>');background-size: cover;background-repeat: no-repeat;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 style="color:<?php echo get_field('title_color'); ?>;"><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-7">
					<!-- CONTENT -->
					<?php the_content(); ?>
				</div>
				<div class="col-sm-12 col-md-5">
					<div class="booking-form">
						<!-- ACTION -->
						<form action="<?php echo get_field('action_mc'); ?>" role="form" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<label for="mce-FNAME">Nombre (S)</label>
							<div class="form-group">
								<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME">
							</div>
							<label for="mce-LNAME">Apellido (S)</label>
							<div class="form-group">
								<input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME">
							</div>
							<label for="mce-EMAIL">Correo electrónico</label>
							<div class="form-group">
								<input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL">
							</div>
							<label for="mce-PHONE">Teléfono</label>
							<div class="form-group">
								<input type="text" value="" name="PHONE" class="form-control" id="mce-PHONE">
							</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="<?php echo get_field('campaign_mc'); ?> " tabindex="-1" value=""></div>
							<button class="btn btn-danger btn-sm" type="submit">Confirmar</button>
							<button class="btn btn-default btn-sm" type="reset">Borrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
<?php get_footer('sector'); ?>