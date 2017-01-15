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
                                                <span class="respl-tab-label">Date Created			</span>
                                            </li>
                                            <li class="respl-tab " data-type="order" config-categoryid="121" data-category-id="most_viewed" data-order-id="most_viewed" data-active-content=".items-category-most_viewed">
                                                <span class="respl-tab-label">Most Visited			</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- End Tabs-->
                                <div class="respl-items-container"><!--Begin Items-->
                                    <div class="respl-items  respl-items-selected respl-items-loaded items-category-created_at  respl00-4 respl01-4 respl02-3 respl03-2 respl04-2" >
                                        <div class="respl-items-inner">
                                            <?php
                                            $args = array(
                                                'post_type' => 'product',
                                                'posts_per_page'=>8
                                            );
                                            $the_query = new WP_Query($args);
                                            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                                                    ?>
<!--                                                    <div class="respl-item">
                                                        <div class="item-inner">
                                                            <div class="item-image">
                                                                <a class="rspl-image" href="<?php echo get_site_url() ?>/sg9665gv-v3-32-cpl.html"  onclick="javascript: return true" title="SG9665GC V3 FULL HD" >
                                                                    <img src="<?php echo get_template_directory_uri() ?>/images/product/32gb_v3_f.jpg"  alt="SG9665GC V3 FULL HD" />
                                                                    <?php the_post_thumbnail('thumbnail') ?>
                                                                </a>
                                                                <div class="item-addto-wrap">
                                                                    <div class="item-addcart">
                                                                        <a title="Add to Cart" href="javascript:void(0);" onclick="setLocation('<?php echo get_site_url() ?>/checkout/cart/add/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/product/535/form_key/GlKipbpiYAzwJI4S/')">
                                                                            Add to Cart						</a>
                                                                    </div>
                                                                    <div class="item-wishlist">
                                                                        <a href="<?php echo get_site_url() ?>/wishlist/index/add/product/535/form_key/GlKipbpiYAzwJI4S/">Add to Wishlist</a>
                                                                    </div>
                                                                    <div class="item-compare">
                                                                        <a href="<?php echo get_site_url() ?>/catalog/product_compare/add/product/535/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/form_key/GlKipbpiYAzwJI4S/">Add to Compare</a>
                                                                    </div>
                                                                </div>	

                                                            </div>
                                                            <div class="item-info">
                                                                <div class="item-title ">
                                                                    <a href="<?php echo get_site_url() ?>/sg9665gv-v3-32-cpl.html"  onclick="javascript: return true"  title="SG9665GC V3 FULL HD" >
                                                                        <?php the_title() ?>				
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clr1"></div>-->
                                                    <?php
                                                endwhile;
                                                wp_reset_postdata();
                                            else :
                                                ?>
                                                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                                            <?php endif; ?>
                                        </div>
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
                    <div id="yt_main_right" class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                        <div id="myCarousel" class="block-left latest-blog-wrap carousel slide" data-interval="0">
                            <div class="latest-blog-header">
                                <div class="title-header title-latestblog">
                                    What's New		</div>
                                <ul class="btn-latest-blog">
                                    <li><a href="#myCarousel" data-slide="next" class="icon-angle-left"></a></li>
                                    <li><a href="#myCarousel" data-slide="prev" class="icon-angle-right"></a></li>
                                </ul>
                            </div>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="item-latest-blog">
                                        <div class="item-lb-image">
                                            <img alt="" src="<?php echo get_template_directory_uri() ?>/images/icon_firmware.png"> 
                                        </div>
                                        <div class="item-lb-title">
                                            <a href="<?php echo get_site_url() ?>/whats-new/SG9665GC-firmware/">SG9665GC FirmwareBulletin</a>
                                        </div>
                                        <div class="item-lb-date">
                                            <span class="day"> 21</span> 
                                            <span class="ago">
                                                203 days ago                    </span>
                                        </div>
                                        <div class="item-lb-description">
                                            Updated firmware for the SG9665GC is available for download from our support page, please choose the appropriate version				</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="container_slider_17865154081484051477" class="container-slider brand-slider">
                            <div class="brand-slider-header">
                                <div class="title-header page-title-slider">
                                    WHAT WE USE			</div>
                                <div class="page-button top style">
                                    <ul class="control-button">
                                        <li class="preview icon-angle-left"></li>
                                        <li class="next icon-angle-right"></li>
                                    </ul>		
                                </div>
                            </div>	
                            <div class="slider not-js cols-6 preset01-3 preset02-3 preset03-3 preset04-3 preset05-2">
                                <div class="vpo-wrap">
                                    <div class="vp">
                                        <div class="vpi-wrap">
                                            <div class="item">
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="<?php echo get_template_directory_uri() ?>/images/logo/aptina.jpg"  alt="Aptina" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="<?php echo get_template_directory_uri() ?>/images/logo/cell_power.jpg"  alt="cell_power" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="<?php echo get_template_directory_uri() ?>/images/logo/hynix.jpg"  alt="hynix" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="<?php echo get_template_directory_uri() ?>/images/logo/aptina.jpg"  alt="Aptina" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="<?php echo get_template_directory_uri() ?>/images/logo/cell_power.jpg"  alt="cell_power" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="<?php echo get_template_directory_uri() ?>/images/logo/hynix.jpg"  alt="hynix" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="<?php echo get_template_directory_uri() ?>/images/logo/zoran.jpg"  alt="zoran" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
