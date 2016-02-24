<?php echo get_header() ?>
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/images/map.jpg"
                         alt="">
                </div>
                <div class="col-sm-12">
                    <div class="lbl-d">
                        บริษัท ยูไนเต็ด มอเตอร์ส จำกัด (สำนักงานใหญ่) 44 ถ.ติวานนท์ ต.บางกระสอ อ.เมืองนนทบุรี จ.นนทบุรี
                        11000 0-2978-5640-43
                    </div>
                </div>
            </div>
            <div class="fd">
                <div class="row">


                    <?php
                    $categories = get_terms('delear-sector', 'hide_empty=0');

                    foreach ($categories as $k => $term): ?>

                        <div class="col-sm-6">
                            <div class="tb-head"><?php echo $term->name ?></div>

                            <table>
                                <?php
                                $args = array(
                                    'post_type' => 'dealear',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'delear-sector',
                                            'field' => 'slug',
                                            'terms' => $term->slug,
                                        ),
                                    ),
                                );
                                // the query
                                $the_query = new WP_Query($args); ?>

                                <?php if ($the_query->have_posts()) : ?>

                                    <!-- pagination here -->

                                    <!-- the loop -->
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <tr>
                                            <td width="43%" style="padding: 5px;vertical-align: top"><?php the_title() ?></td>
                                            <td width="23%" style="padding: 5px;vertical-align: top"><?php echo get_field('province') ?></td>
                                            <td width="33%" style="padding: 5px;vertical-align: top">T <?php echo get_field('tel') ?>
                                                 <?php echo get_field('mobile') ?> </td>
                                        </tr>
                                    <?php endwhile; ?>
                                    <!-- end of the loop -->

                                    <!-- pagination here -->

                                    <?php wp_reset_postdata(); ?>

                                <?php else : ?>
                                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                                <?php endif; ?>

                            </table>

                        </div>
                        <?php if((($k + 1) % 2) == 0 && $k > 0):?>
                            <div class="clearfix"></div>
                        <?php endif; ?>
                    <?php endforeach ?>


                </div>
            </div>
        </div>
    </section>
<?php get_footer() ?>