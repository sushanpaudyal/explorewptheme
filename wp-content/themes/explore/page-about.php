<?php
/*
  Template Name: About Us Page Template
*/
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

  <!-- about-section start -->
  <section class="about-section">
    <div class="container">
      <div class="row mr-t-b-15">
        <div class="col-lg-6 col-md-6">
          <div class="about-item-single">
            <div class="about-item-thumb">
              <?php
                   $id_image = get_field('image');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="about-image">
            </div>
            <div class="about-item-content">
              <h4 class="about-item-title"><?php the_field('title'); ?></h4>
              <p>
                <?php the_field('content'); ?>
              </p>
            </div>
          </div>
        </div><!-- about-item-single end -->
        <div class="col-lg-6 col-md-6">
          <div class="about-item-single">
            <div class="about-item-thumb">
              <?php
                   $id_image = get_field('image_2');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="about-image">
            </div>
            <div class="about-item-content">
              <h4 class="about-item-title"><?php the_field('title_2'); ?></h4>
              <p>
                <?php the_field('content_2'); ?>
              </p>
            </div>
          </div>
        </div><!-- about-item-single end -->
      </div>
    </div>
  </section>
  <!-- about-section end -->

  <!-- about-review-section start -->
  <section class="review-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="review-content">
            <h4 class="review-title">
                <?php the_field('more_title'); ?>
              </h4>
              <p>
                <?php the_field('more_content'); ?>
            </p>
          </div>
          <div class="inner-counter-part">
            <div class="row">
              <div class="col-4">
                <div class="counter-single-item ">
                  <div class="counter-item-content pl-0">
                    <span class="counter-number counter"><?php the_field('no_of_trainers'); ?></span>
                    <p class="counter-title">Trainers</p>
                  </div>
                </div>
              </div><!-- counter-single-item end -->
              <div class="col-4">
                <div class="counter-single-item ">
                  <div class="counter-item-content pl-0">
                    <span class="counter-number counter"><?php the_field('courses'); ?></span>
                    <p class="counter-title">Available Courses</p>
                  </div>
                </div>
              </div><!-- counter-single-item end -->
              <div class="col-4">
                <div class="counter-single-item ">
                  <div class="counter-item-content pl-0">
                    <span class="counter-number counter"><?php the_field('student'); ?></span>
                    <p class="counter-title">Student Admission</p>
                  </div>
                </div>
              </div><!-- counter-single-item end -->
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="review-thumb">
            <?php
                 $id_image = get_field('more_image');
                 $image = wp_get_attachment_image_src($id_image, 'more');
             ?>
            <img src="<?php echo $image[0]; ?>" alt="review-image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about-review-section end -->



<?php endwhile; ?>



  <?php get_footer(); ?>
