<?php
  function explore_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_image_size('who', 540, 270, true);
    add_image_size('more', 540, 375, true);
    add_image_size('features', 350, 233, true);


  }
  add_action('after_setup_theme', 'explore_setup_theme');

 ?>
