<?php get_header(); ?>
    <!--<div class="section-banner">

        <div class="flexslider flexslider-home">
            <ul class="slides">
                <li>
                    <img src="<?php /*echo get_template_directory_uri() */?>/assets/images/slide1.png"/>
                </li>
                <li>
                    <img src="<?php /*echo get_template_directory_uri() */?>/assets/images/slide1_0.png"/>
                </li>
                <li>
                    <img src="<?php /*echo get_template_directory_uri() */?>/assets/images/slide2.png"/>
                </li>
                <li>
                    <img src="<?php /*echo get_template_directory_uri() */?>/assets/images/slide3.png"/>
                </li>
            </ul>
        </div>
    </div>-->

<section class="section-con">
	<div class="container">

		<div class="row">
			<div class="col-sm-6 text-center">
				<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/images/dongfeng-map.jpg" alt="">
			</div>
			<div class="col-sm-6">
				<div class="txt-head"><h1>Contact Us</h1>
					<div class="hr"></div>
				</div>
				<ul class="list-unstyled list-contact">



					<li><i class="fa fa-map-marker"></i> บริษัท ยูไนเต็ด มอเตอร์ส จำกัด (สำนักงานใหญ่)<br> 44 ถ.ติวานนท์  ต.บางกระสอ อ.เมืองนนทบุรี จ.นนทบุรี 11000</li>
					<li><i class="fa fa-phone"></i> 0-2978-5640-43</li>
					<li><i class="fa fa-fax"></i> 0-2978-5648</li>
					<li><i class="fa fa-envelope"></i> mkt@unitedmotors.co.th</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 text-center">
				<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/images/contact-1.jpg" alt="">
			</div>
			<div class="col-sm-6">
				<div class="txt-head"><h1>กรอกข้อมูลเพื่อติดต่อ</h1>
					<div class="hr"></div>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="13" title="Contact form 1"]')?>
			</div>
		</div>

	</div>
</section>
<?php get_footer(); ?>