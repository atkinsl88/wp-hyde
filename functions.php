<?php 

/* 
Register SCSS file  
*/

function sedia_files() {
  wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri());
  wp_enqueue_script( 'script', get_template_directory_uri() . '/src/js/menu.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_style('google-font-style', 'https://fonts.googleapis.com/css2?family=PT+Serif&family=Poppins&display=swap');
}

add_action('wp_enqueue_scripts', 'sedia_files');

/*
 Register custom post types.
*/

// Custom Post Type: Recent
function recent_post_types()
{
  register_post_type('recent', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Recent Work',
      'add_new_item' => 'Add New Projects',
      'edit_item' => 'Edit Project',
      'all_items' => 'All Projects',
      'singular_name' => 'Project'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));
}

add_action('init', 'recent_post_types');

// Custom Post Type: Sandbox
function sandbox_post_types()
{
  register_post_type('sandbox', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Sandbox',
      'add_new_item' => 'Add New Sandbox',
      'edit_item' => 'Edit Sandbox',
      'all_items' => 'All Sandbox',
      'singular_name' => 'Sandbox'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));
}

add_action('init', 'sandbox_post_types');

// Custom Post Type: Role
function role_post_types()
{
  register_post_type('role', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Role',
      'add_new_item' => 'Add New Role',
      'edit_item' => 'Edit Role',
      'all_items' => 'All Role',
      'singular_name' => 'Role'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));
}

add_action('init', 'role_post_types');