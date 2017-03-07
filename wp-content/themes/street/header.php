<!DOCTYPE html>
<html xml:lang="en" lang="en">
    <head>
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Street Guardian - Camera hành trình ô tô chất lượng cao</title>
        <meta name="description" content="Camera hanh trinh, Camera hanh trinh,
              Camera hanh trinh, Camera hanh trinh Camera hanh trinh Camera hanh trinh, Camera hanh trinh " />
        <meta name="keywords" content="street guardian,dash cams, dash cameras, reverse cameras, security systems" />
        <meta name="robots" content="INDEX,FOLLOW" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
        <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css" type="text/css" />
        <?php if (is_singular('product')): ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/jquery.fancybox.css" type="text/css" />
        <?php endif; ?>
        <?php wp_head() ?>
    </head>

    <body id="bd" class="sm_zen 14   cms-index-index cms-home">
        <div id="yt_wrapper">
            <!-- BEGIN: Header -->
            <div id="yt_header" class="yt-header wrap">
                <div class="yt-header-top">
                    <div class="container">
                        <div class="row">
                            <div class="zen-clock">
                                <span><?php echo current_time('H:i'); ?></span>
                            </div>
                            <div class="zen-slogan">
                                <div class="header_slogan">Street Guardian - Camera hành trình ô tô</div>
                            </div>
                            <div class="zen-lang-currency">
                                <div class="header-user">
                                    <span class="icon-user"></span>
                                    <ul class="links">
                                        <li class="first" ><a href="<?php echo get_site_url() ?>/customer/account/" title="My Account" >My Account</a></li>
                                        <li  >
                                            <div class="header-wishlist">    	
                                                <a href="<?php echo get_site_url() ?>/wishlist/" title="My Wishlist" >Wishlist</a>    
                                            </div>
                                        </li>
                                        <li ><a href="<?php echo get_site_url() ?>/checkout/cart/" title="My Cart" class="top-link-cart">My Cart</a></li>
                                        <li ><a href="<?php echo get_site_url() ?>/checkout/" title="Checkout" class="top-link-checkout">Checkout</a></li>
                                        <li class=" last" ><a href="<?php echo get_site_url() ?>/customer/account/login/" title="Log In" >Log In</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="yt-header-content">
                    <div class="container">
                        <div class="row">
                            <div class="logo-zen col-md-3 col-sm-3 col-xs-12">
                                <a href="<?php echo get_site_url() ?>/"></a>
                            </div>
                            <div class="header-service col-md-9 col-sm-9 col-xs-12">
                                <ul class="header-service-content">
                                    <li class="first">
                                        <div class="header-service-title">Bán hàng trên toàn quốc</div>
                                        <!--<div class="header-service-info">Australia wide</div>-->
                                    </li>
                                    <li>
                                        <div class="header-service-title">
                                            <a href="<?php echo get_permalink(PAGE_DAILY) ?>">Danh sách đại lý ở việt nam</a></div>
                                        <!--<div class="header-service-info"><a href="/where-to-buy">where to buy</a></div>-->
                                    </li>
                                    <li class="last">
                                        <div class="header-service-title">&nbsp;&nbsp;&nbsp;&nbsp; 0983 166 104</div>
                                        <div class="header-service-info">
                                            <a style="font-weight: bold; color: #f36422;" target="_blank"
                                               onclick="popitup('<?php echo get_permalink(PAGE_FACEBOOK) ?>')"
                                               href="#">Nhấn vào đây để chat</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="yt-header-under">
                    <div class="container">
                        <div class="row yt-header-under-wrap">
                            <div class="yt-main-menu">
                                <div id="yt-responsivemenu" class="yt-responsivemenu">
                                    <button type="button" class="btn btn-navbar"><i class="icon-reorder"></i>
                                    </button>
                                    <div id="yt_resmenu_sidebar">
                                        <?php wp_nav_menu(array('theme_location' => 'mobile', 'menu_class' => 'nav-menu clearfix')); ?>
                                    </div>
                                </div>
                                <div class="yt-menu">
                                    <div class="sm_megamenu_wrapper_horizontal_menu sambar" id="sm_megamenu_menu5874d414849dc" data-sam="19710569911484051476">
                                        <div class="sambar-inner">
                                            <a class="btn-sambar" data-sapi="collapse" href="#sm_megamenu_menu5874d414849dc">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </a>	
                                            <ul class="sm-megamenu-hover sm_megamenu_menu sm_megamenu_menu_black" data-jsapi="on">
                                                <?php
                                                $homeActive = is_front_page() ? 'sm_megamenu_actived' : ''; //sm_megamenu_actived
                                                ?>
                                                <li class="other-toggle sm_megamenu_lv1 sm_megamenu_drop parent  <?php echo $homeActive ?> ">
                                                    <a class="sm_megamenu_head sm_megamenu_drop sm_megamenu_actived sm_megamenu_top_actived" href="<?php echo get_site_url() ?>/home"  id="sm_megamenu_130">
                                                        <span style="background: url('<?php echo get_template_directory_uri() ?>/images/icon-home.png') no-repeat scroll 0% 50% transparent;" class="sm_megamenu_icon sm_megamenu_nodesc">		
                                                            <span class="sm_megamenu_title">Home</span>
                                                        </span>
                                                    </a>
                                                    <?php
                                                    $productActive = is_post_type_archive('product') ? 'sm_megamenu_actived' : ''; //sm_megamenu_actived
                                                    ?>
                                                <li class="other-toggle sm_megamenu_lv1 sm_megamenu_drop parent   <?php echo $productActive ?>">
                                                    <a class="sm_megamenu_head sm_megamenu_drop " href="javascript:void(0)"  id="sm_megamenu_99">
                                                        <span class="sm_megamenu_icon sm_megamenu_nodesc">		
                                                            <span class="sm_megamenu_title">Sản phẩm</span>
                                                        </span>
                                                    </a>
                                                    <div class="sm-megamenu-child sm_megamenu_dropdown_2columns ">
                                                        <div class="sm_megamenu_col_2 sm_megamenu_firstcolumn  sm_megamenu_id99 ">
                                                            <div class="sm_megamenu_col_6 sm_megamenu_firstcolumn  sm_megamenu_id148  padding-none">
                                                                <div class="sm_megamenu_head_item ">	</div>
                                                                <div class="sm_megamenu_col_6 sm_megamenu_firstcolumn  sm_megamenu_id115  padding-none">
                                                                    <div class="sm_megamenu_head_item ">
                                                                        <div class="sm_megamenu_title"><span class="sm_megamenu_title_lv3">Danh mục sản phẩm</span></div>
                                                                    </div>
                                                                    <div class="sm_megamenu_content">
                                                                        <?php wp_nav_menu(array('menu_class' => 'list-sub-custom', 'menu' => 'product')) ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php
                                                $dailyActive = is_page(PAGE_DAILY) ? 'sm_megamenu_actived' : '';
                                                ?>
                                                <li class="other-toggle sm_megamenu_lv1 sm_megamenu_nodrop  <?php echo $dailyActive ?> ">
                                                    <a class="sm_megamenu_head sm_megamenu_nodrop " href="<?php echo get_permalink(PAGE_DAILY) ?>"  id="sm_megamenu_100">
                                                        <span class="sm_megamenu_icon sm_megamenu_nodesc">		
                                                            <span class="sm_megamenu_title">Đại lý</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <?php
                                                $supportActive = is_page(PAGE_SUPPORT) ? 'sm_megamenu_actived' : '';
                                                ?>
                                                <li class="other-toggle   
                                                    sm_megamenu_lv1 sm_megamenu_nodrop <?php echo $supportActive ?>  ">
                                                    <a class="sm_megamenu_head sm_megamenu_nodrop " href="<?php echo get_permalink(PAGE_SUPPORT) ?>"  id="sm_megamenu_151">
                                                        <span class="sm_megamenu_icon sm_megamenu_nodesc">		
                                                            <span class="sm_megamenu_title">Phần mềm</span>
                                                        </span>
                                                    </a>
                                                    <?php
                                                    $faqActive = is_page(PAGE_FAQ) ? 'sm_megamenu_actived' : '';
                                                    ?>
                                                <li class="other-toggle   
                                                    sm_megamenu_lv1 sm_megamenu_nodrop  <?php echo $faqActive ?> ">
                                                    <a class="sm_megamenu_head sm_megamenu_nodrop " href="<?php echo get_permalink(PAGE_FAQ) ?>"  id="sm_megamenu_158">
                                                        <span class="sm_megamenu_icon sm_megamenu_nodesc">		
                                                            <span class="sm_megamenu_title">Hướng dẫn</span>
                                                        </span>
                                                    </a>
                                                    <?php
                                                    $aboutActive = is_page(PAGE_ABOUTUS) ? 'sm_megamenu_actived' : '';
                                                    ?>
                                                <li class="other-toggle   
                                                    sm_megamenu_lv1 sm_megamenu_nodrop  <?php echo $aboutActive ?>  ">
                                                    <a class="sm_megamenu_head sm_megamenu_nodrop " href="<?php echo get_permalink(PAGE_ABOUTUS) ?>"  id="sm_megamenu_155">
                                                        <span class="sm_megamenu_icon sm_megamenu_nodesc">		
                                                            <span class="sm_megamenu_title">Về chúng tôi</span>
                                                        </span>
                                                    </a>
                                                    <?php
                                                    $contactActive = is_page(PAGE_CONTACT) ? 'sm_megamenu_actived' : '';
                                                    ?>
