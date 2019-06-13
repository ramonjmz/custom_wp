<?php get_header(); ?>

<!-- Banner Start -->
			
<div class="banner padd" style="background: url('<?php bloginfo('template_url');?>/img/categories/<?php echo rand (1,5) ?>.png') center center;">
	<div class="container">		
		<!-- Heading -->
		<h2 class="white">Blog</h2>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url(); ?>">Inicio</a></li>
			<li><a href="<?php echo site_url(); ?>/ideas-y-tips">Blog</a></li>
			<li class="active"><?php the_title(); ?></li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>

<!-- Banner End -->

<!-- Inner Content -->
	<div class="inner-page padd">
	
		<!-- Blog Start -->
		<div class="blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<!-- The new post done by user's all in the post block -->
						<div class="blog-post">
							<?php 
								if ( have_posts() ){
									while ( have_posts() ){
										the_post();
							?>	
								<div class="single">
									<!-- Post Images -->
									<div class="blog-img pull-left">
										<?php the_post_thumbnail('thb-index', array('class' => 'img-responsive img-thumbnail', 'style' => 'margin-bottom:0;')); ?>
									</div>
									<!-- Meta for this block -->
									<div class="meta">
										<i class="fa fa-calendar"></i>&nbsp; <?php the_date('F j,y'); ?>
										<span class="pull-right"><i class="fa fa-comment"></i> <a href="#">&nbsp; <?php comments_number(); ?></a></span>
									</div>
									<!-- Heading of the  post -->
									<h3><?php the_title(); ?></h3>
									<hr /><!-- Horizontal line -->
									<!-- Paragraph -->
									<?php the_content(); ?>
									<div class="clearfix"></div>
								</div>
							<?php
									}
								}
							?>
							<?php comments_template(); ?>
						</div><!--/ Blog post class end -->
					</div> <!--/ Main blog column end -->
					<?php get_sidebar(); ?>

				</div><!--/ Row end -->
			</div>
		</div>
				
				<!-- Blog End -->
	</div><!-- / Inner Page Content End -->

<?php get_footer(); ?>
