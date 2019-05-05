<?php
  /* Template Name: Carrer Page */
  get_header();
 ?>

 <?php while(have_posts()): the_post();  ?>

   <!-- single-page-banner start -->
     <section class="single-page-banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
       <div class="single-banner-content-area">
         <div class="container">
           <div class="row">
             <div class="col-lg-12">
               <div class="single-banner-content">
                 <h2 class="single-banner-title"><?php the_title(); ?></h2>
                 <ul class="page-list">
                     <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                     <li><?php the_title(); ?></li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
   <!-- single-page-banner end  -->

 <!-- testimonial-section start -->
 <section class="testimonial-section-career section-padding section-bg">
  <div class="container">
   <div class="section-header-area text-center">
     <div class="row justify-content-center">
      <div class="col-lg-8">
       <h4 class="section-header text-uppercase"><?php the_field('title'); ?></h4>
      </div>
     </div>
   </div><!-- section-header-area end -->
   <div class="section-wrapper text-center">
     <div class="owl-carousel testimonial-slider-career">
      <div class="career-single text-center">
        <?php
        $id_image = get_field('image_1');
             $image = wp_get_attachment_image_src($id_image, 'carrer');
         ?>
       <img src="<?php echo $image[0]; ?>" alt="career-1">
      </div><!-- single career end -->


      <div class="career-single text-center">
        <?php
        $id_image = get_field('image_2');
             $image = wp_get_attachment_image_src($id_image, 'carrer');
         ?>
       <img src="<?php echo $image[0]; ?>" alt="career-1">
      </div><!-- single career end -->


      <div class="career-single text-center">
        <?php
        $id_image = get_field('image_3');
             $image = wp_get_attachment_image_src($id_image, 'carrer');
         ?>
       <img src="<?php echo $image[0]; ?>" alt="career-1">
      </div><!-- single career end -->


      <div class="career-single text-center">
        <?php
        $id_image = get_field('image_4');
             $image = wp_get_attachment_image_src($id_image, 'carrer');
         ?>
       <img src="<?php echo $image[0]; ?>" alt="career-1">
      </div><!-- single career end -->


      <div class="career-single text-center">
        <?php
        $id_image = get_field('image_5');
             $image = wp_get_attachment_image_src($id_image, 'carrer');
         ?>
       <img src="<?php echo $image[0]; ?>" alt="career-1">
      </div><!-- single career end -->

     </div>
   </div>

   <h5 class="text-center"><?php the_field('down_title'); ?></h5>
   <p class="mt-3 text-center"><?php the_field('content'); ?></p>

  </div>
 </section>
 <!-- testimonial-section end -->
 <!-- career body content start -->
 <div class="career-body text-center section-padding">
   <div class="container">
     <?php
     $id_image = get_field('image');
          $image = wp_get_attachment_image_src($id_image, 'carrer');
      ?>
     <img src="<?php echo $image[0]; ?>" alt="our-student" width="500rem">
     <div class="row">
       <div class="col-lg-6  section-bg div-padding">
         <h4 class="section-header text-uppercase">Certification</h4>
         <h5 class="mt-3"><?php the_field('cert_title'); ?></h5>
         <p class="mt-3">
           <?php the_field('cert_content'); ?>
         </p>
       </div>
       <div class="col-lg-6 section-bg div-padding">
         <h4 class="text-uppercase section-header">Job Opportunities</h4>
         <h5 class="mt-3"><?php the_field('job_title'); ?></h5>
         <p class="mt-3">
           <?php the_field('job_content'); ?>
      
         </p>
       </div>
     </div>
   </div>
 </div>



<?php endwhile; ?>


 <!-- career body content end -->

 <?php get_footer(); ?>
