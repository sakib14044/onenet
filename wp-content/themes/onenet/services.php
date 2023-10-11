<?php /* Template Name: Services */ ?>
<title>OneNet | Service</title>

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
    <div class="fixed-image section light-translucent-bg" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/page-services-banner.jpg');">
        <div class="container">
            <h1><?php echo $about_page_banner_heading;?></h1>
            <div class="separator-2"></div>
            <p class="lead"><?php echo $about_page_banner_text;?></p>
        </div>
    </div>
</div>

<!-- <div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('images/page-services-banner.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>Services</h1>
					<div class="separator-2"></div>
					<p class="lead">If you are searching a ISP company who can provide you best Internet Connection with proper Technical Support and can meet your requirement then OneNet is the right solution for you.You will get more from your expectation.</p>
					</div>
				</div>
			</div> -->
<!-- banner end -->

<!-- page-intro start-->
<!-- ================ -->
<div class="page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a href="index-2.html">Home</a></li>
                    <li class="active">Services</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- page-intro end -->

<!-- section start -->
<!-- ================ -->
<!-- service section start -->
<!-- ================ -->
<section class="main-container gray-bg">
    <!-- main start -->
    <!-- ================ -->
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php 

                $sercice_header      = get_field('sercice_header');
                $service_header_text = get_field('service_header_text');
                ?>
                    <h1 class="text-center title"><?php echo $sercice_header;?></h1>
                    <div class="separator"></div>
                    <p class="text-center"><?php echo $service_header_text;?></p>
                    <div class="row">
                        <div class="col-sm-4">
                            <?php 

			                $sevice_section_clmone_head = get_field('sevice_section_clmone_head');
			                $sevice_section_clmone_text = get_field('sevice_section_clmone_text');
			                ?>
                            <div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
                                <i class="fa fa-laptop"></i>
                                <h2><?php echo $sevice_section_clmone_head;?></h2>
                                <p><?php echo $sevice_section_clmone_text;?></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <?php 

			                $sevice_section_clmtwo_head = get_field('sevice_section_clmtwo_head');
			                $sevice_section_clmtwo_text = get_field('sevice_section_clmtwo_text');
			                ?>
                            <div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
                                <i class="fa fa-signal" aria-hidden="true"></i>
                                <h2><?php echo $sevice_section_clmtwo_head;?></h2>
                                <p><?php echo $sevice_section_clmtwo_text;?></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <?php 

							                $sevice_section_clmthree_head = get_field('sevice_section_clmthree_head');
							                $sevice_section_clmthree_text = get_field('sevice_section_clmthree_text');
							             ?>
                            <div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                                <h2><?php echo $sevice_section_clmthree_head;?></h2>
                                <p><?php echo $sevice_section_clmthree_text;?></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <?php 

			                $sevice_section_clmfour_head = get_field('sevice_section_clmfour_head');
			                $sevice_section_clmfour_text = get_field('sevice_section_clmfour_text');
			                ?>
                            <div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
                                <i class="fa fa-file-video-o" aria-hidden="true"></i>
                                <h2><?php echo $sevice_section_clmfour_head;?></h2>
                                <p><?php echo $sevice_section_clmfour_text;?></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <?php 

			                $sevice_section_clmfive_head = get_field('sevice_section_clmfive_head');
			                $sevice_section_clmfive_text = get_field('sevice_section_clmfive_text');
			                ?>
                            <div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h2><?php echo $sevice_section_clmfive_head;?></h2>
                                <p><?php echo $sevice_section_clmfive_text;?></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <?php 

			                $sevice_section_clmsix_head = get_field('sevice_section_clmsix_head');
			                $sevice_section_clmsix_text = get_field('sevice_section_clmsix_text');
			                ?>
                            <div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
                                <i class="fa fa-sitemap"></i>
                                <h2><?php echo $sevice_section_clmsix_head;?></h2>
                                <p><?php echo $sevice_section_clmsix_text;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main end -->
</section>
<!-- main-container end -->
<!-- service section end -->
<!-- <div class="section gray-bg clearfix">
				<div class="container">
					<h1 class="text-center title">Services We Provide</h1>
						<div class="separator"></div>
						<div class="row">
							<div class="col-sm-4">
								<div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
									<i class="fa fa-laptop"></i>
									<h2>Corporate Internet</h2>
									<p>In addition to broadband internet services, we help our clients build, connect, operate and maintain their own SOHO or office network.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
									<i class="fa fa-signal" aria-hidden="true"></i>
									<h2>Home Internet</h2>
									<p>OneNet provides easy solutions for small office and house office user with high quality bandwidth and unlimited download Speed.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
									<i class="fa fa-wifi" aria-hidden="true"></i>
									<h2>Wifi Hotspot</h2>
									<p>Nowadays, any establishment where people are expected to come and spend a reasonable amount time, requires a WiFi hotspot.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
									<i class="fa fa-file-video-o" aria-hidden="true"></i>
									<h2>Video Surveillance</h2>
									<p>With or without other security arrangements, today, a video surveillance system is seen as a requirement in every business establishment.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
									<i class="fa fa-phone" aria-hidden="true"></i>
									<h2>Customer Support</h2>
									<p>Our customers are our top priority. No matter where in the world you are, or what you need, our service representatives are ready to help.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
									<i class="fa fa-sitemap"></i>
									<h2>Network Solution</h2>
									<p>With our NOC team we can help you design, build and maintain your office network architecture as you need.</p>
								</div>
							</div>
						</div>
				</div>
			</div> -->
<!-- section end -->

<!-- section start (accordian)-->
<!-- ================ -->
<?php
				 require_once get_template_directory(). '/accordian.php';
			?>

<!-- section end(accordin) -->
<!-- clients section start -->
<!-- ================ -->
<?php
				 require_once get_template_directory(). '/client.php';
			?>
<!-- <div class="section gray-bg text-muted footer-top clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="owl-carousel clients">
								
								<div class="client">
									<a><img src="images/onesky.png" alt=""></a>
								</div>
								<div class="client">
									<a><img src="images/summit.png" alt=""></a>
								</div>
								<div class="client">
									<a><img src="images/fiber.png" alt=""></a>
								</div>
								
								<div class="client">
									<a><img src="images/onesky.png" alt=""></a>
								</div>
								<div class="client">
									<a><img src="images/summit.png" alt=""></a>
								</div>
								<div class="client">
									<a><img src="images/fiber.png" alt=""></a>
								</div>
            					<div class="client">
									<a><img src="images/bdhub.png" alt=""></a>
								</div>
            					<div class="client">
									<a><img src="images/skytracker.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<blockquote class="inline">
								<p class="margin-clear">We are believe in customer satisfaction with best quality and service. </p>	
								<footer><cite title="Source Title">Rashedur Rahman Rajon</cite></footer>
							</blockquote>
						</div>
					</div>
				</div>
			</div> -->
<!-- clients section end -->

<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
<!-- ================ -->
<?php 
	get_footer();
?>
