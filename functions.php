<?php
//theme functions go here

//function myFunction(){

//}

//myFunction();

function enqueue_my_styles_and_scripts(){
  //Enqueueing custom portfolio styles
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/css/styles.css',
  array(), '1.0.0', 'all');

  wp_enqueue_style('gallery-styles', get_stylesheet_directory_uri() . '/css/gallery.css',
  array(), '1.0.0', 'all');

  wp_enqueue_script('my-scripts', get_theme_file_uri() . '/js/gallery.js',
  array(), '1.0.0', true);



}

add_action('wp_enqueue_scripts', 'enqueue_my_styles_and_scripts');






 ?>
