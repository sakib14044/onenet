<div class="section clearfix">
	<div class="container">
		<!-- accordian php start -->
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
		<!-- accordian php end -->



		<h2 class="title"><?php echo $accordian_section_header;?></h2>
		<div class="separator-2"></div>
		<br>
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
					<div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="85%">
						<span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="200"><?php echo $accordian_progress_one;?></span>
					</div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="95%">
						<span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="200"><?php echo $accordian_progress_two;?></span>
					</div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="80%">
						<span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="200"><?php echo $accordian_progress_three;?></span>
					</div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="99%">
						<span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="200"><?php echo $accordian_progress_four;?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>