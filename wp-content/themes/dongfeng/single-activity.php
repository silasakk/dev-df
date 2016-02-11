
<?php get_header(); the_post() ?>

    <div class="container">
        <section class="page-section single-activity clearfix">
            <div class="title"><?php echo the_title()?></div>
            <div class="ddate"><?php echo get_the_date('d / m / Y') ?></div>
            <div class="detail">
                <div class="img-cover text-center">
                    <?php   the_post_thumbnail()?><br><br>
                </div>
                <?php the_content()?>

                <?php

                $images = get_field('act_gallery');

                if( $images ): ?>
                    <ul class="list-unstyled act-gallery" id="lightgallery"">
                        <?php foreach( $images as $image ): ?>
                            <li class="col-sm-3">
                                <a class="item" href="<?php echo $image['url']; ?>">
                                    <img class="img-responsive" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>

                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </section>
    </div>

<?php get_footer(); ?>