<?php
// Register Custom Post Type

if ( ! function_exists('sector_mazz_post_type') ) {

function sector_mazz_post_type() {

	$labels = array(
		'name'                  => _x( 'Sectores', 'Post Type General Name', 'mazz' ),
		'singular_name'         => _x( 'Sector', 'Post Type Singular Name', 'mazz' ),
		'menu_name'             => __( 'Sectores', 'mazz' ),
		'name_admin_bar'        => __( 'Sectores', 'mazz' ),
		'parent_item_colon'     => __( 'Tipo:', 'mazz' ),
		'all_items'             => __( 'Todos', 'mazz' ),
		'add_new_item'          => __( 'Agregar nueva landing page', 'mazz' ),
		'add_new'               => __( 'Agregar nueva', 'mazz' ),
		'new_item'              => __( 'Nueva pagina', 'mazz' ),
		'edit_item'             => __( 'Editar Landing Page', 'mazz' ),
		'update_item'           => __( 'Actualizar Landing Page', 'mazz' ),
		'view_item'             => __( 'Ver Landing Page', 'mazz' ),
		'search_items'          => __( 'Buscar Landing Page', 'mazz' ),
		'not_found'             => __( 'No se han encontrado resultados', 'mazz' ),
		'not_found_in_trash'    => __( 'No hay nada en la papelera', 'mazz' ),
		
	);
	$args = array(
		'label'                 => __( 'sectores', 'mazz' ),
		'description'           => __( 'Sectores', 'mazz' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'sector', $args );

}
add_action( 'init', 'sector_mazz_post_type', 0 );

}