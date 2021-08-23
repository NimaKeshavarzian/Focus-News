<div id="slider">
    <?php
    $sliderQuery = new WP_Query(array(
        "category_name" => "slider",
        "posts_per_page" => 3
    ));
    if($sliderQuery->have_posts()) {
    while ($sliderQuery->have_posts()) {
        $sliderQuery->the_post();
    ?>
        <div class="sliderItem">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="sliderImage">
                <h1 class="sliderTitle"><?php the_title(); ?></h1>
            </a>
        </div>
    <?php
    }
} else {
    echo '<h1 class="null">مطلبی برای نمایش وجود ندارد!</h1>';
}
    ?>
</div>