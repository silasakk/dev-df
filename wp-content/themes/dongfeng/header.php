<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


	<?php wp_head(); ?>

	<!-- Bootstrap -->
	<link href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/assets/css/flexslider.css" rel="stylesheet">
	<!-- Main Style -->
	<link href="<?php echo get_template_directory_uri() ?>/assets/css/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
<section class="head">
	<div class="nav-header">


		<div class="head-menu">
			<div class="container" style="position: relative">
				<div class="logo">
                    <a href="<?php echo site_url()?>">
                        <img class="hidden-xs hidden-sm" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
                        <img class="visible-xs visible-sm" src="<?php echo get_template_directory_uri() ?>/assets/images/logo-mobile.png" alt="">
                    </a>
				</div>
				<div class="menu-mobile" onclick="$('.menu-list-mobile').toggle()">
					<i class="fa fa-bars"></i>
				</div>
				<ul class="menu-list-mobile list-unstyled">

					<li><a href="<?php echo site_url('about') ?>">เกี่ยวกับเรา</a></li>
					<li class="has-sub" onclick="$(this).find('.sub-menu').toggle()">
						<a href="javascript:;   ">รุ่นรถ <i style="margin-top: 3px" class="fa fa-caret-down pull-right"></i></a>
						<ul class="sub-menu list-unstyled">
							<?php

							$args = array(
								'post_type' => 'product'
							);
							// the query
							$the_query = new WP_Query( $args ); ?>

							<?php if ( $the_query->have_posts() ) : ?>

								<!-- pagination here -->

								<!-- the loop -->
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

										<li><a href="<?php echo get_the_permalink()?>"><i style="margin-left: -5px" class="fa fa-caret-right"></i> <?php echo the_title()?></a></li>


								<?php endwhile; ?>
								<!-- end of the loop -->

								<!-- pagination here -->

								<?php wp_reset_postdata(); ?>


							<?php endif; ?>

						</ul>
					</li>
					<li><a href="<?php echo site_url('activity')?>">ข่าวและกิจกรรม</a></li>
					<li><a href="<?php echo site_url('choose')?>">เหตุผลที่เลือกตงฟง</a></li>
					<li><a href="<?php echo site_url('dealer')?>">ผู้แทนจำหน่ายทั่วประเทศ</a></li>
					<li><a href="">ถามตอบ</a></li>
					<li><a href="<?php echo site_url('contact')?>">ติดต่อเรา & สมัครงาน</a></li>
				</ul>

			</div>
		</div>
	</div>
</section>




