<?php
   include (get_template_directory() . '/includes/front/enqueue.php');
   include (get_template_directory() . '/includes/front/setup.php');


   include (get_template_directory() . '/includes/theme-customizer.php');
   include (get_template_directory() . '/includes/customizer/social.php');


add_action('customize_register', 'explore_customize_register');


function explore_widgets(){
    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'blog_sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'explore_widgets');


 ?>
