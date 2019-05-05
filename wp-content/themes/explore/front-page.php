
<?php get_header(); ?>

	<!-- banner-section start -->
	<section class="banner-section">
		<div class="owl-carousel banner-slider">

     <?php
        $args = array(
					  'post_type' => 'sliders',
						'posts_per_page' => -1,
						'orderby' => 'title',
						'order' => 'ASC'
				);
				$sliders = new WP_Query($args);
				while($sliders->have_posts()) : $sliders->the_post();
		  ?>

			<div class="banner-slider-item" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="banner-content">
								<h1 class="banner-content-head"><?php the_title(); ?></h1>
								<p><?php the_content(); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- banner-slider-item end -->

		<?php    endwhile; wp_reset_postdata(); ?>


		</div>
	</section>
	<!-- banner-section end  -->
	<!-- Welcome Section Start -->
	<section class="welcome text-center section-padding section-bg">
		<div class="container">
			<h6 class="section-header-top ">Welcome</h6>
			<h2 class="section-header ">To <span>
				<?php echo get_theme_mod('explore_title_handle'); ?>
			</span></h2>
			<div class="row">
				<div class="col-lg-12">
					<p class="mt-2">
							<?php echo get_theme_mod('explore_content_handle'); ?>
					</p>
					<?php
					   if(get_theme_mod('explore_setting_three')){
					 ?>
					<img src="<?php echo get_theme_mod('explore_setting_three'); ?>" alt="welcome-photo" class="img-fluid mt-2">
				<?php } ?>
					<p class="mt-3">
						<?php echo get_theme_mod('explore_content2_handle'); ?>

					</p>
					<a href="<?php echo site_url('/about-us'); ?>" class="cmn-button mt-4">About us</a>
				</div>
			</div>
		</div>
	</section>


	<!-- Welcome Section End -->

	<!-- Features Section start -->
	<section class="features-section section-padding">
		<div class="container">
			<h2 class="section-header text-center">Our Features</h2>
			<div class="row">
				<?php
			 		$args = array(
			 				'post_type' => 'features',
			 				'posts_per_page' => 3,
			 				'orderby' => 'title',
			 				'order' => 'ASC'
			 		);
			 		$features = new WP_Query($args);
			 		while($features->have_posts()) : $features->the_post();
			 	?>

				<div class="col-md-4 mt-5">
					<img src="<?php echo the_post_thumbnail_url('features'); ?>" alt="<?php the_title(); ?>">
					<h4 class="text-center text-capitalize mt-2"><?php the_title(); ?></h2>
						<p class="text-justify mt-2">
							<?php the_content(); ?>
						 </p>



			</div>

		<?php    endwhile; wp_reset_postdata(); ?>


		</div>
	</section>

	<!-- Features Section end -->

	<!-- courses-section start -->
	<section class="courses-section section-padding section-bg">
		<div class="container">
			<div class="section-header-area text-center">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<h2 class="section-header">Our Top Courses</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse ducimus aliquid earum reiciendis tempore voluptate itaque laudantium modi blanditiis ut est consectetur dolorum ea aperiam, quam deleniti quidem iusto aut.</p>
					</div>
				</div>
			</div>
			<div class="section-wrapper">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 course-single">
						<div class="course-single-item">
							<div class="course-single-thumb">
								<a href="course-details.php"><img src="<?php echo get_template_directory_uri() ?>/assets/images/brownie-cake-chocolate-45202.jpg" alt="course-image"></a>
							</div>
							<div class="course-single-content">
								<div class="tags">
									<a href="#">Design Art</a>
								</div>
								<h4 class="course-title"><a href="course-details.php">Diploma in Culinary Arts</a></h4>
								<p>There are many variations of passages of the at Lorem Ipsum available but the majority have on suffered alteration.</p>
								<!-- <div class="course-bottom">
						<ul class="course-bottom-list">
						  <li>
							 <a href="#">
								<span class="course-avatar"><img src="<?php echo get_template_directory_uri() ?>/assets/images/courses/s1.png" alt="mentor-avater"></span>
								<span>Gage Ullrich</span>
							 </a>
						  </li>
						  <li>
							 <div class="course-duration">
								<span class="fa fa-clock-o"></span>
								<span>2h</span>
								<span>38m</span>
							 </div>
						  </li>
						</ul>
					 </div> -->
							</div>
						</div><!-- course-single-item end -->
					</div><!-- course-single end -->
					<div class="col-lg-4 col-md-6 course-single">
						<div class="course-single-item">
							<div class="course-single-thumb">
								<a href="course-details.php"><img src="<?php echo get_template_directory_uri() ?>/assets/images/adult-alcohol-alcohol-bottles-681846.jpg" alt="course-image"></a>
							</div>
							<div class="course-single-content">
								<div class="tags">
									<a href="#">Bar</a>
								</div>
								<h4 class="course-title"><a href="course-details.php">Bar Tending With Flaring</a></h4>
								<p>There are many variations of passages of the at Lorem Ipsum available but the majority have on suffered alteration.</p>
								<!-- <div class="course-bottom">
						<ul class="course-bottom-list">
						  <li>
							 <a href="#">
								<span class="course-avatar"><img src="<?php echo get_template_directory_uri() ?>/assets/images/courses/s1.png" alt="mentor-avater"></span>
								<span>Gage Ullrich</span>
							 </a>
						  </li>
						  <li>
							 <div class="course-duration">
								<span class="fa fa-clock-o"></span>
								<span>2h</span>
								<span>38m</span>
							 </div>
						  </li>
						</ul>
					 </div> -->
							</div>
						</div><!-- course-single-item end -->
					</div><!-- course-single end -->
					<div class="col-lg-4 col-md-6 course-single">
						<div class="course-single-item">
							<div class="course-single-thumb">
								<a href="course-details.php"><img src="<?php echo get_template_directory_uri() ?>/assets/images/adventure-clouds-environment-672358.jpg" alt="course-image"></a>
							</div>
							<div class="course-single-content">
								<div class="tags">
									<a href="#">Travel</a>
								</div>
								<h4 class="course-title"><a href="course-details.php">Tour Operator</a></h4>
								<p>There are many variations of passages of the at Lorem Ipsum available but the majority have on suffered alteration.</p>
								<!-- <div class="course-bottom">
						<ul class="course-bottom-list">
						  <li>
							 <a href="#">
								<span class="course-avatar"><img src="<?php echo get_template_directory_uri() ?>/assets/images/courses/s1.png" alt="mentor-avater"></span>
								<span>Gage Ullrich</span>
							 </a>
						  </li>
						  <li>
							 <div class="course-duration">
								<span class="fa fa-clock-o"></span>
								<span>2h</span>
								<span>38m</span>
							 </div>
						  </li>
						</ul>
					 </div> -->
							</div>
						</div><!-- course-single-item end -->
					</div><!-- course-single end -->
				</div>
			</div>
		</div>
	</section>
	<!-- courses-section end -->

	<!-- success-story-section start -->
	<section class="success-story-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 section-left-content">
					<h4 class="section-left-sub-head"><?php echo get_theme_mod('explore_success_title_handle'); ?></h4>
					<h2 class="section-left-head"><?php echo get_theme_mod('explore_success_subtitle_handle'); ?></h2>
					<p><?php echo get_theme_mod('explore_success_content_handle'); ?></p>
				</div><!-- learning-left end -->
				<div class="col-lg-6">
					<div class="story-items-wrapper">
						<div class="row">
							<div class="col-6">
								<div class="story-single-item text-center color-one">
									<i class="flaticon-online-learning"></i>
									<h4 class="story-single-title"><?php echo get_theme_mod('explore_success_point1_handle'); ?></h4>
								</div>
							</div><!-- story-single end -->
							<div class="col-6">
								<div class="story-single-item text-center color-two">
									<i class="flaticon-heart"></i>
									<h4 class="story-single-title"><?php echo get_theme_mod('explore_success_point2_handle'); ?></h4>
								</div>
							</div><!-- story-single end -->
							<div class="col-6">
								<div class="story-single-item text-center color-three">
									<i class="flaticon-expand-screen"></i>
									<h4 class="story-single-title"><?php echo get_theme_mod('explore_success_point3_handle'); ?></h4>
								</div>
							</div><!-- story-single end -->
							<div class="col-6">
								<div class="story-single-item text-center color-four">
									<i class="flaticon-cap"></i>
									<h4 class="story-single-title"><?php echo get_theme_mod('explore_success_point4_handle'); ?></h4>
								</div>
							</div><!-- story-single end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- success-story-section end -->

	<!-- testimonial-section start -->
	<section class="testimonial-section section-padding" style="background-image: url(<?php echo get_theme_mod('explore_setting_four'); ?>);">
		<div class="container">
			<div class="section-header-area text-center">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<h2 class="section-header"><?php echo get_theme_mod('explore_instructor_title_handle'); ?></h2>
					<p>
						<?php echo get_theme_mod('explore_instructor_subtitle_handle'); ?>
					</p>
					</div>
				</div>
			</div><!-- section-header-areaend -->
			<div class="section-wrapper">
				<div class="owl-carousel testimonial-slider">

					<?php
		         $args = array(
		 					  'post_type' => 'instructors',
		 						'posts_per_page' => -1,
		 						'orderby' => 'title',
		 						'order' => 'ASC'
		 				);
		 				$sliders = new WP_Query($args);
		 				while($sliders->have_posts()) : $sliders->the_post();
		 		  ?>
					<div class="client-single-item text-center">
						<div class="client-thumb"><img src="<?php echo the_post_thumbnail_url(); ?>" alt="testimonial-image"></div>
						<p><?php the_content(); ?></p>
						<div class="client-details">
							<h5 class="client-name"><?php the_title(); ?></h5>
							<span class="client-designation"><?php the_field('position'); ?></span>
						</div>
					</div><!-- client-single-item end -->
				<?php    endwhile; wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	</section>
	<!-- testimonial-section end -->

	<!-- blog-section start -->
	<section class="blog-section section-padding">
		<div class="container">
			<div class="section-header-area text-center">
				<div class="row justify-content-center">
					<div class="col-lg-8">

						<h2 class="section-header">Our Latest News</h2>
					</div>
				</div>
			</div><!-- section-header-area end -->
			<div class="section-wrapper">
				<div class="row">

					<?php
                    $args = array(
                      'post_type' => 'post',
                      'posts_per_page' => 3,
                    );
                    $blogs = new WP_Query($args);
                    while($blogs->have_posts()) : $blogs->the_post(); ?>
					<div class="col-lg-4 col-md-6 col-sm-6">
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

				<?php    endwhile; wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	</section>
	<!-- blog-section end -->
	<!-- associate partners start -->
	<section class="partners-section section-padding">
		<div class="container">
			<div class="section-header-area text-center">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<h2 class="section-header">Our Associate Partners</h2>
						<div class="section-wrapper">
							<div class="owl-carousel owl-theme associate-partners">


								<?php
									 $args = array(
											'post_type' => 'partners',
											'posts_per_page' => -1,
											'orderby' => 'title',
											'order' => 'ASC'
									);
									$partners = new WP_Query($args);
									while($partners->have_posts()) : $partners->the_post();
								?>

								<div class="item">
									<h4>
										<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									</h4>
								</div>


							<?php    endwhile; wp_reset_postdata(); ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- associate partners end -->

	<?php get_footer(); ?>
