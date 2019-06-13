<?php
/*
* Creacion de custom post type productos
*/
if ( ! function_exists('mazz_products_post_type') ) {

// Register Custom Post Type
function mazz_products_post_type() {

	$labels = array(
		'name'                => _x( 'Productos', 'Post Type General Name', 'mazz' ),
		'singular_name'       => _x( 'Producto', 'Post Type Singular Name', 'mazz' ),
		'menu_name'           => __( 'Productos', 'mazz' ),
		'name_admin_bar'      => __( 'Productos', 'mazz' ),
		'parent_item_colon'   => __( 'Tipo:', 'mazz' ),
		'all_items'           => __( 'Todos', 'mazz' ),
		'add_new_item'        => __( 'Agregar nuevo producto', 'mazz' ),
		'add_new'             => __( 'Agregar nuevo', 'mazz' ),
		'new_item'            => __( 'New Item', 'mazz' ),
		'edit_item'           => __( 'Editar producto', 'mazz' ),
		'update_item'         => __( 'Actualizar producto', 'mazz' ),
		'view_item'           => __( 'Ver producto', 'mazz' ),
		'search_items'        => __( 'Buscar producto', 'mazz' ),
		'not_found'           => __( 'No se han encontrado resultados', 'mazz' ),
		'not_found_in_trash'  => __( 'No hay nada en la papelera', 'mazz' ),
	);
	$args = array(
		'label'               => __( 'productos', 'mazz' ),
		'description'         => __( 'Catalogo de productos Mazz Clean', 'mazz' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-cart',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'productos', $args );

}

// Hook into the 'init' action
add_action( 'init', 'mazz_products_post_type', 0 );

}

/*
* Custom taxonomy para productos
*/

if ( ! function_exists( 'mazz_categorias_producto_taxonomy' ) ) {

// Register Custom Taxonomy
function mazz_categorias_producto_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Categorias de productos', 'Taxonomy General Name', 'mazz' ),
		'singular_name'              => _x( 'Categoria de producto', 'Taxonomy Singular Name', 'mazz' ),
		'menu_name'                  => __( 'Categorias de productos', 'mazz' ),
		'all_items'                  => __( 'Todas', 'mazz' ),
		'parent_item'                => __( 'Superior', 'mazz' ),
		'parent_item_colon'          => __( 'Superior:', 'mazz' ),
		'new_item_name'              => __( 'Nueva categoria', 'mazz' ),
		'add_new_item'               => __( 'Agregar nueva categoria', 'mazz' ),
		'edit_item'                  => __( 'Editar categoria', 'mazz' ),
		'update_item'                => __( 'Actualizar categoria', 'mazz' ),
		'view_item'                  => __( 'Ver categoria', 'mazz' ),
		'separate_items_with_commas' => __( 'Separar categorias con coma', 'mazz' ),
		'add_or_remove_items'        => __( 'Agregar o eliminar categorias', 'mazz' ),
		'choose_from_most_used'      => __( 'Elegir entre las mas usadas ', 'mazz' ),
		'popular_items'              => __( 'Categorias populares', 'mazz' ),
		'search_items'               => __( 'Buscar categorias de productos', 'mazz' ),
		'not_found'                  => __( 'No encontrado', 'mazz' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'categorias_producto', 'productos', $args );

}

// Hook into the 'init' action
add_action( 'init', 'mazz_categorias_producto_taxonomy', 0 );

}
