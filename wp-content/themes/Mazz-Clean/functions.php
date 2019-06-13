<?php 

	// Menu
	register_nav_menus( array(
		'menu' => 'Menu header',
	));

	// Soporte a imagenes destacadas

	add_theme_support('post-thumbnails');
	add_image_size('thb-index', 300, 400,true);

	// Widgets

	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar-1',
		'before_widget' => '<div class="col-sm-6 col-md-12"><div class="sidebar-widget">',
		'after_widget' => '</div></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

	// Comentatios

	function custom_comments($comment, $args, $depth){
		$GLOBALS['comment'] = $comment; ?>
			<li <?php comment_class('comment'); ?> id="li-comment-<?php comment_ID() ?>">
				<div id="comment-<?php comment_ID(); ?>">
					<div class="comment-author vcard">
						<div class="pull-left"><?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?></div>
						<?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
					</div>
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
						<br />
					<?php endif; ?>
					<div class="comment-meta commentmetadata cmeta"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf( __('%1$s at %2$s'), get_comment_date(), get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
						<?php comment_text(); ?>
					<div class="reply"><?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div>
				</div>
			</li>
		<?php
	}

	function apk_modify_comment_field($fields){
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );
		$fields =  array(
		  'author' =>
		    '<div class="form-group">
		    	<label for="author" class="col-lg-2 control-label">' . __( 'Nombre', 'domainreference' ) . '</label> ' .
		    	( $req ? '' : '' ) .
		    	'<div class="col-lg-10">
		    		<input id="author" placeholder="Nombre" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		    		'"' . $aria_req . ' />
		    	</div>
		    </div>',

		  'email' =>
		    '<div class="form-group">
		    	<label for="email" class="col-lg-2 control-label">' . __( 'Email', 'domainreference' ) . '</label> ' .
		    	( $req ? '' : '' ) .
		    	'<div class="col-lg-10">
		    		<input id="email" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		    		'"' . $aria_req . ' />
		    	</div>
		    </div>',
		);
		return $fields;
	}

	add_filter('comment_form_default_fields', 'apk_modify_comment_field');

 ?>
