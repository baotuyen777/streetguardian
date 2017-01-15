<?php

show_admin_bar(false);
add_theme_support('post-thumbnails');
define('THEME_PATH', get_template_directory());

require (THEME_PATH . "/inc/cpt.php");
require (THEME_PATH . "/inc/service.php");