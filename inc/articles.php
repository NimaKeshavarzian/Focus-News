<div id="articles">
    <h1 id="articlesTitle">آخرین مطالب</h1>

    <?php
    while (have_posts()) {
        the_post();
    ?>
        <article>
            <div class="news">
                <div class="newsImage">
                    <a href="<?php echo get_the_permalink(); ?>"><img loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                </div>
                <a href="<?php echo get_the_permalink(); ?>"><h1 class="newsTitle"><?php the_title(); ?></h1></a>
                <h2 class="newsDetails"><?php echo getPostInfo(); ?></h2>
            </div>
        </article>
    <?php
    }
    numeric_posts_nav();
    ?>

</div>
<br>
</div>