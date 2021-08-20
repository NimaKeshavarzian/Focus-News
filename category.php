<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/style.css ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/category.css">
    <title><?php bloginfo("name"); ?></title>
</head>
<body>
    <?php
    get_header();
    require("inc/menu.php");
    require("inc/search_box.php");
    ?>
    <div id="articles">
    <?php
    if (have_posts()) {
        ?>
    <h1 id="articlesTitle"><?php echo single_cat_title('مطالب مرتبط با دسته "').'"'; ?></h1>
    <?php
        while (have_posts()) {
            the_post();
    ?>
            <article>
                <div class="news">
                    <div class="newsImage">
                        <a href="<?php echo get_the_permalink(); ?>"><img loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                    </div>
                    <a href="<?php echo get_the_permalink(); ?>">
                        <h1 class="newsTitle"><?php the_title(); ?></h1>
                    </a>
                    <h2 class="newsDetails"><?php echo getPostInfo(); ?></h2>
                </div>
            </article>
    <?php
        }
        numeric_posts_nav();
    } else {
    echo '<h1 class="null">مطلبی برای نمایش وجود ندارد!</h1>';
    }
    ?>

</div>
<br>
</div>
    <?php
    include("inc/article_tools.php");
    require("footer.php");
    ?>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>
</body>
</html>