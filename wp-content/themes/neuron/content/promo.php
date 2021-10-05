<?php

$promo_title = cs_get_option('promo_title');
$promo_content = cs_get_option('promo_content');

?>

<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
<section class="section-padding darker-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                <div class="intro-title text-center">
                    <h2><?php echo $promo_title; ?> </h2>
                    <div class="hidden-xs">
                        <?php echo wpautop($promo_content); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            global $post;
            $args = array('posts_per_page' => 3, 'post_type' => 'feature', 'orderby' => 'menu_order', 'order' => 'ASC');
            $myposts = get_posts($args);
            foreach ($myposts as $post) : setup_postdata($post); ?>

                <!-- single intro -->
                <div class="col-md-4">
                    <div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);" class="single-intro">
                        <div class="intro-img"></div>
                        <div class="intro-details text-center">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

            <?php endforeach;
            wp_reset_query(); ?>


            <!-- single intro -->

        </div>
    </div>
</section><!-- intro area end -->