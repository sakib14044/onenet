<?php /* Template Name: Home */ ?>
<?php 
    get_header();
?>
<!-- banner start -->
<!-- ================ -->
<div class="banner">
    <!-- slideshow start -->
    <?php
				 require_once get_template_directory(). '/slider.php';
				?>
    <!-- ================ -->

    <!-- slideshow end -->
</div>

<!-- banner end -->
<!-- about section  start -->
<!-- ================ -->
<div class="section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 

                $about_section_title        = get_field('about_section_title');
                $about_section_p            = get_field('about_section_p');
                $about_section_btn          = get_field('about_section_btn');
                ?>

                <h1 class="text-center"><?php echo $about_section_title;?></h1>
                <div class="separator"></div>
                <p class="text-center"><?php echo $about_section_p;?></p>
                <br />
                <center>
                    <a href="about.php" class="btn btn-white">
                        <?php echo $about_section_btn;?>
                    </a>
                    <a href="<?php echo esc_url(get_permalink('contact')); ?>" class="btn btn-white">
                        <?php echo $about_section_btn;?>
                        

                    </a>
                </center>
                <br />
            </div>
        </div>
    </div>
</div>

<!-- about section end -->

<!-- main-container start -->
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
<!-- section start (questions) -->

<!-- ================ -->
<div class="section parallax light-translucent-bg parallax-bg-3">
    <div class="container">
        <div class="call-to-action">
            <div class="row">
                <div class="col-md-8">
                    <?php 

	                $home_contact_section_heading  = get_field('home_contact_section_heading');
	                $home_contact_section_text     = get_field('home_contact_section_text');
	                $home_contact_section_btn      = get_field('home_contact_section_btn');
                ?>

                    <h1 style="font-size: 30px;" class="title text-center">
                        <?php echo $home_contact_section_heading;?>
                    </h1>
                    <p style="" class="text-center"><?php echo $home_contact_section_text;?></p>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <a href="contact.html" class="btn btn-default btn-lg"><?php echo $home_contact_section_btn;?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section end (questions)-->
<!-- section start (accordian)-->

<div class="section clearfix">
    <div class="container">
        <?php 

						$accordian_section_header = get_field('accordian_section_header');
						$accordian_one_heading    = get_field('accordian_one_heading');
						$accordian_one_text       = get_field('accordian_one_text');
						$accordian_two_heading    = get_field('accordian_two_heading');
						$accordian_two_text       = get_field('accordian_two_text');
						$accordian_three_heading  = get_field('accordian_three_heading');
						$accordian_three_text     = get_field('accordian_three_text');
						$accordian_progress_one   = get_field('accordian_progress_one');
						$accordian_progress_two   = get_field('accordian_progress_two');
						$accordian_progress_three = get_field('accordian_progress_three');
						$accordian_progress_four  = get_field('accordian_progress_four');
					?>

        <h2 class="title"><?php echo $accordian_section_header;?></h2>
        <div class="separator-2"></div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="">
                                    <?php echo $accordian_one_heading;?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body">
                                <?php echo $accordian_one_text;?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                                    <?php echo $accordian_two_heading;?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <?php echo $accordian_two_text;?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                                    <?php echo $accordian_three_heading;?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <?php echo $accordian_three_text;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="progress">
                    <div class="progress-bar progress-bar-gray" role="progressbar" data-animate-width="85%" style="width: 85%;">
                        <span class="object-non-visible animated object-visible fadeInLeftBig" data-animation-effect="fadeInLeftBig" data-effect-delay="200">
                            <?php echo $accordian_progress_one;?>
                        </span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-gray" role="progressbar" data-animate-width="95%" style="width: 95%;">
                        <span class="object-non-visible animated object-visible fadeInLeftBig" data-animation-effect="fadeInLeftBig" data-effect-delay="200">
                            <?php echo $accordian_progress_two;?>
                        </span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-gray" role="progressbar" data-animate-width="80%" style="width: 80%;">
                        <span class="object-non-visible animated object-visible fadeInLeftBig" data-animation-effect="fadeInLeftBig" data-effect-delay="200">
                            <?php echo $accordian_progress_three;?>
                        </span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-gray" role="progressbar" data-animate-width="99%" style="width: 99%;">
                        <span class="object-non-visible animated object-visible fadeInLeftBig" data-animation-effect="fadeInLeftBig" data-effect-delay="200">
                            <?php echo $accordian_progress_four;?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="space"></div>
    </div>
</div>

<!-- section end (accordian) -->
<!-- section start (clients) -->
<!-- ================ -->
<?php
				 require_once get_template_directory(). '/client.php';
			?>
<!-- section end(clients) -->

<?php 
    get_footer();
?>
