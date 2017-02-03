<?php
/**
 * Template Name: testhome
 */

?>
<!DOCTYPE html>
<html xml:lang="en" lang="en">
    <head>
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Street Guardian - Who's Watching!</title>
        <meta name="description" content="Default Description" />
        <meta name="keywords" content="street guardian,dash cams, dash cameras, reverse cameras, security systems" />
        <meta name="robots" content="INDEX,FOLLOW" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
        <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap-theme.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/font-awesome.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/fontsocialico.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/sm-dynamicslideshow.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/sm-dynamicslideshow-settings.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/slider.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/tablisting.css" media="all" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive/yt-responsive.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/street.css" media="all" />
        <link media="all" href="<?php echo get_template_directory_uri() ?>/css/megamenu.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/orange.css" type="text/css" />

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
                                <div class="header_slogan">Street Guardian - Who's watching!</div>
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
                            <div class="logo-zen col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a href="<?php echo get_site_url() ?>/"></a>
                            </div>
                            <div class="header-service col-lg-7 col-md-7 col-sm-9 col-xs-12">
                                <ul class="header-service-content">
                                    <li class="first">
                                        <div class="header-service-title">Miễn phí vận chuyển</div>
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
                            <div class="header-content-right col-lg-2 col-md-2 col-sm-6 col-xs-12">
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
                                                            <span class="sm_megamenu_title">Hỗ trợ</span>
                                                        </span>
                                                    </a>
                                                    <?php
                                                    $faqActive = is_page(PAGE_FAQ) ? 'sm_megamenu_actived' : '';
                                                    ?>
                                                <li class="other-toggle   
                                                    sm_megamenu_lv1 sm_megamenu_nodrop  <?php echo $faqActive ?> ">
                                                    <a class="sm_megamenu_head sm_megamenu_nodrop " href="<?php echo get_permalink(PAGE_FAQ) ?>"  id="sm_megamenu_158">
                                                        <span class="sm_megamenu_icon sm_megamenu_nodesc">		
                                                            <span class="sm_megamenu_title">FAQ</span>
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
                                                <li class="other-toggle   
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
                                                                   <!--<div class="contact-map-content"><img src="<?php echo get_site_url() ?>/media/wysiwyg/bg-map.jpg" alt="" /></div>-->
                                                                    <div class="contact-map-content">
                                                                        <?php echo get_field('map', PAGE_CONTACT) ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                <li class="other-toggle   
                                                    sm_megamenu_lv1 sm_megamenu_nodrop  sm_megamenu_right ">
                                                    <a class="sm_megamenu_head sm_megamenu_nodrop " href="<?php echo get_category_link(CAT_NEWS) ?>"  id="sm_megamenu_157">
                                                        <span class="sm_megamenu_icon sm_megamenu_nodesc">		
                                                            <span class="sm_megamenu_title">Có gì hot</span>
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
<!-- BEGIN: content -->
<div id="yt_content" class="yt-content wrap">

    <div class="yt-slideshow">
        <div class="container">
            <div class ="row">
                <div class="dynamicslideshow-container  alway" id="dynamicslideshow_692558041484051476">
                    <div class="dynamicslideshow dynamicslideshow-load">
                        <ul>


                            <?php
                            $images = get_field('slider', PAGE_HOME);

                            $count = count($images);
                            if ($images):
                                $i = 0;
                                foreach ($images as $image):
                                    ?>
                                    <li data-transition="random" data-slotamount="5" data-masterspeed="1000">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />	
                                    </li>
                                    <?php
                                endforeach;

                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="yt_main" class="yt-main col-main yt-main-home">
        <div class="yt_main_inner yt-content-inner">
            <div class="container">
                <div class ="row">
                    <noscript>
                    <div class="global-site-notice noscript">
                        <div class="notice-inner">
                            <p>
                                <strong>JavaScript seems to be disabled in your browser.</strong><br />
                                You must have JavaScript enabled in your browser to utilize the functionality of this website.                </p>
                        </div>
                    </div>
                    </noscript>
                    <div class="std"><div class="no-display">&nbsp;</div></div>		                				        		
                    <div id="yt_main_left" class="col-md-8 col-xs-12">
                        <div id="yt_tablisting_17040255591484051477" class="yt-tab-listing first-load">
                            <div class="respl-wrap ">
                                <div class="respl-tabs-container" data-ajaxurl="<?php echo get_site_url() ?>/tablisting/index/ajax" data-modid="bd3bdda44c3b5df530d5cd48d5a81f71"><!--Begin Tabs-->
                                    <div class="respl-tabs-wrap">
                                        <ul class="respl-tabs cf">
                                            <li id="tab-product" class="respl-tab   tab-sel tab-loaded" >
                                                <span class="respl-tab-label">Sản phẩm</span>
                                            </li>
                                            <li id="tab-post" class="respl-tab " data-type="order" >
                                                <span class="respl-tab-label">Bài viết</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- End Tabs-->
                                <div class="respl-items-container"><!--Begin Items-->
                                    <div id="tab-product-content" class="tab-content respl-items  respl-items-selected respl-items-loaded items-category-created_at  respl00-4 respl01-4 respl02-3 respl03-2 respl04-2" >
                                        <div class="content"></div>
                                        <div class="respl-loadmore " >
                                            <div id="load_more_product" class="respl-loadmore-btn load_more" >
                                            </div>
                                        </div>

                                    </div>
                                    <div id ="tab-post-content" class="tab-content respl-items  items-category-most_viewed  respl00-4 respl01-4 respl02-3 respl03-2 respl04-2" >
                                        <div class="content">
                                        </div>
                                        <div class="respl-loadmore " >
                                            <div id="load_more_post" class="respl-loadmore-btn load_more" >
                                            </div>
                                        </div>

                                    </div>
                                </div><!--End Items-->
                            </div>
                        </div>

                    </div>
                    <div id="yt_main_right" class="col-md-4 col-xs-12">
                        <?php get_sidebar() ?>
                    </div>
                </div>
            </div>
            <div class="home-under">
                <div class="container">
                    <div class="row">
                        <div class="block-home-under">
                            <div class="home-under-logo">&nbsp;</div>
                            <div class="home-under-content">WELCOME to StreetGuardian, the best security systems for your vehicles. We have lots of Dash Cameras, Reverse Cameras, etc. that are even equipped with GPS to monitor and keep track where your drivers are taking your trucks or other vehicles.&nbsp;</div>
                        </div>							</div>
                </div>
            </div>
        </div>
    </div>
