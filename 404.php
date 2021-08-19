<html dir="rtl" lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/404.css">
    <title><?php echo bloginfo("name") . " | " . "صفحه مورد نظر پیدا نشد"; ?></title>
</head>

<body>
    <?php
    get_header();
    require("inc/menu.php");
    require("inc/search_box.php");
    ?>
    <div id="notFoundPageContainer">
        <h1 id="notFoundTitle">404</h1>
        <h2 id="notFoundDetails">صفحه مورد نظر پیدا نشد! <a href="<?php bloginfo("home"); ?>">به صفحه اصلی می‌روید؟</a></h2>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>
</body>

</html>