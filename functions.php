<?php

// adding css and js filesize


function setup(){
  // add outside fonts

  // change microtime() to version number for deployment

  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('jQuery', get_theme_file_uri('/js/jquery.js'), array( 'jquery'), 1.0, true);
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
 

function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;
 
    global $paged;
    if(empty($paged)) $paged = 1;
 
    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }
 
    if(1 != $pages)
    {
        echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
        }
 
        if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
        echo "</div>\n";
    }
}
?>