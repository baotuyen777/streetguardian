<?php
/**
 * Template Name: home
 */
get_header();
?>
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
<?php
get_footer();
