<!DOCTYPE html>
<html dir="rtl" lang="fa">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
    <meta name="description" content="<?php bloginfo("description"); ?>">
    <meta name="theme-color" content="#fffff" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/style.css" type="text/css" media="all" />
    <title><?php echo get_bloginfo("name") . ' | ' . get_bloginfo("description"); ?></title>
</head>

<body>
    <?php
    get_header();
    require("inc/menu.php");
    require("inc/search_box.php");
    require('inc/slider.php');
    require("inc/articles.php");
    require("inc/article_tools.php");
    get_footer();
    ?>

    <script src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>
</body>

</html>