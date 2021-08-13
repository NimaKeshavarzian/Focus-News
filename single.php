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
                <div id="articleImageContainer">
                    <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="News Title">
                </div>

                <div id="articleCategories">
                    <div class="articleCategory">تکنولوژی</div>
                    <div class="articleCategory">آموزش</div>
                    <div class="articleCategory">خودرو</div>
                </div>

                <div id="articleTitle">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div id="articleDetails">
                    <h2><?php echo get_the_author() . ' | ' . get_the_date() . ' | ' . get_the_time(); ?></h2>
                </div>
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

            <div id="comments">
                <?php
                while (have_comments()) {
                    the_comment();
                ?>
                    <div class="comment">
                        <div class="commentHeader">
                            <div class="profileAvatar">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path>
                                </svg>
                            </div>
                            <div class="profileName">
                                <h1><?php comment_author() ?></h1>
                            </div>
                            <div class="commentDate">
                                <h2>2021-09-08 | 22:30</h2>
                            </div>
                        </div>
                        <div class="commentContent">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود
                                ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد
                                کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
        <br>

        <div id="articlesTools">
            <div class="articleTool">
                <h1 class="articleToolTitle">مطالب پیشنهادی</h1>
                <div class="articleToolContent">
                    <img loading="lazy" src="./Images/car4.jpg" alt="" class="articleToolContentImg">
                    <h1 class="articleToolContentTitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h1>
                    <h2 class="articleToolContentDetails">نیما کشاورزیان | 2021-09-12 | تکنولوژی</h2>
                </div>

                <div class="articleToolContent">
                    <img loading="lazy" src="./Images/car4.jpg" alt="" class="articleToolContentImg">
                    <h1 class="articleToolContentTitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h1>
                    <h2 class="articleToolContentDetails">نیما کشاورزیان | 2021-09-12 | تکنولوژی</h2>
                </div>

                <div class="articleToolContent">
                    <img loading="lazy" src="./Images/car4.jpg" alt="" class="articleToolContentImg">
                    <h1 class="articleToolContentTitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h1>
                    <h2 class="articleToolContentDetails">نیما کشاورزیان | 2021-09-12 | تکنولوژی</h2>
                </div>

                <div class="articleToolContent">
                    <img loading="lazy" src="./Images/car4.jpg" alt="" class="articleToolContentImg">
                    <h1 class="articleToolContentTitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h1>
                    <h2 class="articleToolContentDetails">نیما کشاورزیان | 2021-09-12 | تکنولوژی</h2>
                </div>

                <div class="articleToolContent">
                    <img loading="lazy" src="./Images/car4.jpg" alt="" class="articleToolContentImg">
                    <h1 class="articleToolContentTitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h1>
                    <h2 class="articleToolContentDetails">نیما کشاورزیان | 2021-09-12 | تکنولوژی</h2>
                </div>
            </div>
            <br>

            <div class="articleTool">
                <h1 class="articleToolTitle">پر‌بازدید ترین‌ها</h1>
                <div class="articleToolContent">
                    <img loading="lazy" src="./Images/car4.jpg" alt="" class="articleToolContentImg">
                    <h1 class="articleToolContentTitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h1>
                    <h2 class="articleToolContentDetails">نیما کشاورزیان | 2021-09-12 | تکنولوژی</h2>
                </div>

                <div class="articleToolContent">
                    <img loading="lazy" src="./Images/car4.jpg" alt="" class="articleToolContentImg">
                    <h1 class="articleToolContentTitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h1>
                    <h2 class="articleToolContentDetails">نیما کشاورزیان | 2021-09-12 | تکنولوژی</h2>
                </div>

                <div class="articleToolContent">
                    <img loading="lazy" src="./Images/car4.jpg" alt="" class="articleToolContentImg">
                    <h1 class="articleToolContentTitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h1>
                    <h2 class="articleToolContentDetails">نیما کشاورزیان | 2021-09-12 | تکنولوژی</h2>
                </div>

                <div class="articleToolContent">
                    <img loading="lazy" src="./Images/car4.jpg" alt="" class="articleToolContentImg">
                    <h1 class="articleToolContentTitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h1>
                    <h2 class="articleToolContentDetails">نیما کشاورزیان | 2021-09-12 | تکنولوژی</h2>
                </div>

                <div class="articleToolContent">
                    <img loading="lazy" src="./Images/car4.jpg" alt="" class="articleToolContentImg">
                    <h1 class="articleToolContentTitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h1>
                    <h2 class="articleToolContentDetails">نیما کشاورزیان | 2021-09-12 | تکنولوژی</h2>
                </div>
            </div>
        </div>


        <footer id="pageFooter">
            <div id="categories">
                <h3>موضوعات</h3>
                <p id="categoriesName">تکنولوژی / آموزشی / موضوع ۳ / موضوع ۴/ موضوع ۵/</p>
            </div>
            <div id="socialMedia">
                <div class="linkToSocialMedia"></div>
                <div class="linkToSocialMedia"></div>
                <div class="linkToSocialMedia"></div>
                <div class="linkToSocialMedia"></div>
                <div class="linkToSocialMedia"></div>
                <div class="linkToSocialMedia"></div>
            </div>
        </footer>
        <script src="./dist/bundle.js"></script>
    </body>

    </html>
<?php } ?>