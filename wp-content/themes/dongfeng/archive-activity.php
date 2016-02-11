<?php get_header(); ?>
<section class="page-section">
    <div class="container">
        <h1 class="head-page">ข่าวสาร</h1>

        <?php

        $args = array(
            'post_type' => 'activity',
            'posts_per_page' => 1,
            'meta_query' => array(
                array(
                    'meta_key' => 'activity_feature',
                    'meta_vakue' => '1',
                    'compare'    => '='
                )
            )
        );
        // the query
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <!-- pagination here -->

            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="news-feature">
                    <div class="row">
                        <div class="col-sm-5">
                            <a href="<?php echo get_permalink() ?>"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url()?>" alt=""></a>
                        </div>
                        <div class="col-sm-7">
                            <div class="ddate"><?php echo get_the_date('d / m / Y') ?></div>
                            <div class="title">
                                <a href="<?php echo get_the_permalink()?>"><?php echo the_title()?></a>
                            </div>
                            <div class="detail">
                                <?php  $suffix = get_the_content(); echo mb_strimwidth($suffix, 0,500,'...'); ?>
                            </div>
                            <a href="<?php echo get_the_permalink()?> " class="read-more">
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




        <div class="news-list">
            <div class="row">
                <?php

                $args = array(
                    'post_type' => 'activity'
                );
                // the query
                $the_query = new WP_Query( $args ); ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-sm-3">
                            <a href="<?php  echo get_permalink()?>"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url()?>" alt=""></a>
                            <div class="ddate"><?php echo get_the_date('d / m / Y') ?></div>
                            <div class="title">
                                <a href="<?php echo get_the_permalink()?>"><?php echo get_the_title()?></a>
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
<?php get_footer() ?>