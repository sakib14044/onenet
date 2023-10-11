<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
			<footer id="footer">

				<!-- .footer start -->
				<!-- ================ -->
	<?php 
		$main_footer_first_clm_heading       = get_field('main_footer_first_clm_heading');
		$main_footer_first_clm_text_one      = get_field('main_footer_first_clm_text_one');
		$main_footer_first_clm_text_two      = get_field('main_footer_first_clm_text_two');
		$main_footer_first_clm_text_three    = get_field('main_footer_first_clm_text_three');
		$main_footer_first_clm_text_four     = get_field('main_footer_first_clm_text_four');

		$main_footer_second_clm_heading      = get_field('main_footer_second_clm_heading'); 
		$main_footer_second_clm_text_one     = get_field('main_footer_second_clm_text_one');
		$main_footer_second_clm_text_two     = get_field('main_footer_second_clm_text_two');
        $main_footer_second_clm_text_three   = get_field('main_footer_second_clm_text_three');
        $main_footer_second_clm_text_four    = get_field('main_footer_second_clm_text_four');  

        $main_footer_third_clm_heading       = get_field('main_footer_third_clm_heading');          
        $main_footer_third_clm_bkash_heading = get_field('main_footer_third_clm_bkash_heading');    
        $main_footer_third_clm_bkash_num     = get_field('main_footer_third_clm_bkash_num');
        $main_footer_third_clm_rocket_heading= get_field('main_footer_third_clm_rocket_heading');   
        $main_footer_third_clm_rocket_num    = get_field('main_footer_third_clm_rocket_num'); 
        $online_payment                      = get_field('online_payment');	           
     ?>
				<div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
									<div class="row">
										<div class="col-md-3">
											<h5 style="color:silver;"><u>
												<?php echo $main_footer_first_clm_heading;?>
											</u></h5>
											<ul class="list-icons">
												<li><i class="fa fa-map-marker pr-10"></i>
													<?php echo $main_footer_first_clm_text_one;?>
												</li>
												<li><i class="fa fa-phone pr-10"></i> 
													<?php echo $main_footer_first_clm_text_two;?>
												</li>
												<li><i class="fa fa-envelope-o pr-10"></i> <?php echo $main_footer_first_clm_text_three;?></li>
												<li><i class="fa fa-globe pr-10"></i> <?php echo $main_footer_first_clm_text_four;?></li>
											</ul>
										</div>
										<div class="col-md-3">
											<h5 style="color:silver;"><u>
												<?php echo $main_footer_second_clm_heading;?>
													
												</u></h5>
											<ul class="list-icons">
												<li><i class="fa fa-phone pr-10"></i>
													<?php echo $main_footer_second_clm_text_one;?>
												</li>
												<li><i class="fa fa-phone pr-10"></i>
													<?php echo $main_footer_second_clm_text_two;?>
												</li>
												<li><i class="fa fa-phone pr-10"></i>
													<?php echo $main_footer_second_clm_text_three;?>
												</li>
												<li><i class="fa fa-phone pr-10"></i>
													<?php echo $main_footer_second_clm_text_four;?>
												</li>
											</ul>
										</div>
										<div class="col-md-3">
											<h5 style="color:silver;"><u>
												<?php echo $main_footer_third_clm_heading;?>
											</u></h5>
											<ul class="list-icons">
												<li><a href="bkash-bill.html">
													<u>
													<?php echo $main_footer_third_clm_bkash_heading;?>	
												</u></a></li>
												<li>
													<?php echo $main_footer_third_clm_bkash_num;?>
												</li>
												<li><a>
													<u>
													<?php echo $main_footer_third_clm_rocket_heading;?>
												    </u></a>
											    </li>
												<li>
													<?php echo $main_footer_third_clm_rocket_num;?>
													
												</li>
												<li><a href="https://onesky.com.bd/main/onlinePayment"><u>
													<?php echo $online_payment;?>
													
												</u></a></li>
											</ul>
										</div>
										<div class="col-md-3">
											<div class="fb-page" data-href="https://www.facebook.com/OneNet.ISP/" data-tabs="timeline" data-width="248px" data-height="200px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p>Copyright © 2019 OneNet | All Rights Reserved</p>
							</div>
							<div class="col-md-6">
								<nav class="navbar navbar-default" role="navigation">
									<!-- Toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>   
									<div class="collapse navbar-collapse" id="navbar-collapse-2">
										<ul class="nav navbar-nav">
											<li><a href="index-2.html">Home</a></li>
											<li><a href="about.html">About</a></li>
											<li><a href="contact.html">Contact</a></li>



											<li><a href="<?php get_permalink();?>/about-us.php">Contact</a></li>

											      <li><a href="<?php bloginfo("template_url")?>/about.php">About Us</a></li>
											      <li><a href="<?php echo esc_url(get_template_directory_uri() . '/about.php'); ?>">About Us</a></li>





											<li><a href="http://billing.1netbd.com:88/Billing/login.php" target="_blank">Bill</a></li>
										</ul>
									
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->

			

		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		

		
			<?php 
			wp_footer();

			?>	

	</body>

<!-- Mirrored from www.1netbd.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:36:52 GMT -->
</html>