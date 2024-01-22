<?php 
/*
    Plugin Name: Gasol Web - Post Types
    Plugin URI: www.linkedin.com/in/maximiliano-adrian-teodosio-0b54b198
    Descripcion: Añade Post Types al sitio de Gasol Web
    Version: 1.0.0
    Author: Maximiliano Teodosio
    Author URI: www.linkedin.com/in/maximiliano-adrian-teodosio-0b54b198
    Text Domain: gasolplatense.com.ar
*/

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function gasolplatense_post_type() {

	// Hechos
	$labels = array(
		'name'                  => _x( 'Hechos', 'Post Type General Name', 'gasolplatense.com.ar' ),
		'singular_name'         => _x( 'Hecho', 'Post Type Singular Name', 'gasolplatense.com.ar' ),
		'menu_name'             => __( 'Hechos', 'gasolplatense.com.ar' ),
		'name_admin_bar'        => __( 'Hecho', 'gasolplatense.com.ar' ),
		'archives'              => __( 'Archivo', 'gasolplatense.com.ar' ),
		'attributes'            => __( 'Atributos', 'gasolplatense.com.ar' ),
		'parent_item_colon'     => __( 'Hecho Padre', 'gasolplatense.com.ar' ),
		'all_items'             => __( 'Todas Los Hechos', 'gasolplatense.com.ar' ),
		'add_new_item'          => __( 'Agregar Hecho', 'gasolplatense.com.ar' ),
		'add_new'               => __( 'Agregar Hecho', 'gasolplatense.com.ar' ),
		'new_item'              => __( 'Nueva Hecho', 'gasolplatense.com.ar' ),
		'edit_item'             => __( 'Editar Hecho', 'gasolplatense.com.ar' ),
		'update_item'           => __( 'Actualizar Hecho', 'gasolplatense.com.ar' ),
		'view_item'             => __( 'Ver Hecho', 'gasolplatense.com.ar' ),
		'view_items'            => __( 'Ver Hechos', 'gasolplatense.com.ar' ),
		'search_items'          => __( 'Buscar Hecho', 'gasolplatense.com.ar' ),
		'not_found'             => __( 'No Encontrado', 'gasolplatense.com.ar' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gasolplatense.com.ar' ),
		'insert_into_item'      => __( 'Insertar en Hecho', 'gasolplatense.com.ar' ),
		'uploaded_to_this_item' => __( 'Agregado en Hecho', 'gasolplatense.com.ar' ),
		'items_list'            => __( 'Lista de Hechos', 'gasolplatense.com.ar' ),
		'items_list_navigation' => __( 'Navegación de Hechos', 'gasolplatense.com.ar' ),
		'filter_items_list'     => __( 'Filtrar Hechos', 'gasolplatense.com.ar' ),
	);
	$args = array(
		'label'                 => __( 'Hecho', 'gasolplatense.com.ar' ),
		'description'           => __( 'Hechos para el Sitio Web', 'gasolplatense.com.ar' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-clock',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	
	//Proveeedores
	$labels2 = array(
		'name'                  => _x( 'Proveedores', 'Post Type General Name', 'gasolplatense.com.ar' ),
		'singular_name'         => _x( 'Proveedor', 'Post Type Singular Name', 'gasolplatense.com.ar' ),
		'menu_name'             => __( 'Proveedores', 'gasolplatense.com.ar' ),
		'name_admin_bar'        => __( 'Proveedor', 'gasolplatense.com.ar' ),
		'archives'              => __( 'Archivo', 'gasolplatense.com.ar' ),
		'attributes'            => __( 'Atributos', 'gasolplatense.com.ar' ),
		'parent_item_colon'     => __( 'Proveedor Padre', 'gasolplatense.com.ar' ),
		'all_items'             => __( 'Todos Los Proveedores', 'gasolplatense.com.ar' ),
		'add_new_item'          => __( 'Agregar Proveedor', 'gasolplatense.com.ar' ),
		'add_new'               => __( 'Agregar Proveedor', 'gasolplatense.com.ar' ),
		'new_item'              => __( 'Nueva Proveedor', 'gasolplatense.com.ar' ),
		'edit_item'             => __( 'Editar Proveedor', 'gasolplatense.com.ar' ),
		'update_item'           => __( 'Actualizar Proveedor', 'gasolplatense.com.ar' ),
		'view_item'             => __( 'Ver Proveedor', 'gasolplatense.com.ar' ),
		'view_items'            => __( 'Ver Proveedores', 'gasolplatense.com.ar' ),
		'search_items'          => __( 'Buscar Proveedor', 'gasolplatense.com.ar' ),
		'not_found'             => __( 'No Encontrado', 'gasolplatense.com.ar' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gasolplatense.com.ar' ),
		'insert_into_item'      => __( 'Insertar en Proveedor', 'gasolplatense.com.ar' ),
		'uploaded_to_this_item' => __( 'Agregado en Proveedor', 'gasolplatense.com.ar' ),
		'items_list'            => __( 'Lista de Proveedores', 'gasolplatense.com.ar' ),
		'items_list_navigation' => __( 'Navegación de Proveedores', 'gasolplatense.com.ar' ),
		'filter_items_list'     => __( 'Filtrar Proveedores', 'gasolplatense.com.ar' ),
	);
	$args2 = array(
		'label'                 => __( 'Proveedor', 'gasolplatense.com.ar' ),
		'description'           => __( 'Proveedores para el Sitio Web', 'gasolplatense.com.ar' ),
		'labels'                => $labels2,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-products',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gasolplatense_hechos', $args );
	register_post_type( 'gasol_proveedores', $args2 );
}
add_action( 'init', 'gasolplatense_post_type', 0);

?>