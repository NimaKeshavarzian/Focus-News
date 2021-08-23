<!-- Ads -->
<div class="ads">
    <?php
    dynamic_sidebar('secondary-ad');
    ?>
</div>
<br>

<div id="articlesTools">
    <div class="articleTool">
        <a href="<?php echo get_category_link(get_cat_ID('مطالب پیشنهادی')); ?>"><h1 class="articleToolTitle">مطالب پیشنهادی</h1></a>
        <?php
        $recommendedArticlesQuery = new WP_Query(array(
            "category_name" => "recommended",
            "posts_per_page" => 5
        ));
        if ($recommendedArticlesQuery->have_posts()) :
            while ($recommendedArticlesQuery->have_posts()) :
                $recommendedArticlesQuery->the_post();
        ?>
                <article>
                    <a href="<?php the_permalink(); ?>" class="titleLink">
                        <div class="articleToolContent">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="articleToolContentImg" width="120" height="100" loading="lazy">
                            <h1 class="articleToolsContentTitle"><?php the_title(); ?></h1>
                            <h2 class="articleToolsContentDetails"><?php echo getPostInfo(); ?></h2>
                        </div>
                    </a>
                </article>
        <?php
            endwhile;
        endif;
        ?>
    </div>
    <br>

    <div class="articleTool">
        <h1 class="articleToolTitle">پر‌بازدید ترین‌ها</h1>
        <?php
        query_posts('meta_key=post_views_count&showposts=4&orderby=meta_value_num&order=DESC');
        if (have_posts()) : while (have_posts()) : the_post();
        ?>
                <article>
                    <a href="<?php the_permalink(); ?>" class="titleLink">
                        <div class="articleToolContent">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="articleToolContentImg" width="120" height="100" loading="lazy">
                            <h1 class="articleToolsContentTitle"><?php the_title(); ?></h1>
                            <h2 class="articleToolsContentDetails"><?php echo getPostInfo(); ?></h2>
                        </div>
                    </a>
                </article>
        <?php endwhile;
        endif;
        wp_reset_query(); ?>
    </div>
</div>