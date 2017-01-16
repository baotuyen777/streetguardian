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
                            <li data-transition="random" data-slotamount="5" data-masterspeed="1000">
                                <img src="<?php echo get_template_directory_uri() ?>/images/banner1.jpg">
                            </li><li data-transition="random" data-slotamount="5" data-masterspeed="1000">
                                <img src="<?php echo get_template_directory_uri() ?>/images/banner2.jpg">
                            </li><li data-transition="random" data-slotamount="5" data-masterspeed="1000">
                                <img src="<?php echo get_template_directory_uri() ?>/images/banner3.jpg">
                            </li>			
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
                    <div class="std"><div class="no-display">&nbsp;</div></div>		                				        		<div id="yt_main_left" class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                        <div id="yt_tablisting_17040255591484051477" class="yt-tab-listing first-load">
                            <div class="respl-wrap ">
                                <div class="respl-tabs-container" data-ajaxurl="<?php echo get_site_url() ?>/tablisting/index/ajax" data-modid="bd3bdda44c3b5df530d5cd48d5a81f71"><!--Begin Tabs-->
                                    <div class="respl-tabs-wrap">
                                        <ul class="respl-tabs cf">
                                            <li class="respl-tab   tab-sel tab-loaded" data-type="order" config-categoryid="121" data-category-id="created_at" data-order-id="created_at" data-active-content=".items-category-created_at">
                                                <span class="respl-tab-label">Sản phẩm			</span>
                                            </li>
                                            <li class="respl-tab " data-type="order" config-categoryid="121" data-category-id="most_viewed" data-order-id="most_viewed" data-active-content=".items-category-most_viewed">
                                                <span class="respl-tab-label">Bài viết			</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- End Tabs-->
                                <div class="respl-items-container"><!--Begin Items-->
                                    <div class="respl-items  respl-items-selected respl-items-loaded items-category-created_at  respl00-4 respl01-4 respl02-3 respl03-2 respl04-2" >
                                        <div id="content"></div>
                                        <div class="respl-loadmore " data-active-content=".items-category-created_at" 
                                             data-categoryid="" data-orderid="created_at" data-rl_start="8" 
                                             data-rl_total="39" data-rl_allready="All ready" 
                                             data-ajaxurl="<?php echo get_site_url() ?>/tablisting/index/ajax" data-modid="bd3bdda44c3b5df530d5cd48d5a81f71" data-type="order" 
                                             data-rl_load="8" config-categoryid="121" >
                                            <div class="respl-loadmore-btn " id="load_more" 
                                                 data-label="Load More" data-label-load="Loading ..." >
                                                <span class="load-number"  data-more="( 8" 
                                                      data-total="31 )"></span>	

                                                <span class="respl-image-loading icon-spinner icon-spin icon-2x pull-left"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="respl-items  items-category-most_viewed  respl00-4 respl01-4 respl02-3 respl03-2 respl04-2" >
                                        <div class="respl-items-inner">
                                            <div class="respl-loading"></div>
                                        </div>
                                        <div class="respl-loadmore " data-active-content=".items-category-most_viewed" 
                                             data-categoryid="" data-orderid="most_viewed" data-rl_start="8" 
                                             data-rl_total="39" data-rl_allready="All ready" 
                                             data-ajaxurl="<?php echo get_site_url() ?>/tablisting/index/ajax" data-modid="bd3bdda44c3b5df530d5cd48d5a81f71" data-type="order" 
                                             data-rl_load="8" config-categoryid="121" >
                                            <div class="respl-loadmore-btn " 
                                                 data-label="Load More" data-label-load="Loading ..." >
                                                <span class="load-number"  data-more="( 8" 
                                                      data-total="31 )"></span>	

                                                <span class="respl-image-loading icon-spinner icon-spin icon-2x pull-left"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div><!--End Items-->
                            </div>
                        </div>

                    </div>
                    <?php get_sidebar() ?>
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
