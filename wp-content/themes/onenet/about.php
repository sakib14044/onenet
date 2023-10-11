<?php /* Template Name: About Us */ ?>
<title>OneNet | About</title>
<?php 
    get_header();
?>
			<!-- header end -->
			<!-- banner start -->
			<!-- ================ -->

			<?php 

                 $about_page_banner_heading = get_field('about_page_banner_heading');
                 $about_page_banner_text    = get_field('about_page_banner_text');
             ?>
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/page-about-banner-2.jpg');">
					<div class="container">
					<h1><?php echo $about_page_banner_heading;?></h1>
					<div class="separator-2"></div>
					<p class="lead"><?php echo $about_page_banner_text;?></p>
					</div>
				</div>
			</div>
			<!-- banner end -->

			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><i class="fa fa-home pr-10"></i><a href="index-2.html">Home</a></li>
								<li class="active">About Us</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- page-intro end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">
							<?php 

				                $about_page_about_section_heading_one= get_field('about_page_about_section_heading_one');

				                $about_page_about_section_text_one= get_field('about_page_about_section_text_one');

				                $about_page_about_section_heading_two= get_field('about_page_about_section_heading_two');

				                $about_page_about_section_text_two= get_field('about_page_about_section_text_two');

				                $about_page_about_section_text_two_sub= get_field('about_page_about_section_text_two_sub');

				                $about_page_about_section_heading_three= get_field('about_page_about_section_heading_three');

				                $about_page_about_section_text_three= get_field('about_page_about_section_text_three');

				               
				             ?>

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">
								<?php echo $about_page_about_section_heading_one;?>
								
							</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->
							
							<div class="row">
								<div class="col-md-12">
									<p style="text-align:justify">
										<?php echo $about_page_about_section_text_one;?>
									</p>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<h2 class="title">
												<?php echo $about_page_about_section_heading_two;?>
											</h2>
											<div class="separator-2"></div>
											<p style="text-align:justify">
												<?php echo $about_page_about_section_text_two;?>
											 </p>
											<p style="text-align:justify">
												<?php echo $about_page_about_section_text_two_sub;?>
											</p>
										</div>
										<div class="col-md-6">
											<h2 class="title">
												<?php echo $about_page_about_section_heading_three;?>
											</h2>
											<div class="separator-2"></div>
									        <p style="text-align:justify">
									        	<?php echo $about_page_about_section_text_three;?>
									        </p>
										</div>
									</div>
								</div>
							</div>
							<hr>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->

			<!-- Accordian & Progressbar php start -->
			<?php 
				$accordian_section_header = get_field('accordian_section_header');
	            $accordian_one_heading    = get_field('accordian_one_heading');
	            $accordian_one_text       = get_field('accordian_one_text');
	            $accordian_two_heading    = get_field('accordian_two_heading');
	            $accordian_two_text       = get_field('accordian_two_text');
	            $accordian_three_heading  = get_field('accordian_three_heading');
	            $accordian_three_text     = get_field('accordian_three_text');
	            // Progrss bar PHP
	            $accordian_progress_one   = get_field('accordian_progress_one');
	            $accordian_progress_two   = get_field('accordian_progress_two');
	            $accordian_progress_three = get_field('accordian_progress_three');
	            $accordian_progress_four  = get_field('accordian_progress_four');

			?>

			<!-- Accordian & Progressbar php end -->





			<div class="section clearfix">
				<div class="container">
					<h2 class="title"><?php echo $accordian_section_header; ?></h2>
					<div class="separator-2"></div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="">
												<?php echo $accordian_one_heading; ?>
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true" style="">
										<div class="panel-body">
											<?php echo $accordian_one_text; ?>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
												<?php echo $accordian_two_heading; ?>
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
										<div class="panel-body">
											<?php echo $accordian_two_text; ?>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
												<?php echo $accordian_three_heading; ?>
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
										<div class="panel-body">
											<?php echo $accordian_three_text; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<!-- caroudel php start -->
							<?php 
								$about_page_carousel_img_one= get_field('about_page_carousel_img_one');
					            $about_page_carousel_img_two   = get_field('about_page_carousel_img_two');
					            $about_page_carousel_img_three = get_field('about_page_carousel_img_three');
							?>
							<!-- caroudel php end -->

							<div class="owl-carousel content-slider-with-controls">
								<div class="overlay-container margin-top-clear">
									<img src="<?php echo $about_page_carousel_img_one;?>" alt="">
									<a href="<?php echo $about_page_carousel_img_one;?>" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
								</div>
								<div class="overlay-container margin-top-clear">
									<img src="<?php echo $about_page_carousel_img_two;?>" alt="">
									<a href="<?php echo $about_page_carousel_img_two;?>" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
								</div>
								<div class="overlay-container margin-top-clear">
									<img src="<?php echo $about_page_carousel_img_three;?>" alt="">
									<a href="<?php echo $about_page_carousel_img_three;?>" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section gray-bg clearfix">
				<div class="container">
					<!-- Skills Section PHP Start -->
					<?php 
						$about_page_skills_section_heading= get_field('about_page_skills_section_heading');
			            $about_page_skills_section_text_one   = get_field('about_page_skills_section_text_one');
			            $about_page_skills_section_digit_one = get_field('about_page_skills_section_digit_one');
			            $about_page_skills_section_text_two = get_field('about_page_skills_section_text_two');
			            $about_page_skills_section_digit_two = get_field('about_page_skills_section_digit_two');
					?>
					<!-- Skills Section PHP end -->
					<h2 class="title"> <?php echo $about_page_skills_section_heading;?></h2>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<div class="row grid-space-10">
								<div class="col-sm-6">
									<div class="box-style-1 white-bg margin-top-clear">
										<h2 class="title">
											<?php echo $about_page_skills_section_text_one;?>
												
										</h2>
										<i class="fa fa-laptop"></i>
										<span class="stat-num">
											<?php echo $about_page_skills_section_digit_one;?>
										
										</span>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="box-style-1 white-bg margin-top-clear">
										<h2 class="title">
											<?php echo $about_page_skills_section_text_two;?>
										</h2>
										<i class="fa fa-signal"></i>
										<span class="stat-num">
											<?php echo $about_page_skills_section_digit_two;?>
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="progress">
								<div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="85%">
									<span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="200">
										<?php echo $accordian_progress_one;?>		
									</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="95%">
									<span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="200">
										<?php echo $accordian_progress_two; ?>
											
									</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="80%">
									<span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="200">
									<?php echo $accordian_progress_three; ?>
								</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="99%">
									<span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="200">
									<?php echo $accordian_progress_four; ?>
								</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->
			<!-- clients section start -->
			<!-- ================ -->

			<?php
			 	require_once get_template_directory(). '/client.php';
			?>
			<!-- clients section end -->

			<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
<?php 
    get_footer();
?>