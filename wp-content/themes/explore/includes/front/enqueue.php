<?php
  function explore_styles(){
      // CSS
      wp_register_style('custom_css', get_template_directory_uri() . '/style.css');
      wp_register_style('fontawesome_css', get_template_directory_uri() . '/assets/css/fontawesome.min.css');
      wp_register_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
      wp_register_style('bootstrapcss', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
      wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');
      wp_register_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
      wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css');
      wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
      wp_enqueue_style('custom_css');
      wp_enqueue_style('fontawesome_css');
      wp_enqueue_style('flaticon');
      wp_enqueue_style('bootstrapcss');
      wp_enqueue_style('animate');
      wp_enqueue_style('carousel');
      wp_enqueue_style('style');
      wp_enqueue_style('responsive');

      // JS
      wp_register_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
      wp_register_script('owlcarousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), false, true);
      wp_register_script('lightcase', get_template_directory_uri() . '/assets/js/lightcase.js', array('jquery'), false, true);
      wp_register_script('waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), false, true);
      wp_register_script('countup', get_template_directory_uri() . '/assets/js/jquery.countup.min.js', array('jquery'), false, true);
      wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);

      wp_enqueue_script('jquery');
      wp_enqueue_script('bootstrapjs');
      wp_enqueue_script('owlcarousel');
      wp_enqueue_script('lightcase');
      wp_enqueue_script('waypoints');
      wp_enqueue_script('countup');
      wp_enqueue_script('main');


  }
  add_action('wp_enqueue_scripts', 'explore_styles');

 ?>
