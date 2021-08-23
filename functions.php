<?php
require("functions/widgets.php"); // Add & Register Widgets
require("functions/system_categories.php"); // Set System Categories
require("functions/page_number.php"); // Support Page Number
require("functions/page_navigation_menu.php"); // Add Navigation Menu
include("functions/posts_visits_number.php"); // Support Posts Visits
include("functions/get_posts_information.php"); // Get Information like Author and date in a function
//Define the category
$slider_category = array('cat_name' => 'اسلایدر', 'category_description' => 'نوشته‌های با این دسته در قسمت اسلایدر صفحه قرار میگیرند', 'category_nicename' => 'slider', 'category_parent' => '');
// Create the category
$slider_cat_id = wp_insert_category($slider_category);
add_theme_support('post-thumbnails'); // Support Post Thumbnail
?>