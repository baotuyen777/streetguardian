<?php

show_admin_bar(true);
add_theme_support('post-thumbnails');
define('THEME_PATH', get_template_directory());

require (THEME_PATH . "/inc/cpt.php");
require (THEME_PATH . "/inc/service.php");
require (THEME_PATH . "/theme_config.php");

register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'extra-menu' => __('Extra Menu'),
//                'footer' => __('Footer Menu')
        )
);



