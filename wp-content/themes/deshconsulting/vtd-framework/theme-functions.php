<?php
/** @post_type slider_list **/
function vtd_wp_custom_post_type_slider_list() {
	$labels = array(
		'name'               => _x( 'Slider List', 'post type general name' ),
		'singular_name'      => _x( 'Slider List', 'post type singular name' ),
		'add_new'            => _x( 'Add Slide List', 'Description' ),
		'add_new_item'       => __( 'Add New Slide List' ),
		'edit_item'          => __( 'Edit Slide List' ),
		'new_item'           => __( 'New Slide List' ),
		'all_items'          => __( 'All Slide List' ),
		'view_item'          => __( 'View Slide List' ),
		'search_items'       => __( 'Search Slides List' ),
		'not_found'          => __( 'No Slides List found' ),
		'not_found_in_trash' => __( 'No Slides List found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Slider'
	);
	$args = array(
		'labels'        		=> $labels,
		'description'   		=> 'Slider List',
		'exclude_from_search' 	=> true,
		'public'        		=> false,
		'show_ui'        		=> true,
		'capability_type'  		=> 'post',
		'map_meta_cap'          => true,
		'publicly_queryable'    => false,
		'menu_icon'				=> 'dashicons-format-gallery',
		'menu_position' 		=> 6,
		'supports'      		=> array( 'title', 'page-attributes','editor', 'thumbnail' ),
		'has_archive'   		=> false,
		'show_in_nav_menus'		=> false,
		'hierarchical'          => false,
		'rewrite'               => false,
		'query_var'             => false
	);   
	register_post_type( 'slider_list', $args );	
}
add_action( 'init', 'vtd_wp_custom_post_type_slider_list' );
/** @post_type Services List **/
function vtd_wp_custom_post_type_service_list() {
	$labels = array(
		'name'               => _x( 'Service', 'post type general name' ),
		'singular_name'      => _x( 'Service', 'post type singular name' ),
		'add_new'            => _x( 'Add Service', 'Description' ),
		'add_new_item'       => __( 'Add New Service' ),
		'edit_item'          => __( 'Edit Service' ),
		'new_item'           => __( 'New Service' ),
		'all_items'          => __( 'All Service' ),
		'view_item'          => __( 'View Service' ),
		'search_items'       => __( 'Search Service' ),
		'not_found'          => __( 'No Service found' ),
		'not_found_in_trash' => __( 'No Service found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Service'
	);
	$args = array(
		'labels'        		=> $labels,
		'description'   		=> 'Service',
		'exclude_from_search' 	=> true,
		'public'        		=> true,
		'show_ui'        		=> true,
		'capability_type'  		=> 'post',
		'map_meta_cap'          => true,
		'publicly_queryable'    => true,
		'menu_icon'				=> 'dashicons-list-view',
		'menu_position' 		=> 7,
		'supports'      		=> array( 'title', 'page-attributes','editor', 'thumbnail' ),
		'has_archive'   		=> true,
		'show_in_nav_menus'		=> true,
		'hierarchical'          => true,
		'rewrite'               => true,
		'query_var'             => true
	);   
	register_post_type( 'service_list', $args );	
}
add_action( 'init', 'vtd_wp_custom_post_type_service_list' );

?>