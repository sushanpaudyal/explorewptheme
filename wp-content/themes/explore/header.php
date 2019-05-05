<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">


	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cce8a83b551036c"></script>

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=359780364808600&autoLogAppEvents=1"></script>

	<!-- preloader start -->
	<!-- <div id="preloader">
		  <div id="loader"></div>
	 </div> -->
	<!-- preloader end -->


      <div class="header-bottom sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg" id="navbar" data-toggle="affix">
              <a class="site-logo site-title d-lg-none" href="index.php"><img src="<?php echo get_template_directory_uri() ?>/assets/images/explore.png" alt="site-logo" width="150px"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav main-menu mx-auto">
                  <li><a href="index.php" class="active">Home</a>
                  <li><a href="<?php echo site_url('/about-us'); ?>">About</a>
                  <li><a href="courses-page.php">courses</a>

                  </li>

           <?php
               if(has_custom_logo() || is_customize_preview()){
								   the_custom_logo();
							 } else {
					  ?>
								  <a class="site-logo site-title d-none d-lg-block d-xl-block" href="index.php">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/explor2e.png" alt="site-logo" width="150px">
									</a>
								<?php } ?>
                  <li><a href="<?php echo site_url('/carrers'); ?>">Careers</a></li>

                  <li><a href="<?php echo site_url('/blog'); ?>">blog</a>
                  </li>
                  <li><a href="<?php echo site_url('/contact-us'); ?>">contact us</a></li>
                </ul>
                <div class="header-search-area">
                  <div class="header-search-toggle"><i class="fa fa-search"></i></div>
                  <div class="header-serach-block closed">
                    <form class="header-search-form d-flex">
                      <input type="search" name="header-search" id="header-search" placeholder="Search...">
                      <button class="header-search-btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </nav>
        </div>
      </div><!-- header-bottom end -->
    </header>
    <!--  header-section end  -->
