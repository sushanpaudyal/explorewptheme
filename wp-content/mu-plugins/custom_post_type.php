<?php

add_action('init', 'explore_slider_post_type', 0);
add_action('init', 'explore_feature_post_type', 0);
add_action('init', 'explore_instructor_post_type', 0);
add_action('init', 'explore_partner_post_type', 0);





function explore_slider_post_type() {
   // Labels for the Post Type
 $labels = array(
   'name'                => _x( 'Sliders', 'Post Type General Name', 'explore' ),
   'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'explore' ),
   'menu_name'           => __( 'Sliders', 'explore' ),
   'parent_item_colon'   => __( 'Parent Slider', 'explore' ),
   'all_items'           => __( 'All Sliders', 'explore' ),
   'view_item'           => __( 'View Slider', 'explore' ),
   'add_new_item'        => __( 'Add New Slider', 'explore' ),
   'add_new'             => __( 'Add New Slider', 'explore' ),
   'edit_item'           => __( 'Edit Slider', 'explore' ),
   'update_item'         => __( 'Update Slider', 'explore' ),
   'search_items'        => __( 'Search Slider', 'explore' ),
   'not_found'           => __( 'No sliders found', 'explore' ),
   'not_found_in_trash'  => __( 'Not found in trash', 'explore' ),
 );
 // Another Customizations
 $args = array(
     'label'   => __('Sliders','explore' ),
     'description' => __('Sliders for Explore', 'explore'),
     'labels'  => $labels,
     'supports' => array('title', 'thumbnail', 'editor'),
     'hierarchical' => false,
     'public' => true,
     'show_ui' => true,
     'show_in_menus' => true,
     'show_in_nav_menus' => true,
     'show_in_admin_bar' => true,
     'menu_position' => 5,
     'menu_icon' => 'dashicons-format-gallery',
     'can_export' => true,
     'has_archive' => true,
     'exclude_from_search' => false,
     'capability_type' => 'page',
 );
 // register the post Type
 register_post_type( 'sliders', $args);
}





function explore_feature_post_type() {
   // Labels for the Post Type
 $labels = array(
   'name'                => _x( 'Features', 'Post Type General Name', 'explore' ),
   'singular_name'       => _x( 'Feature', 'Post Type Singular Name', 'explore' ),
   'menu_name'           => __( 'Features', 'explore' ),
   'parent_item_colon'   => __( 'Parent Feature', 'explore' ),
   'all_items'           => __( 'All Features', 'explore' ),
   'view_item'           => __( 'View Feature', 'explore' ),
   'add_new_item'        => __( 'Add New Feature', 'explore' ),
   'add_new'             => __( 'Add New Feature', 'explore' ),
   'edit_item'           => __( 'Edit Feature', 'explore' ),
   'update_item'         => __( 'Update Feature', 'explore' ),
   'search_items'        => __( 'Search Feature', 'explore' ),
   'not_found'           => __( 'No features found', 'explore' ),
   'not_found_in_trash'  => __( 'Not found in trash', 'explore' ),
 );
 // Another Customizations
 $args = array(
     'label'   => __('Features','explore' ),
     'description' => __('Features for Explore', 'explore'),
     'labels'  => $labels,
     'supports' => array('title', 'thumbnail', 'editor'),
     'hierarchical' => false,
     'public' => true,
     'show_ui' => true,
     'show_in_menus' => true,
     'show_in_nav_menus' => true,
     'show_in_admin_bar' => true,
     'menu_position' => 5,
     'menu_icon' => 'dashicons-admin-tools',
     'can_export' => true,
     'has_archive' => true,
     'exclude_from_search' => false,
     'capability_type' => 'page',
 );
 // register the post Type
 register_post_type( 'features', $args);
}




function explore_instructor_post_type() {
   // Labels for the Post Type
 $labels = array(
   'name'                => _x( 'Instructors', 'Post Type General Name', 'explore' ),
   'singular_name'       => _x( 'Instructor', 'Post Type Singular Name', 'explore' ),
   'menu_name'           => __( 'Instructors', 'explore' ),
   'parent_item_colon'   => __( 'Parent Instructor', 'explore' ),
   'all_items'           => __( 'All Instructors', 'explore' ),
   'view_item'           => __( 'View Instructor', 'explore' ),
   'add_new_item'        => __( 'Add New Instructor', 'explore' ),
   'add_new'             => __( 'Add New Instructor', 'explore' ),
   'edit_item'           => __( 'Edit Instructor', 'explore' ),
   'update_item'         => __( 'Update Instructor', 'explore' ),
   'search_items'        => __( 'Search Instructor', 'explore' ),
   'not_found'           => __( 'No instructor found', 'explore' ),
   'not_found_in_trash'  => __( 'Not found in trash', 'explore' ),
 );
 // Another Customizations
 $args = array(
     'label'   => __('Instructors','explore' ),
     'description' => __('Instructors for Explore', 'explore'),
     'labels'  => $labels,
     'supports' => array('title', 'thumbnail', 'editor'),
     'hierarchical' => false,
     'public' => true,
     'show_ui' => true,
     'show_in_menus' => true,
     'show_in_nav_menus' => true,
     'show_in_admin_bar' => true,
     'menu_position' => 5,
     'menu_icon' => 'dashicons-welcome-learn-more',
     'can_export' => true,
     'has_archive' => true,
     'exclude_from_search' => false,
     'capability_type' => 'page',
 );
 // register the post Type
 register_post_type( 'instructors', $args);
}



function explore_partner_post_type() {
   // Labels for the Post Type
 $labels = array(
   'name'                => _x( 'Partners', 'Post Type General Name', 'explore' ),
   'singular_name'       => _x( 'Partner', 'Post Type Singular Name', 'explore' ),
   'menu_name'           => __( 'Partners', 'explore' ),
   'parent_item_colon'   => __( 'Parent Partner', 'explore' ),
   'all_items'           => __( 'All Partners', 'explore' ),
   'view_item'           => __( 'View Partner', 'explore' ),
   'add_new_item'        => __( 'Add New Partner', 'explore' ),
   'add_new'             => __( 'Add New Partner', 'explore' ),
   'edit_item'           => __( 'Edit Partner', 'explore' ),
   'update_item'         => __( 'Update Partner', 'explore' ),
   'search_items'        => __( 'Search Partner', 'explore' ),
   'not_found'           => __( 'No partners found', 'explore' ),
   'not_found_in_trash'  => __( 'Not found in trash', 'explore' ),
 );
 // Another Customizations
 $args = array(
     'label'   => __('Partners','explore' ),
     'description' => __('Partners for Explore', 'explore'),
     'labels'  => $labels,
     'supports' => array('title', 'thumbnail'),
     'hierarchical' => false,
     'public' => true,
     'show_ui' => true,
     'show_in_menus' => true,
     'show_in_nav_menus' => true,
     'show_in_admin_bar' => true,
     'menu_position' => 5,
     'menu_icon' => 'dashicons-groups',
     'can_export' => true,
     'has_archive' => true,
     'exclude_from_search' => false,
     'capability_type' => 'page',
 );
 // register the post Type
 register_post_type( 'partners', $args);
}
 ?>
