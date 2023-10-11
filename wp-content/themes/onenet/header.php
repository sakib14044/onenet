<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	
<!-- Mirrored from www.1netbd.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:36:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<title>OneNet | Home</title>
					<meta name="description" content="iDea a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.html">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<!-- <link rel="shortcut icon" href="images/favicon.png"> -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/png">


		<!-- Web Fonts -->
		

		

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
			<?php 
			wp_head();

			?>
	</head>
	<body class="front no-trans" <?php body_class(); ?>>
	<!--Facebook code  -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
			<!-- ================ -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-2 col-sm-6">

							<!-- header-top-first start -->
							<!-- ================ -->
							<div class="header-top-first clearfix">
								<ul class="social-links clearfix hidden-xs">
									<li class="twitter"><a target="_blank" href="https://twitter.com/onenetisp"><i class="fa fa-twitter"></i></a></li>
									<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/one-net?trk=top_nav_home"><i class="fa fa-linkedin"></i></a></li>
									<li class="googleplus"><a target="_blank" href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
									<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCQ7Io3nMpwtAlMVS7LsXZIw"><i class="fa fa-youtube-play"></i></a></li>
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/OneNet.ISP/"><i class="fa fa-facebook"></i></a></li>
								</ul>
								<div class="social-links hidden-lg hidden-md hidden-sm">
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
										<ul class="dropdown-menu dropdown-animation">
											<li class="twitter"><a target="_blank" href="https://twitter.com/onenetisp"><i class="fa fa-twitter"></i></a></li>
											<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/one-net?trk=top_nav_home"><i class="fa fa-linkedin"></i></a></li>
											<li class="googleplus"><a target="_blank" href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
											<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCQ7Io3nMpwtAlMVS7LsXZIw"><i class="fa fa-youtube-play"></i></a></li>
											<li class="facebook"><a target="_blank" href="https://www.facebook.com/OneNet.ISP/"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- header-top-first end -->

						</div>
						<div class="col-xs-10 col-sm-6">

							<!-- header-top-second start -->
							<!-- ================ -->
							<div id="header-top-second"  class="clearfix">

								<!-- header top dropdowns start -->
								<!-- ================ -->
								<div class="header-top-dropdown">
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Login</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
											<li>
												<form class="login-form">
													<div class="form-group has-feedback">
														<label class="control-label">Username</label>
														<input type="text" class="form-control" placeholder="">
														<i class="fa fa-user form-control-feedback"></i>
													</div>
													<div class="form-group has-feedback">
														<label class="control-label">Password</label>
														<input type="password" class="form-control" placeholder="">
														<i class="fa fa-lock form-control-feedback"></i>
													</div>
													<button type="submit" class="btn btn-group btn-dark btn-sm">Log In</button>
													<span>

													<ul>
														<li><a href="#">Forgot your password?</a></li>
													</ul>
												</form>
											</li>
										</ul>
									</div>
								</div>
								<!--  header top dropdowns end -->
							</div>
							<!-- header-top-second end -->
						</div>
					</div>
				</div>
			</div>
			<!-- header-top end -->
			<header class="header fixed clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-3">

							<!-- header-left start -->
							<!-- ================ -->
							<div class="header-left clearfix">

								<!-- logo -->
								<div class="logo">
									<a href="index-2.html">
										<?php the_custom_logo(); ?>
										<!-- <img id="logo" src="images/logo_red.png" alt="OneNet"> -->
									</a>
								</div>
								<!-- name-and-slogan -->
								<div style="margin-left:20px" class="site-slogan">
									<?php bloginfo('name');?>
									<!-- Internet Service Provider -->
								</div>
							</div>
							<!-- header-left end -->
						</div>
						<div class="col-md-9">

							<!-- header-right start -->
							<!-- ================ -->
							<div class="header-right clearfix">

								<!-- main-navigation start -->
								<!-- ================ -->
								<div class="main-navigation animated">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">
											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>
											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">

												<?php 
													wp_nav_menu(
															  array(
															    'menu'          => 'primary',
															    'menu_class'		=> "nav navbar-nav navbar-right",

															    'depth'				=> "2",
															    'fallback_cb' => false,
															    
															  )
															);

												?>
												
											</div>
										</div>
									</nav>
									<!-- navbar end -->
								</div>
								<!-- main-navigation end -->
							</div>
							<!-- header-right end -->
						</div>
					</div>
				</div>
		  </header>
			<!-- header end -->
			<!-- banner start -->
			<!-- ================ -->
			