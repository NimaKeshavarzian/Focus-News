<?php
while (have_posts()) {
    the_post();
    setPostViews(get_the_ID());
?>
    <html dir="rtl" lang="fa">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php bloginfo("description"); ?>">
        <meta name="theme-color" content="#fffff" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/single.css">
        <title><?php the_title(); ?></title>
        <?php wp_head(); ?>
    </head>

    <body id="articlePage">

        <?php
        get_header();
        ?>

        <nav>
            <div id="menu" class="hidden">
                <ul id="menuItems">
                    <li class="menuItem" id="selectedPage">خانه</li>
                    <li class="menuItem">اخبار</li>
                    <li class="menuItem">موضوعات</li>
                    <li class="menuItem">برچسب ها</li>
                    <li class="menuItem">تالار گفت و گو</li>
                    <li class="menuItem">درباره ما</li>
                    <li class="menuItem">ارتباط با ما</li>
                </ul>
            </div>
        </nav>

        <div class="hidden" id="searchBox">
            <form method="POST">
                <input type="search" name="searchValue" id="searchValue" placeholder="جست‌و‌جو" autocomplete="true" autofocus>
                <button type="submit" name="submitSearchBtn" id="submitSearchBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!-- Font Awesome Free 5.15.3 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                        <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" />
                    </svg>
                </button>
                <button type="button" name="closeSearchBoxBtn" id="closeSearchBoxBtn">&#10006;</button>
            </form>
        </div>

        <article>
            <div id="articleInformation">
                <div id="postImageContainer">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <div id="postCategories">
                        <?php
                        $postCategories = get_the_category();
                        if (!empty($postCategories)) {
                            foreach ($postCategories as $postCategory) {
                                if ($postCategory->name == "big-news" || $postCategory->name == "recommended") {
                                    continue;
                                } else {
                                    echo '<div class="category">' . $postCategory->name . '</div>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <h1 id="articleTitle"><?php the_title(); ?></h1>
                <h2 id="articleDetails"><?php echo getPostInfo(); ?></h2>
            </div>
            <div id="Advertising">
                تبلیغات شما
            </div>
            <br>

            <div id="articleContent">
                <p><?php the_content(); ?></p>
                <div id="tagsContainer">
                    <label id="tagsLabel" for="tags">
                        برچسب ها:
                    </label>
                    <ul id="tags" name="tags">
                        <?php
                        $post_tags = get_the_tags();

                        if ($post_tags) {
                            foreach ($post_tags as $tag) {
                                echo '<li class="tag">' . $tag->name . '</li> ';
                            }
                        }
                        ?>
                    </ul>
                </div>

            </div>
        </article>
        <div id="commentsContainer">
            <div id="commentsTitleContainer">
                <h1 id="commentsTitle">نظرات</h1>
                <h1 id="commentsNumber">
                    <?php
                    echo get_comments_number();
                    ?>
                </h1>
            </div>
            <?php
            if (comments_open()) {
                comments_template();
            } else {
                echo '<h2 class="null">قابلیت ارسال نظر وجود ندارد.</h2>';
            }
            ?>
        </div>
        <br>

        <?php
        require("inc/article_tools.php");
        get_footer();
        ?>

        <script src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>
    </body>

    </html>
<?php } ?>