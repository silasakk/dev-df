<?php get_header(); ?>
    <div class="section-banner">
        <?php

        $images = get_field('home_slider');

        if ($images): ?>
            <div class="flexslider flexslider-home">
                <ul class="slides">
                    <?php foreach ($images as $image): ?>

                        <li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
                                 class="img-responsive"></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        <?php endif; ?>
    </div>

    <div class="container">
        <section class="section-con clearfix">
            <?php

            $args = array(
                'post_type' => 'product'
            );
            // the query
            $the_query = new WP_Query($args); ?>

            <?php if ($the_query->have_posts()) : ?>

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-sm-4">
                        <div class="img-feature">
                            <a href="<?php echo get_the_permalink() ?>"><img class="img-responsive"
                                                                             src="<?php echo get_the_post_thumbnail_url() ?>"
                                                                             alt=""></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>


            <?php endif; ?>
        </section>
        <section class="section-con clearfix">
            <div class="col-sm-3">
                <div class="home-ads">
                    <?php
                    // Image Right
                    $image = get_field('home_image_left');

                    if (!empty($image)): ?>
                        <img style="margin-bottom: 10px;" class="img-responsive" src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt']; ?>"/>


                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="home-content">
                    <div class="home-item">
                        <div class="txt-head">
                            <h1><?php the_field('home_welcome_text'); ?></h1>
                            <div class="hr"></div>
                        </div>
                        <div class="home-detail">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="home-item-thumb">
                                        <?php
                                        // Image Right
                                        $image = get_field('home_welcome_image');

                                        if (!empty($image)): ?>

                                            <img style="margin-bottom: 10px;" class="img-responsive"
                                                 src="<?php echo $image['url']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>


                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="home-item-txt">

                                        <?php the_field('home_welcome_detail') ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-item">
                        <div class="txt-head"><h1>ข่าวสารและกิจกรรม</h1>
                            <div class="hr"></div>
                        </div>
                        <?php

                        $args = array(
                            'post_type' => 'activity',
                            'posts_per_page' => 1,
                            'meta_query' => array(
                                array(
                                    'meta_key' => 'activity_feature',
                                    'meta_vakue' => '1',
                                    'compare' => '='
                                )
                            )
                        );
                        // the query
                        $the_query = new WP_Query($args); ?>

                        <?php if ($the_query->have_posts()) : ?>

                            <!-- pagination here -->

                            <!-- the loop -->
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                <div class="news-feature">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url() ?>"
                                                 alt="">
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="ddate"><?php echo get_the_date('d / m / Y') ?></div>
                                            <div class="title">
                                                <a href="<?php echo get_the_permalink() ?>"><?php echo the_title() ?></a>
                                            </div>
                                            <div class="detail">
                                                <?php  echo wp_trim_words( get_the_content(), 300, '' )  ?>
                                            </div>
                                            <a href="<?php echo get_the_permalink() ?> " class="read-more">
                                                อ่านต่อ <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            <?php endwhile; ?>
                            <!-- end of the loop -->

                            <!-- pagination here -->

                            <?php wp_reset_postdata(); ?>


                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
<?php get_footer(); ?>