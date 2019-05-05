<?php
   function explore_social_customizer_section($wp_customize){
      $wp_customize->add_section('explore_welcome_section', array(
            'title' => __('Welcome Settings', 'explore'),
            'priority' => 100
      ));


      $wp_customize->add_section('explore_success_section', array(
            'title' => __('Success Stories', 'explore'),
            'priority' => 300
      ));

      $wp_customize->add_section('explore_instructor_section', array(
            'title' => __('Instructor Settings', 'explore'),
            'priority' => 300
      ));
       $wp_customize->add_setting('explore_title_handle', array(
           'default' => ''
       ));

       $wp_customize->add_setting('explore_content_handle', array(
           'default' => ''
       ));


       $wp_customize->add_setting('explore_content2_handle', array(
           'default' => ''
       ));

       $wp_customize->add_setting('explore_setting_three', array(
           'transport' => 'refresh',
           'height' => 325,
       ));

       $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'explore_title_handle_text', array(
             'label' => __('Title', 'explore'),
             'section' => 'explore_welcome_section',
             'type' => 'text',
             'settings' => 'explore_title_handle'
       )));


       $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'explore_content_handle_text', array(
             'label' => __('Content', 'explore'),
             'section' => 'explore_welcome_section',
             'type' => 'textarea',
             'settings' => 'explore_content_handle'
       )));

       $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'explore_setting_three_control', array(
          'label' => __('Image', 'explore'),
          'section' => 'explore_welcome_section',
          'settings' => 'explore_setting_three',
       )));

       $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'explore_content2_handle_text', array(
             'label' => __('Content 2', 'explore'),
             'section' => 'explore_welcome_section',
             'type' => 'textarea',
             'settings' => 'explore_content2_handle'
       )));



       $wp_customize->add_setting('explore_success_title_handle', array(
           'default' => ''
       ));

       $wp_customize->add_setting('explore_success_subtitle_handle', array(
           'default' => ''
       ));

       $wp_customize->add_setting('explore_success_content_handle', array(
           'default' => ''
       ));

       $wp_customize->add_setting('explore_success_point1_handle', array(
           'default' => ''
       ));

       $wp_customize->add_setting('explore_success_point2_handle', array(
           'default' => ''
       ));
       $wp_customize->add_setting('explore_success_point3_handle', array(
           'default' => ''
       ));
       $wp_customize->add_setting('explore_success_point4_handle', array(
           'default' => ''
       ));



       $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'explore_success_title_handle_text', array(
             'label' => __('Title', 'explore'),
             'section' => 'explore_success_section',
             'type' => 'text',
             'settings' => 'explore_success_title_handle'
       )));

       $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'explore_success_subtitle_handle_text', array(
             'label' => __('Sub Title', 'explore'),
             'section' => 'explore_success_section',
             'type' => 'text',
             'settings' => 'explore_success_subtitle_handle'
       )));

       $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'explore_success_content_handle_text', array(
             'label' => __('Content', 'explore'),
             'section' => 'explore_success_section',
             'type' => 'textarea',
             'settings' => 'explore_success_content_handle',
             'description' => 'Please Enter Your Content Here'
       )));

       $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'explore_success_point1_handle_text', array(
             'label' => __('Point 1', 'explore'),
             'section' => 'explore_success_section',
             'type' => 'text',
             'settings' => 'explore_success_point1_handle',
       )));

       $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'explore_success_point2_handle_text', array(
             'label' => __('Point 2', 'explore'),
             'section' => 'explore_success_section',
             'type' => 'text',
             'settings' => 'explore_success_point2_handle',
       )));

       $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'explore_success_point3_handle_text', array(
             'label' => __('Point 3', 'explore'),
             'section' => 'explore_success_section',
             'type' => 'text',
             'settings' => 'explore_success_point3_handle',
       )));

       $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'explore_success_point4_handle_text', array(
             'label' => __('Point 4', 'explore'),
             'section' => 'explore_success_section',
             'type' => 'text',
             'settings' => 'explore_success_point4_handle',
       )));


       $wp_customize->add_setting('explore_instructor_title_handle', array(
           'default' => ''
       ));

       $wp_customize->add_setting('explore_instructor_subtitle_handle', array(
           'default' => ''
       ));

       $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'explore_instructor_title_handle_text', array(
             'label' => __('Title', 'explore'),
             'section' => 'explore_instructor_section',
             'type' => 'text',
             'settings' => 'explore_instructor_title_handle',
       )));

       $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'explore_instructor_subtitle_handle_text', array(
             'label' => __('Sub Title', 'explore'),
             'section' => 'explore_instructor_section',
             'type' => 'text',
             'settings' => 'explore_instructor_subtitle_handle',
       )));

       $wp_customize->add_setting('explore_setting_four', array(
           'transport' => 'refresh',
           'height' => 325,
       ));

       $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'explore_setting_four_control', array(
          'label' => __('Image', 'explore'),
          'section' => 'explore_instructor_section',
          'settings' => 'explore_setting_four',
       )));

   }
?>
