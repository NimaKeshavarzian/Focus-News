<?php
// Register ads widget
register_sidebar(array(
    'name' => 'تبلیغات ابتدای بخش "آخرین مطالب"',
    'id' => 'main-ad',
    'before_widget' => '<div class="advertising">',
    'after_widget' => '</div>'
));
register_sidebar(array(
    'name' => 'تبلیغات انتهای بخش "آخرین مطالب" و "صفحه سرچ"',
    'id' => 'secondary-ad',
    'before_widget' => '<div class="advertising">',
    'after_widget' => '</div>'
));

// Register footer widgets
add_action('widgets_init', 'register_footer_widgets');

function register_footer_widgets()
{
    register_sidebar(array(
        'name' => 'ابزارک فوتر',
        'id' => 'footer-widget',
        'description' => 'ابزارک مربوط به فوتر برای قرار دادن اطلاعاتی همچون دسته‌بندی‌ها و بایگانی‌ها',
        'before_widget' => '<div class="footerWidget1">',
        'after_widget' => '</div>',
        'before_title' => '<li class="footerWidgetItem">',
        'after_title' => '</li>'
    ));
    register_sidebar(array(
        'name' => 'شبکه‌های اجتماعی',
        'id' => 'social-media-links',
        'description' => 'ابزارک مربوط به قرار دادن آیکون شبکه‌های اجتماعی',
        'before_widget' => '<div class="socialMediaLinks">',
        'after_widget' => '</div>',
        'before_title' => '<li>',
        'after_title' => '</li>'
    ));
}
