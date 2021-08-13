<div id="articlesTools">
    <div class="articleTool">
        <h1 class="articleToolTitle">مطالب پیشنهادی</h1>
        <?php
        $recommendedArticlesQuery = new WP_Query(array(
            "category_name" => "recommended",
            "posts_per_page" => 5
        ));
        if ($recommendedArticlesQuery->have_posts()) {
            while ($recommendedArticlesQuery->have_posts()) {
                $recommendedArticlesQuery->the_post();
        ?>
                <div class="articleToolContent">
                    <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="articleToolContentImg">
                    <h1 class="articleToolContentTitle"><?php the_title(); ?></h1>
                    <h2 class="articleToolContentDetails"><?php echo get_the_author() . " | " . get_the_date() . " | " . get_the_time(); ?></h2>
                </div>
        <?php
            }
        }
        ?>

    </div>
    <br>

    <div class="articleTool">
        <h1 class="articleToolTitle">پر‌بازدید ترین‌ها</h1>
        <?php
        query_posts('meta_key=post_views_count&showposts=4&orderby=meta_value_num&order=DESC');
        if (have_posts()) : while (have_posts()) : the_post();
        ?>
        <div class="articleToolContent">
            <a href="<?php echo get_the_permalink(); ?>"><img loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="articleToolContentImg"></a>
            <a href="<?php echo get_the_permalink(); ?>"><h1 class="articleToolContentTitle"><?php the_title(); ?></h1></a>
            <h2 class="articleToolContentDetails"><?php echo getPostInfo(); ?></h2>
        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
    </div>
</div>