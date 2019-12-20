<?php

// adding css and js filesize


function setup(){
  // add outside fonts
  /*
  wp_enqueue_style('google-fonts', '//....url');
  */

  // change microtime() to version number for deployment
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, 1.0, true);
}

add_action('wp_enqueue_scripts', 'setup');

// adding Theme support

function init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5',
  array('comment-list' , 'comment-form', 'search-form')
  );
}

add_action('after_setup_theme', 'init');


// projects Post Type

function post_type() {
  register_post_type('project',
    array(
      'rewrite' => array('slug' => 'projects'),
      'labels' => array(
        'name' => 'Projects',
        'singular_name' => "Project",
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project'
      ),
      'menu_icon' => 'dashicons-clipboard',
      'public' => true,
      'has_archive'=> true,
      'supports' => array(
        'title', 'thumbnail', 'editor', 'excerpt', 'comments'
      )
    )
  );
}
add_action('init', 'post_type');
 ?>
