<!-- section start -->
<!-- ================ -->
<div class="section gray-bg text-muted footer-top clearfix">
	<div class="container">
		<div class="row">

			<?php 
				$client_img_one   = get_field('client_img_one');
				$client_img_two   = get_field('client_img_two');
				$client_img_three = get_field('client_img_three');
				$client_img_four  = get_field('client_img_four');
				$client_img_five  = get_field('client_img_five');
				$client_img_six   = get_field('client_img_six');
				$client_img_seven = get_field('client_img_seven');
				$client_img_eight = get_field('client_img_eight');
                $client_text      = get_field('client_text');
                $client_name      = get_field('client_name');
                

                ?>



			<div class="col-md-6">
				<div class="owl-carousel clients">
					
					<div class="client">
						<a><img src="<?php echo $client_img_one;?>" alt=""></a>
					</div>
					<div class="client">
						<a><img src="<?php echo $client_img_two;?>" alt=""></a>
					</div>
					<div class="client">
						<a><img src="<?php echo $client_img_three;?>" alt=""></a>
					</div>
					
					<div class="client">
						<a><img src="<?php echo $client_img_four;?>" alt=""></a>
					</div>
					<div class="client">
						<a><img src="<?php echo $client_img_five;?>" alt=""></a>
					</div>
					<div class="client">
						<a><img src="<?php echo $client_img_six;?>" alt=""></a>
					</div>
					<div class="client">
						<a><img src="<?php echo $client_img_seven;?>" alt=""></a>
					</div>
					<div class="client">
						<a><img src="<?php echo $client_img_eight;?>" alt=""></a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<blockquote class="inline">
					<p class="margin-clear"><?php echo $client_text;?>  </p>	
					<footer><cite title="Source Title"><?php echo $client_name;?></cite></footer>
				</blockquote>
			</div>
		</div>
	</div>
</div>
<!-- section end -->