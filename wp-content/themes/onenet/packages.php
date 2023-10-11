<?php /* Template Name: Packages */ ?>
<title>OneNet | Packeges</title>

<?php 
    get_header();
?>
<!-- header end -->

<!-- section start -->
<!-- ================ -->
<!-- <div class="section gray-bg clearfix">
	<div class="container">
		<h1 class="text-center title">Packages We Provide</h1>
			<div class="separator"></div>
			<div class="row">
				
			</div>
	</div>
</div> -->
<!-- section end -->

<style type="text/css">
    .gray .plan .header h3 {
        color: #e84c3d;
        font-weight: bold;
    }
    .plan ul li {
        font-size: 15px;
    }
    .speed_pack {
        font-weight: bold;
        color: green !important;
    }
</style>

<!-- packages section start -->
<!-- Packages Section PHP Start -->
<?php 

$packahes_section_heading = get_field('packahes_section_heading');
$spone_heading            = get_field('spone_heading');
$spone_price              = get_field('spone_price');
$spone_list_one           = get_field('spone_list_one');
$spone_list_two           = get_field('spone_list_two');
$spone_list_three         = get_field('spone_list_three');
$spone_list_four          = get_field('spone_list_four');
$spone_list_five          = get_field('spone_list_five');
$sptwo_heading            = get_field('sptwo_heading');
$sptwo_price              = get_field('sptwo_price');
$sptwo_list_one           = get_field('sptwo_list_one');
$sptwo_list_two           = get_field('sptwo_list_two');
$sptwo_list_three         = get_field('sptwo_list_three');
$sptwo_list_four          = get_field('sptwo_list_four');
$sptwo_list_five          = get_field('sptwo_list_five');
$spthree_heading          = get_field('spthree_heading');
$spthree_price            = get_field('spthree_price');
$spthree_list_one         = get_field('spthree_list_one');
$spthree_list_two         = get_field('spthree_list_two');
$spthree_list_three       = get_field('spthree_list_three');
$spthree_list_four        = get_field('spthree_list_four');
$spthree_list_five        = get_field('spthree_list_five');
$spfour_heading           = get_field('spfour_heading');
$spfour_price             = get_field('spfour_price');
$spfour_list_one          = get_field('spfour_list_one');
$spfour_list_two          = get_field('spfour_list_two');
$spfour_list_three        = get_field('spfour_list_three');
$spfour_list_four         = get_field('spfour_list_four');
$spfour_list_five         = get_field('spfour_list_five');
$spfive_heading           = get_field('spfive_heading');
$spfive_price             = get_field('spfive_price');
$spfive_list_one          = get_field('spfive_list_one');
$spfive_list_two          = get_field('spfive_list_two');
$spfive_list_three        = get_field('spfive_list_three');
$spfive_list_four         = get_field('spfive_list_four');
$spfive_list_five         = get_field('spfive_list_five');
$spsix_heading            = get_field('spsix_heading');
$spsix_price              = get_field('spsix_price');
$spsix_list_one           = get_field('spsix_list_one');
$spsix_list_two           = get_field('spsix_list_two');
$spsix_list_three         = get_field('spsix_list_three');
$spsix_list_four          = get_field('spsix_list_four');
$spsix_list_five          = get_field('spsix_list_five');
$spseven_heading          = get_field('spseven_heading');
$spseven_price            = get_field('spseven_price');
$spseven_list_one         = get_field('spseven_list_one');
$spseven_list_two         = get_field('spseven_list_two');
$spseven_list_three       = get_field('spseven_list_three');
$spseven_list_four        = get_field('spseven_list_four');
$spseven_list_five        = get_field('spseven_list_five');
$speight_heading          = get_field('speight_heading');
$speight_price            = get_field('speight_price');
$speight_list_one         = get_field('speight_list_one');
$speight_list_two         = get_field('speight_list_two');
$speight_list_three       = get_field('speight_list_three');
$speight_list_four        = get_field('speight_list_four');
$speight_list_five        = get_field('speight_list_five');
$packages_section_note    = get_field('packages_section_note');

?>

<!-- Packages Section PHP end -->

