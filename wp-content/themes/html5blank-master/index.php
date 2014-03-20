<?php get_header(); ?>
<div class="homePageTemplate">
    <?php get_template_part('page', 'slideshow'); ?>

    <div class="container">
        <?php $home = current(get_posts(array('post_type' => 'home'))); ?>

        <div class="spaceForSlider">
            <div class="row">
                <div class="col-md-7">
                    <h1><?php echo $home->post_title; ?></h1>

                    <p><?php echo $home->post_content; ?></p>
                </div>
                <div class="col-md-5 withHomepagePadding"></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
