<?php

show_admin_bar(false);
add_theme_support('post-thumbnails');
define('THEME_PATH', get_template_directory());

require (THEME_PATH . "/inc/cpt.php");
require (THEME_PATH . "/inc/service.php");
require (THEME_PATH . "/theme_config.php");
function register_my_menus() {
    register_nav_menus(
            array(
                'main-menu' => __('Main Menu'),
                'extra-menu' => __('Extra Menu')
            )
    );
}

add_action('init', 'register_my_menus');
add_filter('wp_nav_menu_items', 'your_custom_menu_item', 10, 2);


