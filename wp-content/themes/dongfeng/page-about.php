<?php get_header(); ?>
    <div class="container">

        <?php if (have_rows('about_page_slider')): ?>
            <section class="section-con clearfix">
                <div class="flexslider flexslider-home">
                    <ul class="slides">
                        <?php while (have_rows('about_page_slider')): the_row();
                            // vars
                            $image = get_sub_field('about_page_slider_image');

                            ?>
                            <li class="slide">
                                <img class="img-responsive" src="<?php echo $image['url']; ?>"
                                     alt="<?php echo $image['alt'] ?>"/>

                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </section>

        <?php endif; ?>


    </div>
    <div class="container">
        <section class="section-slot clearfix">
            <div class="lbl-web">
                <h1>ABOUT US</h1>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-push-8">
                    <?php

                    $image = get_field('about_page_image_');

                    if (!empty($image)): ?>

                        <img class="img-responsive" src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt']; ?>"/>

                    <?php endif; ?>

                </div>
                <div class="col-sm-8 col-sm-pull-4">
                    <?php the_post();echo the_content(); ?>
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <?php

                $image = get_field('about_page_image_bottom');

                if (!empty($image)): ?>

                    <img class="img-responsive" style="display: inline-block" src="<?php echo $image['url']; ?>"
                         alt="<?php echo $image['alt']; ?>"/>

                <?php endif; ?>
            </div>
        </section>
    </div>
<?php get_footer(); ?>