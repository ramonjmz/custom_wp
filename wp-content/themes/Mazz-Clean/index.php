<?php
get_header();?>

<!-- Banner Start -->
			
<div class="banner" style="background: url('<?php bloginfo('template_url');?>/img/categories/<?php echo rand (1,5) ?>.png') center center;">
	<div class="container">
		<!-- Heading -->
		<h2 class="green" style="margin-top:40px;">Blog</h2>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url(); ?>">Inicio</a></li>
			<li class="active">Blog</li>
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
						<!-- Entry is the one post for each user -->
						<?php //query_posts("paged=$paged"); ?>
						<?php 
						if ( have_posts() ){
							while ( have_posts() ){
								the_post();
						?>
							<!-- Entry is the one post for each user -->
							<div class="entry">
								<!-- Post Images -->
								<div class="blog-img pull-left">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thb-index', array('class' => 'img-responsive img-thumbnail')); ?></a>
								</div>
								<!-- Meta for this block -->
								<div class="meta">
									<i class="fa fa-calendar"></i>&nbsp;<?php the_date('F j,y'); ?>
									<span class="pull-right"><i class="fa fa-comment"></i> <a href="#">&nbsp;<?php comments_number(); ?></a></span>
								</div>
								<!-- Heading of the  post -->
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
								<hr /><!-- Horizontal line -->
								<!-- Paragraph -->
								<p><?php the_excerpt(); ?></p>
								<div class="clearfix"></div>
							</div>
						<?php
							}
						}
						?>
					</div>
					<ul class="pager">
						<li class="pull-left"><?php next_posts_link('<- Post anteriores'); ?></li>
						<li class="pull-right"><?php previous_posts_link('Post Siguientes ->'); ?></li>
					</ul>
				</div> <!--/ Main blog column end -->
				<?php get_sidebar(); ?>
			</div><!--/ Row end -->
		</div>
	</div>
	
	<!-- Blog End -->

</div><!-- / Inner Page Content End -->	


<?php get_footer(); ?>