<!-- ================ -->
<div class="section clearfix">
    <div class="container">
        <h1 class="text-center title"> <?php echo $packahes_section_heading; ?> </h1>
        <div class="separator"></div>

        <!-- pricing tables start -->
        <div class="pricing-tables gray object-non-visible" data-animation-effect="fadeInUpSmall">
            <div class="row grid-space-0">
                <!-- pricing table start -->
                <div class="col-sm-3 plan">
                    <div class="header">
                        <h3>SP-1</h3>
                        <div class="price"><span> <?php echo $spone_heading;?>৳550</span>/m.</div>
                    </div>
                    <ul>
                        <li class="speed_pack">16 Mbps Internet Speed</li>
                        <li>Connection Charge - 2000 Taka</li>
                        <li>Buffer less HD Videos</li>
                        <li>98.99% Uptime</li>
                        <li>24/7 Customer Support</li>
                        <li>
                            <a style="margin-top: 29px;" class="btn btn-gray" href="contact.html"><i class="fa fa-address-book pr-10"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <div class="col-sm-3 plan">
                    <div class="header">
                        <h3>SP-2</h3>
                        <div class="price"><span>৳650</span>/m.</div>
                    </div>
                    <ul>
                        <li class="speed_pack">20 Mbps Internet Speed</li>
                        <li>
                            Connection Charge - 2000 Taka <br />
                            <small class="text-warning" style="font-size: 11px; font-style: italic;"> </small>
                        </li>
                        <li>Buffer less HD Videos</li>
                        <li>98.99% Uptime</li>
                        <li>24/7 Customer Support</li>
                        <li>
                            <a class="btn btn-gray" href="contact.html"><i class="fa fa-address-book pr-10"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <div class="col-sm-3 plan">
                    <div class="header">
                        <h3>SP-3</h3>
                        <div class="price"><span>৳750</span>/m.</div>
                    </div>
                    <ul>
                        <li class="speed_pack">24 Mbps Internet Speed</li>
                        <li>Connection Charge -1000 Taka <br /></li>
                        <li>Buffer less HD Videos</li>
                        <li>98.99% Uptime</li>
                        <li>24/7 Customer Support</li>
                        <li>
                            <a style="margin-top: 29px;" class="btn btn-gray" href="contact.html"><i class="fa fa-address-book pr-10"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <div class="col-sm-3 plan">
                    <div class="header">
                        <h3>SP-4</h3>
                        <div class="price"><span>৳850</span>/m.</div>
                    </div>
                    <ul>
                        <li class="speed_pack">28 Mbps Internet Speed</li>
                        <li>Connection Charge - 1000 Taka</li>
                        <li>Buffer less HD Videos</li>
                        <li>98.99% Uptime</li>
                        <li>24/7 Customer Support</li>
                        <li>
                            <a style="margin-top: 29px;" class="btn btn-gray" href="contact.html"><i class="fa fa-address-book pr-10"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <div class="col-sm-3 plan">
                    <div class="header">
                        <h3>SP-5</h3>
                        <div class="price"><span>৳1050</span>/m.</div>
                    </div>
                    <ul>
                        <li class="speed_pack">40 Mbps Internet Speed</li>
                        <li>Connection Charge -500 Taka</li>
                        <li>Buffer less HD Videos</li>
                        <li>98.99% Uptime</li>
                        <li>24/7 Customer Support</li>
                        <li>
                            <a style="margin-top: 29px;" class="btn btn-gray" href="contact.html"><i class="fa fa-address-book pr-10"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <div class="col-sm-3 plan">
                    <div class="header">
                        <h3>SP-6</h3>
                        <div class="price"><span>৳1250</span>/m.</div>
                    </div>
                    <ul>
                        <li class="speed_pack">50 Mbps Internet Speed</li>
                        <li>Connection Charge -500 Taka</li>
                        <li>Buffer less HD Videos</li>
                        <li>98.99% Uptime</li>
                        <li>24/7 Customer Support</li>
                        <li>
                            <a style="margin-top: 29px;" class="btn btn-gray" href="contact.html"><i class="fa fa-address-book pr-10"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <div class="col-sm-3 plan">
                    <div class="header">
                        <h3>SP-7</h3>
                        <div class="price"><span>৳1600</span>/m.</div>
                    </div>
                    <ul>
                        <li class="speed_pack">60 Mbps Internet Speed</li>
                        <li>Connection Charge -500 Taka</li>
                        <li>Buffer less HD Videos</li>
                        <li>98.99% Uptime</li>
                        <li>24/7 Customer Support</li>
                        <li>
                            <a style="margin-top: 29px;" class="btn btn-gray" href="contact.html"><i class="fa fa-address-book pr-10"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <div class="col-sm-3 plan">
                    <div class="header">
                        <h3>SP-8</h3>
                        <div class="price"><span>৳2100</span>/m.</div>
                    </div>
                    <ul>
                        <li class="speed_pack">80 Mbps Internet Speed</li>
                        <li>Connection Charge -500 Taka</li>
                        <li>Buffer less HD Videos</li>
                        <li>98.99% Uptime</li>
                        <li>24/7 Customer Support</li>
                        <li>
                            <a style="margin-top: 29px;" class="btn btn-gray" href="contact.html"><i class="fa fa-address-book pr-10"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <div class="col-md-12">
                    <p><span class="label label-danger" style="margin-right: 5px; font-size: 13px;">Note: </span> UTP Connection Charge free for all packages Above SP-4.</p>
                </div>
            </div>
        </div>
        <!-- pricing tables end -->
    </div>
</div>
<!-- section end -->

<section class="main-container">
    <div class="container">
        <div class="row">
            <center><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1net.jpg" alt="1net" /></center>
            <br />
            <br />
            <br />
            <center>
                <ul style="width: 65%; text-align: left;" class="list"></ul>
            </center>
        </div>
    </div>
</section>

<!-- accordian section start -->
<!-- ================ -->
<?php
				 require_once get_template_directory(). '/accordian.php';
			?>
<!-- accordian section end -->
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