<!--                                                <li class="other-toggle   
                                                    sm_megamenu_lv1 sm_megamenu_drop parent  <?php echo $contactActive ?> ">
                                                    <a class="sm_megamenu_head sm_megamenu_drop " href="javascript:void(0)"  id="sm_megamenu_156">
                                                        <span class="sm_megamenu_icon sm_megamenu_nodesc">		
                                                            <span class="sm_megamenu_title">Liên hệ</span>
                                                        </span>
                                                    </a>
                                                    <div class="sm_megamenu_dropdown_6columns" >
                                                        <div class="sm_megamenu_content">
                                                            <div id="messages_product_view"></div>
                                                            <div class="contact-map-wrap col-md-7  col-xs-12">
                                                                <div class="contact-info">
                                                                    <?php echo get_field('address', PAGE_CONTACT) ?>
                                                                </div>

                                                            </div>
                                                            <div class="contact-map-wrap col-md-5  col-xs-12">
                                                                <div class="contact-map">
                                                                   <div class="contact-map-content"><img src="<?php echo get_site_url() ?>/media/wysiwyg/bg-map.jpg" alt="" /></div>
                                                                    <div class="contact-map-content">
                                                                        <?php echo get_field('map', PAGE_CONTACT) ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>-->
                                                <li class="other-toggle   
                                                    sm_megamenu_lv1 sm_megamenu_nodrop  sm_megamenu_right ">
                                                    <a class="sm_megamenu_head sm_megamenu_nodrop " href="<?php echo get_category_link(CAT_NEWS) ?>"  id="sm_megamenu_157">
                                                        <span class="sm_megamenu_icon sm_megamenu_nodesc">		
                                                            <span class="sm_megamenu_title">Tin tức</span>
                                                        </span>
                                                    </a>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Module-->
                                </div>
                            </div>
                            <div class="top-search">
                                <form id="search_mini_form" action="https://www.google.com/search" method="get" target="_blank">
                                    <input name="sitesearch" type="hidden" value="<?php echo get_site_url() ?>">
                                    <div class="form-search">
                                        <button type="submit" title="Search" class="button">
                                            <span class="search-icon">
                                                <!--span></span-->
                                            </span>
                                        </button>
                                        <input id="search" type="text" name="q" value="" class="input-text" />
                                        <div id="search_autocomplete" class="search-autocomplete"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <a id="yt-totop" href="#" title="Go to Top"></a>
            </div>
            <!-- END: Header -->