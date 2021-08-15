<div id="bigNews">
    <?php
    $bigNewsQuery = new WP_Query(array(
        "category_name" => "big-news",
        "posts_per_page" => 3
    ));
    while ($bigNewsQuery->have_posts()) {
        $bigNewsQuery->the_post();
    ?>
        <div class="bigNewsItem">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="bigNewsImage">
                <h1 class="bigNewsTitle"><?php the_title(); ?></h1>
            </a>
        </div>
    <?php
    }
    ?>
</div>