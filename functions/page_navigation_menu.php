<?php
function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'منوی اصلی' ),
        'footer-menu' => __('منوی فوتر')
       )
     );
   }
add_action('init', 'register_my_menus');
?>