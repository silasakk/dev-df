<?php get_header(); ?>
    <section class="page-section">
        <div class="container">
            <h1 class="head-page">รับสมัครงาน</h1>

            <div class="career-list">
                <div class="row">
                    <?php

                    $args = array(
                        'post_type' => 'career'
                    );
                    // the query
                    $the_query = new WP_Query( $args ); ?>

                    <?php if ( $the_query->have_posts() ) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="career-panel">
                                    <div class="title">
                                        <?php echo get_the_title()?>
                                    </div>
                                    <div class="detail">
                                        <div class="career-head">คุณสมบัติ</div>
                                        <div>
                                            <?php echo get_the_content()?>
                                        </div>
                                        <div class="clearfix"></div>
                                        <a class="download-btn" href="<?php echo get_field('file_download')?>">Download</a>
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
<?php get_footer() ?>