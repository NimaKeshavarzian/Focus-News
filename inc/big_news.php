<div id="bigNews">
    <?php
    $bigNewsQuery = new WP_Query(array(
        "category_name" => "big-news",
        "posts_per_page" => 3
    ));
    while ($bigNewsQuery->have_posts()) {
        $bigNewsQuery->the_post();
    ?>
        <a href="<?php the_permalink(); ?>" class="bigNewsLink">
            <div class="bigNewsItem">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="bigNewsImage">
                <h1 class="bigNewsTitle"><?php the_title(); ?></h1>
            </div>
        </a>
    <?php
    }
    ?>
    <!-- <a href=" " class="bigNewsLink">
        <div class="bigNewsItem">
            <img src="./Images/car1.jpg" alt="" class="bigNewsImage">
            <h1 class="bigNewsTitle">لورم ایپسوم متن ساختگی با هدف ایجاد تفاوت در </h1>
        </div>
    </a>
    <a href="" class="bigNewsLink">
        <div class="bigNewsItem">
        <img src="./Images/car1.jpg" alt="" class="bigNewsImage">
        <h1 class="bigNewsTitle">لورم ایپسوم متن ساختگی با هدف ایجاد تفاوت در </h1>
        </div>
    </a>
    <a href="" class="bigNewsLink">
        <div class="bigNewsItem">
        <img src="./Images/car1.jpg" alt="" class="bigNewsImage">
        <h1 class="bigNewsTitle">لورم ایپسوم متن ساختگی با هدف ایجاد تفاوت در </h1>
        </div>
    </a> -->
</div>