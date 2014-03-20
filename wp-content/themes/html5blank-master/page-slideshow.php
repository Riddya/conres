<div class="mainPageSlideshow">

    <?php $items = get_posts(array('post_type' => 'basic_slider')); ?>

    <div class="flexFull flexslider">
        <ul class="slides">
            <?php foreach ($items as $item): ?>

                <?php $image = get_metadata('post', $item->ID, 'image', true); ?>
                <li>
                    <div style="background-image:url(<?php echo $image['guid']; ?>);"
                         class="<?php echo get_metadata('post', $item->ID, 'gradient', true) ? 'whiteOverlay' : ''; ?>">
                        <div class="container">
                            <div class="slideDescription">
                                <h3><span><?php echo $item->post_title; ?></span></h3>

                                <p><?php echo get_metadata('post', $item->ID, 'short_description', true); ?></p>
                                <a href="<?php echo get_metadata('post', $item->ID, 'link', true); ?>" class="moreBtn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</div>