<?php
/*
* Plugin Name: Media Creators
* Description: Creates a Custom Taxonomy for media creators. This is tailored towards students in BMCC's Media Arts and Technology Department
* Version: 0.1
* Author: Chris Stein
*/

// hook into the init action and call create_course_taxonomies when it fires
add_action( 'init', 'create_creator_taxonomies', 0 );
 
// create two taxonomies, student and course for the post type "post"
function create_creator_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Courses', 'taxonomy general name' ),
        'singular_name'     => _x( 'Course', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Courses' ),
        'all_items'         => __( 'All Courses' ),
        'parent_item'       => __( 'Parent Course' ),
        'parent_item_colon' => __( 'Parent Course:' ),
        'edit_item'         => __( 'Edit Course' ),
        'update_item'       => __( 'Update Course' ),
        'add_new_item'      => __( 'Add New Course' ),
        'new_item_name'     => __( 'New Course Name' ),
        'menu_name'         => __( 'Course' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'course' ),
    );
 
    register_taxonomy( 'course', array( 'post' ), $args );
    
    
    
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Students', 'taxonomy general name' ),
        'singular_name'     => _x( 'Student', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Students' ),
        'popular_items'     => __( 'Popular Students' ),
        'all_items'         => __( 'All Students' ),
        'parent_item'       => null,
        'parent_item_colon' => null,
        'edit_item'         => __( 'Edit Student' ),
        'update_item'       => __( 'Update Student' ),
        'add_new_item'      => __( 'Add New Student' ),
        'new_item_name'     => __( 'New Student Name' ),
        'separate_items_with_commas' => null,
22
    'add_or_remove_items'   => __( 'Add or remove students' ),
23
    'choose_from_most_used' => __( 'Choose from the already used students' ),
        'menu_name'         => __( 'Student' ),
    );
 
//    $args = array(
//        'hierarchical'      => false,
//        'labels'            => $labels,
//        'show_ui'           => true,
//        'show_admin_column' => true,
//        'query_var'         => true,
//        'rewrite'           => array( 'slug' => 'student' ),
//    );
 
//    register_taxonomy( 'student', array( 'post' ), $args );
    
    register_taxonomy('students','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'student' ),
  ));
    
    
    
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Majors', 'taxonomy general name' ),
        'singular_name'     => _x( 'Major', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Majors' ),
        'all_items'         => __( 'All Majors' ),
        'parent_item'       => __( 'Parent Major' ),
        'parent_item_colon' => __( 'Parent Major:' ),
        'edit_item'         => __( 'Edit Major' ),
        'update_item'       => __( 'Update Major' ),
        'add_new_item'      => __( 'Add New Major' ),
        'new_item_name'     => __( 'New Major Name' ),
        'menu_name'         => __( 'Major' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'major' ),
    );
 
    register_taxonomy( 'major', array( 'post' ), $args );
    
    
    
}

?>