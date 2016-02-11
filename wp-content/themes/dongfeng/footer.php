
<section class="clearfix">
	<div class="footer">
		<div class="container">
			<div class="col-sm-6">
                <div class="copyright" style="line-height: 93px; font-size: 12px; ">
                    Copyright @2015 dongfeng.co.th All right reserved.
                </div>
            </div>
            <div class="col-sm-6" style="text-align: center ;margin-bottom: 10px;">
				<a target="_blank" href="http://unitedmotors.co.th/"><img style="margin-top: 5px;" src="<?php echo get_template_directory_uri() ?>/assets/images/logo-footer2.jpg" alt="" class="img-responsive lfooter"></a>
            </div>

		</div>
	</div>
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.flexslider-min.js"></script>

<script src="<?php echo get_template_directory_uri() ?>/assets/js/lightgallery.min.js"></script>
<!-- Place in the <head>, after the three links -->

<?php wp_footer(); ?>


<script type="text/javascript" charset="utf-8">

    $(window).load(function() {
		$("#lightgallery").lightGallery({
			selector: '.item'
		});
		$('.flexslider-home').flexslider({
		    directionNav: false,
		    start: function(slider) {
			    slider.removeClass('loading');
		    }
	    });


	    $('.flexslider-carousel').flexslider({
		    animation: "slide",

		    controlNav: false,
		    animationLoop: false,
		    slideshow: false,
		    itemWidth: 100,
		    itemMargin: 20,
		    asNavFor: '.flexslider-slider',

	    });

	    $('.flexslider-slider').flexslider({



		    animation: "slide",
		    controlNav: false,
		    animationLoop: false,
		    slideshow: false,
		    sync: ".flexslider-carousel",
		    start: function(slider) {
			    slider.removeClass('loading');
		    }
	    });

	    $('.flexslider-carousel2').flexslider({
		    animation: "slide",

		    controlNav: false,
		    animationLoop: false,
		    slideshow: false,
		    itemWidth: 100,
		    itemMargin: 20,
		    asNavFor: '.flexslider-slider2'
	    });

	    $('.flexslider-slider2').flexslider({



		    animation: "slide",
		    controlNav: false,
		    animationLoop: false,
		    slideshow: false,
		    sync: ".flexslider-carousel2",
		    start: function(slider) {
			    slider.removeClass('loading');
		    }
	    });


    });
</script>
</body>
</html>