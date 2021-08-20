<!DOCTYPE html>
<html dir="rtl" lang="fa">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
    <meta name="description" content="<?php bloginfo("description"); ?>">
    <meta name="theme-color" content="#fffff" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/styles/archive.css">
    <title><?php bloginfo("name"); ?></title>
</head>

<body>

    <?php
    get_header();
    require("inc/menu.php");
    require("inc/search_box.php");
    ?>

    <div id="container">

        <div id="articles">
            <?php
            if (have_posts()) {
            ?>
                <h1 id="articlesTitle"><?php echo single_tag_title('مطالب با برچسب "').'"'; ?></h1>
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
    require("inc/article_tools.php");
    get_footer();
    ?>

    <script src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>
</body>

</html>