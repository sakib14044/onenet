<div class="slideshow">
    <!-- slider revolution start -->
    <!-- ================ -->
    <div class="slider-banner-container">
        <div class="slider-banner">
            <ul>

                <?php 

                $slider_one_heading            = get_field('slider_content_heading');
                $slider_content_heading_lista  = get_field('slider_content_heading_lista');
                $slider_content_heading_listb  = get_field('slider_content_heading_listb');
                $slider_content_heading_listc  = get_field('slider_content_heading_listc');
                $slider_content_heading_listd  = get_field('slider_content_heading_listd');
                $slider_content_heading_button = get_field('slider_content_heading_button');
                $slider_one_image = get_field('slider_one_image');

                ?>
                <!-- slide 1 start -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Premium HTML5 template">
                    <!-- main image -->
                    <img src="<?php echo $slider_one_image;?>" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />

                    <!-- LAYER NR. 1 -->
                    <!-- Home Internet -->
                    <div class="tp-caption default_bg large sfr tp-resizeme" data-x="0" data-y="70" data-speed="600" data-start="1200" data-end="9400" data-endspeed="600">
                        <?php echo $slider_one_heading;?>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption dark_gray_bg sfl medium tp-resizeme" data-x="0" data-y="170" data-speed="600" data-start="1600" data-end="9400" data-endspeed="600"><i class="icon-check"></i></div>

                    <!-- LAYER NR. 3 -->
                    <!-- FTTH Network -->
                    <div class="tp-caption light_gray_bg sfb medium tp-resizeme" data-x="50" data-y="170" data-speed="600" data-start="1600" data-end="9400" data-endspeed="600"><?php echo $slider_content_heading_lista;?></div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption dark_gray_bg sfl medium tp-resizeme" data-x="0" data-y="220" data-speed="600" data-start="1800" data-end="9400" data-endspeed="600"><i class="icon-check"></i></div>

                    <!-- LAYER NR. 5 -->
                    <!-- Online Gaming Support -->
                    <div class="tp-caption light_gray_bg sfb medium tp-resizeme" data-x="50" data-y="220" data-speed="600" data-start="1800" data-end="9400" data-endspeed="600"><?php echo $slider_content_heading_listb;?></div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption dark_gray_bg sfl medium tp-resizeme" data-x="0" data-y="270" data-speed="600" data-start="2000" data-end="9400" data-endspeed="600"><i class="icon-check"></i></div>

                    <!-- LAYER NR. 7 -->
                    <!-- 24/7 Customer Support -->
                    <div class="tp-caption light_gray_bg sfb medium tp-resizeme" data-x="50" data-y="270" data-speed="600" data-start="2000" data-end="9400" data-endspeed="600"><?php echo $slider_content_heading_listc;?></div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption dark_gray_bg sfl medium tp-resizeme" data-x="0" data-y="320" data-speed="600" data-start="2200" data-end="9400" data-endspeed="600"><i class="icon-check"></i></div>

                    <!-- LAYER NR. 9 -->
                    <!-- Easy Bill Payment System (Bkash, Online Payment) -->
                    <div class="tp-caption light_gray_bg sfb medium tp-resizeme" data-x="50" data-y="320" data-speed="600" data-start="2200" data-end="9400" data-endspeed="600"><?php echo $slider_content_heading_listd;?></div>

                    <!-- LAYER NR. 10 -->
                    <!-- And Many More... -->
                    <div class="tp-caption dark_gray_bg sfb medium tp-resizeme" data-x="0" data-y="370" data-speed="600" data-start="2400" data-end="9400" data-endspeed="600"><?php echo $slider_content_heading_button;?></div>
                </li>
                <!-- slide 1 end -->

                <!-- slide 2 start -->
                <?php 

                $slider_content_two_heading        = get_field('slider_content_two_heading');
                $slider_content_two_heading_lista  = get_field('slider_content_two_heading_lista');
                $slider_content_two_heading_listb  = get_field('slider_content_two_heading_listb');
                $slider_content_two_heading_listc  = get_field('slider_content_two_heading_listc');
                $slider_content_two_heading_listd  = get_field('slider_content_two_heading_listd');
                $slider_content_two_heading_button = get_field('slider_content_two_heading_button');
                 $slider_two_image = get_field('slider_two_image');


                ?>

                <li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Powerful Bootstrap Theme">
                    <img
                        src="<?php echo $slider_two_image;?>"
                        alt="kenburns"
                        data-bgposition="left center"
                        data-kenburns="on"
                        data-duration="10000"
                        data-ease="Linear.easeNone"
                        data-bgfit="100"
                        data-bgfitend="115"
                        data-bgpositionend="right center"
                    />
                    <!-- main image -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_bg large sfr tp-resizeme" data-x="0" data-y="70" data-speed="600" data-start="1200" data-end="9400" data-endspeed="600"><?php echo $slider_content_two_heading;?></div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption default_bg sfl medium tp-resizeme" data-x="0" data-y="170" data-speed="600" data-start="1600" data-end="9400" data-endspeed="600"><i class="icon-check"></i></div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption white_bg sfb medium tp-resizeme" data-x="50" data-y="170" data-speed="600" data-start="1600" data-end="9400" data-endspeed="600"><?php echo $slider_content_two_heading_lista;?></div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption default_bg sfl medium tp-resizeme" data-x="0" data-y="220" data-speed="600" data-start="1800" data-end="9400" data-endspeed="600"><i class="icon-check"></i></div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption white_bg sfb medium tp-resizeme" data-x="50" data-y="220" data-speed="600" data-start="1800" data-end="9400" data-endspeed="600"><?php echo $slider_content_two_heading_listb;?></div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption default_bg sfl medium tp-resizeme" data-x="0" data-y="270" data-speed="600" data-start="2000" data-end="9400" data-endspeed="600"><i class="icon-check"></i></div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption white_bg sfb medium tp-resizeme" data-x="50" data-y="270" data-speed="600" data-start="2000" data-end="9400" data-endspeed="600"><?php echo $slider_content_two_heading_listc;?></div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption default_bg sfl medium tp-resizeme" data-x="0" data-y="320" data-speed="600" data-start="2200" data-end="9400" data-endspeed="600"><i class="icon-check"></i></div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption white_bg sfb medium tp-resizeme" data-x="50" data-y="320" data-speed="600" data-start="2200" data-end="9400" data-endspeed="600"><?php echo $slider_content_two_heading_listd;?></div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption default_bg sfb medium tp-resizeme" data-x="0" data-y="370" data-speed="600" data-start="2400" data-end="9400" data-endspeed="600"><?php echo $slider_content_two_heading_button;?></div>
                </li>
                <!-- slide 2 end -->

                <!-- slide 3 start -->
                <?php 

                $slider_content_three_heading        = get_field('slider_content_three_heading');
                $slider_content_three_heading_lista  = get_field('slider_content_three_heading_lista');
                $slider_content_three_heading_listb  = get_field('slider_content_three_heading_listb');
                $slider_content_three_heading_listc  = get_field('slider_content_three_heading_listc');
                $slider_content_three_heading_listd  = get_field('slider_content_three_heading_listd');
                $slider_content_three_heading_button = get_field('slider_content_three_heading_button');
                $slider_three_image = get_field('slider_three_image');

                ?>
                <li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Powerful Bootstrap Theme">
                    <!-- main image -->
                    <img src="<?php echo $slider_three_image;?>" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_bg large sfr tp-resizeme" data-x="0" data-y="70" data-speed="600" data-start="1200" data-end="9400" data-endspeed="600"><?php echo $slider_content_three_heading;?></div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption dark_gray_bg sfl medium tp-resizeme" data-x="0" data-y="170" data-speed="600" data-start="1600" data-end="9400" data-endspeed="600"><i class="icon-check"></i></div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption white_bg sfb medium tp-resizeme" data-x="50" data-y="170" data-speed="600" data-start="1600" data-end="9400" data-endspeed="600"><?php echo $slider_content_three_heading_lista;?></div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption dark_gray_bg sfl medium tp-resizeme" data-x="0" data-y="220" data-speed="600" data-start="1800" data-end="9400" data-endspeed="600"><i class="icon-check"></i></div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption white_bg sfb medium tp-resizeme" data-x="50" data-y="220" data-speed="600" data-start="1800" data-end="9400" data-endspeed="600"><?php echo $slider_content_three_heading_listb;?></div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption dark_gray_bg sfl medium tp-resizeme" data-x="0" data-y="270" data-speed="600" data-start="2000" data-end="9400" data-endspeed="600"><i class="icon-check"></i></div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption white_bg sfb medium tp-resizeme" data-x="50" data-y="270" data-speed="600" data-start="2000" data-end="9400" data-endspeed="600">
                        <?php echo $slider_content_three_heading_listc;?>
                    </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption dark_gray_bg sfl medium tp-resizeme" data-x="0" data-y="320" data-speed="600" data-start="2200" data-end="9400" data-endspeed="600"><i class="icon-check"></i></div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption white_bg sfb medium tp-resizeme" data-x="50" data-y="320" data-speed="600" data-start="2200" data-end="9400" data-endspeed="600"><?php echo $slider_content_three_heading_listd;?></div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption dark_gray_bg sfb medium tp-resizeme" data-x="0" data-y="370" data-speed="600" data-start="2400" data-end="9400" data-endspeed="600"><?php echo $slider_content_three_heading_button;?></div>
                </li>
                <!-- slide 3 end -->
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <!-- slider revolution end -->
</div>
