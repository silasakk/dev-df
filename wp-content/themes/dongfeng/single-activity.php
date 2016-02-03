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
            </div>
        </section>
    </div>

<?php get_footer(); ?>