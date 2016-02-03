<?php get_header(); ?>
<section class="page-section">
    <div class="container">
        <h1 class="head-page">ถามตอบ</h1>

        <div class="row">
            <div class="col-sm-6">
                <div class="faq-cat">
                    <?php $categories = get_terms('delear-sector', 'hide_empty=0');

                    foreach ($categories as $term): ?>
                        <a href=""><?php echo $term->name ?></a>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="faq-list">
                    <div class="row">
                        <?php

                        $args = array(
                            'post_type' => 'faq'
                        );
                        // the query
                        $the_query = new WP_Query( $args ); ?>

                        <?php if ( $the_query->have_posts() ) : ?>

                            <!-- pagination here -->

                            <!-- the loop -->
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div class="faq-item">
                                    <div class="col-sm-12">
                                        <div class="title"><span class="ico-faq"> Q </span> <?php echo get_the_title() ?></div>
                                        <div class="content"><?php echo get_the_content() ?></div>
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
        </div>
    </div>
</section>
<?php get_footer() ?>