</div>      
<!-- END: content -->

<!-- BEGIN: footer -->
<div id="yt_footer" class="yt-footer wrap">
    <div class="yt-footer-wrap">
        <div class="yt-footer-top">
            <div class="container">
                <div class="row">
                    <div class="yt-footer-top-wrap">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 store-location">
                            <div class="block-store-location">
                                <?php echo get_field('contact', PAGE_HOME) ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 other-information">
                            <div class="block-other-information">
                                <div class="block-title-footer">Sản phẩm chính</div>
                                <div class="block-content-info">
                                    <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  block-newsletter">

                            <div class="fb-page" data-href=" <?php echo get_field('fanpage', PAGE_HOME) ?>" 
                                 data-tabs="false" data-small-header="false" 
                                 data-adapt-container-width="false" data-hide-cover="false" 
                                 data-show-facepile="true">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="yt-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 yt-copyright">
                        <strong>ABN:</strong> 74 142 014 935 . Copyright &copy; StreetGuardian. Site developed and maintained by <a href="https://www.facebook.com/baotuyen666">DavidBui</a>. &nbsp;&nbsp;            	</div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 yt-payment">
                        <!--<div style="text-align: right; margin-bottom: 5px;"><a href="/">Home</a> | <a href="terms-conditions">Terms &amp; Conditions | </a><a href="privacy-policy">Privacy Policy</a></div>-->

                    </div>
                </div>
            </div>
        </div>
    </div>       

</div>
<!-- END: footer -->
</div>
<script>
    var ajax_url = '<?php echo admin_url() . "admin-ajax.php" ?>'
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-1.7.2.min.js"></script>
<?php if (is_singular('product')): ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/yt-extend.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/cloud-zoom.1.0.2.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jcarousellite_1.0.1.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/fancybox-buttons.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/product.js"></script>
<?php endif; ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.themepunch.revolution.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/slider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/sm-megamenu.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/allPage.js"></script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=578202858865332";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer() ?>
</body>
</html>

