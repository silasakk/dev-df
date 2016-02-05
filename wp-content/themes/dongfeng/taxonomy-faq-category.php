<?php get_header(); ?>
<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
<section class="page-section">
    <div class="container">
        <h1 class="head-page">ถามตอบ</h1>

        <div class="row">
            <div class="col-sm-3">
                <div class="faq-cat">
                    <a href="<?php echo site_url('faq') ?>">ทั้งหมด</a>
                    <?php $categories = get_terms('faq-category', 'hide_empty=0');

                    foreach ($categories as $term_): ?>
                        <a <?php echo ($term_->term_id == $term->term_id)? "class='active'" : "" ?> href="<?php echo get_term_link($term_) ?>"><?php echo $term_->name ?></a>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="faq-list">
                    <div class="row">
                        <?php

                        $args = array(
                            'post_type' => 'faq',
                            'tax_query'=>array(
                                array(
                                    'taxonomy' => 'faq-category',
                                    'field' => 'term_id',
                                    'terms' => $term->term_id


                                )
                            )
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

                        <?php else: ?>
                            <p class="well">Sorry no data</p>
                        <?php endif; ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>