<div id="bigNews">
    <?php
    $bigNewsQuery = new WP_Query(array("category_name" => "big-news", "posts_per_page" => 3));
    if ($bigNewsQuery->have_posts()) {
        while ($bigNewsQuery->have_posts()) {
            $bigNewsQuery->the_post();
    ?>
            <a href="<?php the_permalink() ?>" class="bigNewsLink">
                <div class="bigNewsItem">
                    <div class="bigNewsImage">
                        <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="bigNewsData">
                        <h1 class="bigNewsTitle"><?php the_title(); ?></h1>
                    </div>
                </div>
            </a>
    <?php
        }
    }
    ?>
</div>