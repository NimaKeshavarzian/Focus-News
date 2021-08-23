<?php
if (file_exists (ABSPATH.'/wp-admin/includes/taxonomy.php')) {
    require_once (ABSPATH.'/wp-admin/includes/taxonomy.php'); 
}
// Slider Category
$sliderCatArgs = array('cat_name' => 'اسلایدر', 'category_description' => 'نوشته‌های با این دسته در قسمت اسلایدر صفحه قرار میگیرند. این دسته به کاربر نشان داده نمی‌شود.', 'category_nicename' => 'slider', 'category_parent' => '');
$slider_category = wp_insert_category($sliderCatArgs);
// Recommended Articles Category
$sliderCatArgs = array('cat_name' => 'مطالب پیشنهادی', 'category_description' => 'نوشته‌هایی که در این دسته قرا گیرند در بخش "مطالب پیشنهادی" نمایش داده می‌شوند.', 'category_nicename' => 'recommended', 'category_parent' => '');
$slider_category = wp_insert_category($sliderCatArgs);
?>