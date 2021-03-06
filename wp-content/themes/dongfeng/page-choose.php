<?php get_header(); ?>

	<div class="container">




		<div class="col-sm-5 col-md-3">
			<div class="social-box">
				<div class="social-head">
					<i class="fa fa-facebook-square"></i> Facebook DSFK Thaikand
				</div>
				<div class="social-content">
					<div id="fb-root"></div>
					<script>(function (d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s);
							js.id = id;
							js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=606913129380790";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
					<div class="fb-page"
					     data-tabs="timeline,events,messages"
					     data-href="https://www.facebook.com/DFSK.Thailand"
					     data-width="100%"
					     data-hide-cover="false"></div>
				</div>
			</div>
			<div class="social-box">
				<div class="social-head">
					<i class="fa fa-youtube-square"></i> Test drive DSFK Thailand
				</div>
				<div class="social-content">
					<div class="videoWrapper">
						<?php echo get_field('video_test_drive')?>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-7 col-md-9">
			<div class="txt-head"><h1>เหตุผลที่เลือกตงฟง</h1>
				<div class="hr"></div>
				<h4>เสียงตอบรับจากลูกค้า</h4>
			</div>


			<div class="slide-content">
				<?php

				$images = get_field('gallery_1');

				if( $images ): ?>
					<div  class="flexslider flexslider-slider loading">
						<ul class="slides">
							<?php foreach( $images as $image ): ?>

								<li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div  class="flexslider flexslider-carousel carousel">
						<ul class="slides">
							<?php foreach( $images as $image ): ?>
								<li>
									<img class="img-responsive" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>

			<div class="clearfix"></div>

			<div class="slide-content">
				<?php

				$images = get_field('gallery_2');

				if( $images ): ?>
					<div  class="flexslider flexslider-slider2 loading">
						<ul class="slides">
							<?php foreach( $images as $image ): ?>

								<li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div  class="flexslider flexslider-carousel2 carousel">
						<ul class="slides">
							<?php foreach( $images as $image ): ?>
								<li>
									<img class="img-responsive" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>

			<br><br>

			<div class="txt-head"><h1><?php echo get_field('title_detail') ?></h1>
				<div class="hr"></div>

			</div>
			<h4><?php echo get_field('detail') ?></h4>
			<div class="row">
				<?php
				// Image Right
				$image = get_field('image_1');

				if (!empty($image)): ?>
					<div class="col-sm-6">
						<img style="margin-bottom: 10px;" class="img-responsive" src="<?php echo $image['url']; ?>"
							 alt="<?php echo $image['alt']; ?>"/>
					</div>

				<?php endif; ?>

				<?php
				// Image Right
				$image = get_field('image_2');

				if (!empty($image)): ?>
					<div class="col-sm-6">
						<img style="margin-bottom: 10px;" class="img-responsive" src="<?php echo $image['url']; ?>"
							 alt="<?php echo $image['alt']; ?>"/>
					</div>


				<?php endif; ?>
			</div>

			<br><br>


		</div>

	</div>
<?php get_footer(); ?>