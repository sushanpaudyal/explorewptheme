<?php
 /* Template Name: Contact Page */
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

   <!-- contact-section strat -->
   <section class="contact-section section-padding">
     <div class="container">
       <div class="row">
         <div class="col-lg-8 col-md-6">
           <div class="contact-form-area">
             <h2 class="contact-form-title">We Love to Hear From You</h2>
             <p>Please call or email contact form and we will be happy to assist you.</p>
             <br>
             <?php echo do_shortcode('[caldera_form id="CF5cca976ed5944"]'); ?>
           </div>
         </div>
         <div class="col-lg-4 col-md-6">
           <div class="contact-address-block">
             <span>Our Offices</span>
             <h4 class="contact-address-title">Contact Info</h4>
             <p>
               <?php the_field('content'); ?>
             </p>
             <ul class="address-items-list">
               <li class="address-single-item">
                 <div class="address-icon">
                   <i class="fa fa-map-marker"></i>
                 </div>
                 <div class="address-content">
                   <h5>Find Us</h5>
                   <p>
                     <?php the_field('address'); ?>
                   </p>
                 </div>
               </li><!-- address-single-item end -->
               <li class="address-single-item">
                 <div class="address-icon">
                   <i class="fa fa-phone"></i>
                 </div>
                 <div class="address-content">
                   <h5>Call Us</h5>
                   <p>                     <?php the_field('phone'); ?>
</p>
                 </div>
               </li><!-- address-single-item end -->
               <li class="address-single-item">
                 <div class="address-icon">
                   <i class="fa fa-envelope-o"></i>
                 </div>
                 <div class="address-content">
                   <h5>Mail Us</h5>
                   <p>
                     <?php the_field('email'); ?>

                   </p>
                 </div>
               </li><!-- address-single-item end -->
             </ul>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- contact-section end -->

   <div class="contact-map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14130.924577619491!2d85.331042114214!3d27.69470332291307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smid-baneshwor!5e0!3m2!1sen!2snp!4v1555488405348!5m2!1sen!2snp" width="1304" height="505" frameborder="0" style="border:0" allowfullscreen="false"></iframe>
   </div>


 <?php endwhile; ?>


<?php get_footer(); ?>
