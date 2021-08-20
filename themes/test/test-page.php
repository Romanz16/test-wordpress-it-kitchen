<?php /* Template Name: Test page*/ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="hero" style="background-image: url(<?php the_field('background_image'); ?>);">
            <div class="container">
                <div class="hero-info">
                    <div class="title">
                        <?php the_field('title'); ?>
                    </div>
                    <div class="description">
                        <?php the_field('description'); ?>
                    </div>
                    <div class="to-catalog">
                        <a href="<?php the_field('button_link'); ?>"> <?php the_field('button_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2><?php _e('ORDER NOW!', 'test'); ?></h2>
            <div class="order_now">
                <?php the_content(); ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>