<!-- Comment section -->						  
	<div class="comments">
		<div class="title"><h5><?php comments_number( 'No hay comentarios', 'Un Comentario', '% Comentarios' ); ?></h5></div>
<?php if(have_comments()): ?>
		<ul class="comment-list">
			<?php wp_list_comments('callback=custom_comments'); ?>
		</ul>
<?php endif; ?>
	</div><!--/ Comment section end -->
<?php
	$args = array(
		'label_submit' => 'Comentar',
		'class_submit'      => 'btn btn-danger btn-sm',
		'title_reply' => '<div class="title"><h5>Escribe un comentario</h5></div>',
		'comment_field' => '<div class="form-group"><label class="control-label col-lg-2" for="comment">Comentario</label><div class="col-lg-10"><textarea class="form-control" id="comment" rows="3" name="comment" cols="45" aria-required="true" placeholder="' . __('Escribe tu opinión...', 'apk') . '"></textarea></div></div>',
		'comment_notes_after' => '',
		'comment_notes_before' => '',
		'submit_field'         => '<div class="form-group"><div class="col-lg-offset-2 col-lg-10">%1$s %2$s</div></div>',
	); ?>
	<div class="respond well" style="overflow:hidden;">
		<?php comment_form($args); ?>
	</div>
	
