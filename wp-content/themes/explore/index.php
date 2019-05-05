<?php get_header(); ?>


<!-- single-page-banner start -->
<section class="single-page-banner" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/old-newspaper-350376_1280.jpg)">
  <div class="single-banner-content-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="single-banner-content">
            <h2 class="single-banner-title">Blog</h2>
            <ul class="page-list">
                <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li>Blog</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- single-page-banner end  -->

<!-- blog-section start -->
<section class="blog-section section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">

          <?php while(have_posts()): the_post();  ?>

          <div class="col-md-6 col-sm-6">
            <div class="post-item-single">
              <div class="post-item-thumb">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
              </div>
              <div class="post-item-content">
                <ul class="d-flex post-meta">
									<li>By <a href="#"><?php the_author(); ?></a></li>
									<li> <?php echo get_the_date('j'); ?> <?php echo get_the_date('M'); ?> , <?php echo get_the_date('Y'); ?> </li>
								</ul>
                <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <a href="<?php the_permalink(); ?>" class="cmn-button">Read More</a>
              </div>
            </div>
          </div><!-- post-item-single end -->

        <?php endwhile; ?>

        </div>
      </div>


      <?php echo paginate_links(); ?>

    </div>
  </div>
</section>
<!-- blog-section end -->

<?php get_footer(); ?>
