<?php get_header(); the_post() ?>
    <div class="container con-product hidden-xs">

        <div class="row">
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
                    <div class="col-sm-4">
                        <div class="img-feature">
                            <a href="<?php echo get_the_permalink()?>"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>


            <?php endif; ?>



        </div>

    </div>
    <div class="container">
        <section class="section-slot clearfix">
            <div class="row">
                <div class="col-sm-5">

                    <?php

                    $images = get_field('gallery_product');

                    if( $images ): ?>
                        <div  class="flexslider flexslider-slider">
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
                <div class="col-sm-7">

                    <?php
                    // Image LOGO
                    $image = get_field('logo_product');

                    if (!empty($image)): ?>

                        <img class="img-responsive img-product-logo" src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt']; ?>"/>
                    <?php else:

                        the_title();
                        ?>

                    <?php endif; ?>


                    <div class="detail-product">
                        <?php the_content() ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">

                            <?php

                            $file = get_field('catalog_product');

                            if( $file ): ?>

                                <a class="hlight" href="<?php echo $file['url']; ?>"><< Download Catalog >></a>

                            <?php endif; ?>

                        </div>
                        <div class="col-sm-6">
                            <?php
                            // Image Right
                            $image = get_field('image_right');

                            if (!empty($image)): ?>

                                <img class="img-responsive" src="<?php echo $image['url']; ?>"
                                     alt="<?php echo $image['alt']; ?>"/>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>
    <div class="container con-product visible-xs">

        <div class="row">
            <?php

            $args = array(
                'post_type' => product
            );
            // the query
            $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-sm-4">
                        <div class="img-feature">
                            <a href="<?php echo get_the_permalink()?>"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>


            <?php endif; ?>



        </div>

    </div>
<?php get_footer(); ?>