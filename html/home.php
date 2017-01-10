<?php include 'header.php'; ?>

<!-- BEGIN: content -->
<div id="yt_content" class="yt-content wrap">

    <div class="yt-slideshow">
        <div class="container">
            <div class ="row">
                <script type="text/javascript" src="https://streetguardian.info/skin/frontend/default/sm_zen/sm/dynamicslideshow/js/jquery-noconflict.js"></script><script type="text/javascript" src="https://streetguardian.info/skin/frontend/default/sm_zen/sm/dynamicslideshow/js/jquery.themepunch.plugins.min.js"></script><script type="text/javascript" src="https://streetguardian.info/skin/frontend/default/sm_zen/sm/dynamicslideshow/js/jquery.themepunch.revolution.js"></script><link href='https://fonts.googleapis.com/css?family=Share' rel='stylesheet' type='text/css' />
                <div class="dynamicslideshow-container  alway" id="dynamicslideshow_692558041484051476">
                    <div class="dynamicslideshow dynamicslideshow-load">
                        <ul>
                            <li data-transition="random" data-slotamount="5" data-masterspeed="1000">
                                <img src="https://streetguardian.info//images/dynamicslideshow/banners/banner1.jpg">
                            </li><li data-transition="random" data-slotamount="5" data-masterspeed="1000">
                                <img src="https://streetguardian.info//images/dynamicslideshow/banners/banner2.jpg">
                            </li><li data-transition="random" data-slotamount="5" data-masterspeed="1000">
                                <img src="https://streetguardian.info//images/dynamicslideshow/banners/banner3.jpg">
                            </li>			</ul>
                    </div>
                </div>
                <script type="text/javascript">
                    //jQuery(document).ready(function($) {	
                    jQuery(window).load(function () {
                        jQuery('.dynamicslideshow').removeClass('dynamicslideshow-load');
                        if (jQuery.fn.cssOriginal != undefined)
                            jQuery.fn.css = jQuery.fn.cssOriginal;
                        jQuery('#dynamicslideshow_692558041484051476 > .dynamicslideshow').revolution(
                                {
                                    delay: 7000,
                                    startheight: 426,
                                    startwidth: 1170,
                                    hideThumbs: 200,
                                    thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                                    thumbHeight: 50,
                                    thumbAmount: 5,
                                    navigationType: "bullet", // bullet, thumb, none
                                    navigationArrows: "nexttobullets", // nexttobullets, solo (old name verticalcentered), none
                                    navigationStyle: "round", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item),
                                    navigationHAlign: "center", // Vertical Align top,center,bottom
                                    navigationVAlign: "bottom", // Horizontal Align left,center,right
                                    navigationHOffset: 0,
                                    navigationVOffset: 20,
                                    soloArrowLeftHalign: "left",
                                    soloArrowLeftValign: "center",
                                    soloArrowLeftHOffset: 20,
                                    soloArrowLeftVOffset: 0,
                                    soloArrowRightHalign: "right",
                                    soloArrowRightValign: "center",
                                    soloArrowRightHOffset: 20,
                                    soloArrowRightVOffset: 0,
                                    touchenabled: "on", // Enable Swipe Function : on/off
                                    onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off
                                    stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                                    stopAfterLoops: 0, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
                                    hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                                    hideAllCaptionAtLilmit: 700, // Hide all The Captions if Width of Browser is less then this value
                                    hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value
                                    shadow: 0, //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
                                    fullWidth: "off"							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus			
                                });
                    });
                </script>

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

                        <script type="text/javascript">
                            //<![CDATA[
                            jQuery(document).ready(function ($) {
                                ;
                                (function (element) {
                                    var $element = $(element),
                                            $tab = $('.respl-tab', $element),
                                            $tab_label = $('.respl-tab-label', $tab),
                                            $tabs = $('.respl-tabs', $element),
                                            ajax_url = $tabs.parents('.respl-tabs-container').attr('data-ajaxurl'),
                                            rl_moduleid = $tabs.parents('.respl-tabs-container').attr('data-modid'),
                                            $items_content = $('.respl-items', $element),
                                            $items_inner = $('.respl-items-inner', $items_content),
                                            $items_first_active = $('.respl-items-selected', $element),
                                            $load_more = $('.respl-loadmore', $element),
                                            $btn_loadmore = $('.respl-loadmore-btn', $load_more),
                                            $select_box = $('.respl-selectbox', $element),
                                            $tab_label_select = $('.respl-tab-selected', $element);

                                    enableSelectBoxes();
                                    function enableSelectBoxes() {
                                        $tab_wrap = $('.respl-tabs-wrap', $element),
                                                $tab_label_select.html($('.respl-tab', $element).filter('.tab-sel').children('.respl-tab-label').html());
                                        if ($(window).innerWidth() <= 479) {
                                            $tab_wrap.addClass('respl-selectbox');
                                        } else {
                                            $tab_wrap.removeClass('respl-selectbox');
                                        }
                                    }

                                    $('span.respl-tab-selected, span.respl-tab-arrow', $element).click(function () {

                                        if ($('.respl-tabs', $element).hasClass('respl-open')) {
                                            $('.respl-tabs', $element).removeClass('respl-open');
                                        } else {
                                            $('.respl-tabs', $element).addClass('respl-open');
                                        }
                                    });

                                    $(window).resize(function () {
                                        if ($(window).innerWidth() <= 479) {
                                            $('.respl-tabs-wrap', $element).addClass('respl-selectbox');
                                        } else {
                                            $('.respl-tabs-wrap', $element).removeClass('respl-selectbox');
                                        }
                                    });
                                    function showAnimateItems(el) {
                                        var $_items = $('.respl-item', el), delay = 0, nub = 0;
                                        $('.respl-loadmore-btn', el).fadeOut('fast');
                                        $_items.each(function () {
                                            nub++;
                                            $(this).delay(delay).animate({
                                                opacity: 1,
                                                filter: 'alpha(opacity = 100)'
                                            }, {
                                                delay: 100
                                            });
                                            delay += 100;
                                            if (nub == $_items.length) {
                                                $('.respl-loadmore-btn', el).fadeIn(delay);
                                            }
                                        });
                                    }

                                    showAnimateItems($items_first_active);

                                    //$tab.on('click.tab', function(){
                                    $tab.click(function () {
                                        var $this = $(this);
                                        if ($this.hasClass('tab-sel'))
                                            return false;
                                        if ($this.parents('.respl-tabs').hasClass('respl-open')) {
                                            $this.parents('.respl-tabs').removeClass('respl-open');
                                        }
                                        $tab.removeClass('tab-sel');
                                        $this.addClass('tab-sel');
                                        var items_active = $this.attr('data-active-content');
                                        $items_content.removeClass('respl-items-selected');
                                        $(items_active, $element).addClass('respl-items-selected');
                                        $tab_label_select.html($tab.filter('.tab-sel').children('.respl-tab-label').html());
                                        var $loading = $('.respl-loading', $(items_active, $element));
                                        var loaded = $(items_active, $element).hasClass('respl-items-loaded');
                                        if (!loaded && !$(items_active, $element).hasClass('respl-process')) {
                                            $(items_active, $element).addClass('respl-process');
                                            var category_id = $this.attr('data-category-id');
                                            var order_id = $this.attr('data-order-id');
                                            var config_categoryid = $this.attr('config-categoryid');
                                            var data_type = $this.attr('data-type');
                                            $loading.show();
                                            $.ajax({
                                                type: 'POST',
                                                url: ajax_url,
                                                data: {
                                                    sm_module_id: rl_moduleid,
                                                    is_ajax: 1,
                                                    ajax_tablisting_start: 0,
                                                    tab_cat_id: category_id,
                                                    order_id: order_id,
                                                    config_categoryid: config_categoryid,
                                                    data_type: data_type
                                                },
                                                success: function (data) {
                                                    if (data.items_markup != '') {
                                                        $('.respl-items-inner', $(items_active, $element)).html(data.items_markup);
                                                        $(items_active, $element).addClass('respl-items-loaded').removeClass('respl-process');
                                                        $loading.remove();
                                                        showAnimateItems($(items_active, $element));
                                                        updateStatus($(items_active, $element));
                                                    }
                                                },
                                                dataType: 'json'
                                            });

                                        } else {
                                            $('.respl-item', $items_content).removeAttr('style');
                                            showAnimateItems($(items_active, $element));
                                        }

                                    });

                                    function updateStatus($el) {
                                        $('.respl-loadmore-btn', $el).removeClass('loading');
                                        var countitem = $('.respl-item', $el).length;
                                        $('.respl-image-loading', $el).css({display: 'none'});
                                        $('.respl-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
                                        var rl_total = $('.respl-loadmore-btn', $el).parent().attr('data-rl_total');
                                        var rl_load = $('.respl-loadmore-btn', $el).parent().attr('data-rl_load');
                                        var rl_allready = $('.respl-loadmore-btn', $el).parent().attr('data-rl_allready');
                                        if (countitem < rl_total) {
                                            $('.load-number', $el).attr('data-total', (rl_total - countitem + ' )'));
                                            if ((rl_total - countitem) < rl_load) {
                                                $('.load-number', $el).attr('data-more', '( ' + (rl_total - countitem));
                                            }
                                        }

                                        if (countitem == rl_total) {
                                            $('.respl-loadmore-btn', $el).addClass('loaded');
                                            $('.load-number', $el).css({display: 'none'});
                                            $('.respl-image-loading', $el).css({display: 'none'});
                                            $('.respl-loadmore-btn', $el).attr('data-label', rl_allready);
                                            $('.respl-loadmore-btn', $el).removeClass('loading');
                                        }
                                    }


                                    $btn_loadmore.on('click.loadmore', function () {
                                        var $this = $(this);
                                        if ($this.hasClass('loaded') || $this.hasClass('loading')) {
                                            return false;
                                        } else {
                                            $this.addClass('loading');
                                            $this.css({padding: '6px 20px 6px 50px'});
                                            $('.respl-image-loading', $this).css({display: 'inline-block'});
                                            var rl_start = $this.parent().attr('data-rl_start'),
                                                    rl_moduleid = $this.parent().attr('data-modid'),
                                                    rl_ajaxurl = $this.parent().attr('data-ajaxurl'),
                                                    category_id = $this.parent().attr('data-categoryid'),
                                                    config_categoryid = $this.parent().attr('config-categoryid'),
                                                    data_type = $this.parent().attr('data-type');
                                            order_id = $this.parent().attr('data-orderid'),
                                                    items_active = $this.parent().attr('data-active-content');

                                            $.ajax({
                                                type: 'POST',
                                                url: rl_ajaxurl,
                                                data: {
                                                    sm_module_id: rl_moduleid,
                                                    is_ajax: 1,
                                                    ajax_tablisting_start: rl_start,
                                                    tab_cat_id: category_id,
                                                    order_id: order_id,
                                                    config_categoryid: config_categoryid,
                                                    data_type: data_type
                                                },
                                                success: function (data) {
                                                    if (data.items_markup != '') {
                                                        $(data.items_markup).insertAfter($('.respl-item', $(items_active, $element)).nextAll().last());
                                                        $('.respl-image-loading', $this).css({display: 'none'});
                                                        //$this.hide('fast');
                                                        showAnimateItems($(items_active, $element));
                                                        updateStatus($(items_active, $element));
                                                        $this.css({padding: '6px 20px'});
                                                        //$this.show('slow');
                                                    }
                                                },
                                                dataType: 'json'

                                            });
                                        }
                                        return false;

                                    });

                                })('#yt_tablisting_17040255591484051477');
                            });
                            //]]>
                        </script><div id="yt_tablisting_17040255591484051477" class="yt-tab-listing first-load">
                            <div class="respl-wrap ">
                                <div class="respl-tabs-container" data-ajaxurl="https://streetguardian.info/tablisting/index/ajax" data-modid="bd3bdda44c3b5df530d5cd48d5a81f71"><!--Begin Tabs-->
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
                                            <div class="respl-item">
                                                <div class="item-inner">
                                                    <div class="item-image">
                                                        <a class="rspl-image" href="https://streetguardian.info/sg9665gv-v3-32-cpl.html"  onclick="javascript: return true" title="SG9665GC V3 FULL HD" >
                                                            <img src="https://streetguardian.info/media/catalog/product/cache/1/image/170x260/9df78eab33525d08d6e5fb8d27136e95/3/2/32gb_v3_f.jpg"  alt="SG9665GC V3 FULL HD" />
                                                        </a>
                                                        <div class="item-addto-wrap">
                                                            <div class="item-addcart">
                                                                <a title="Add to Cart" href="javascript:void(0);" onclick="setLocation('https://streetguardian.info/checkout/cart/add/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/product/535/form_key/GlKipbpiYAzwJI4S/')">
                                                                    Add to Cart						</a>
                                                            </div>
                                                            <div class="item-wishlist">
                                                                <a href="https://streetguardian.info/wishlist/index/add/product/535/form_key/GlKipbpiYAzwJI4S/">Add to Wishlist</a>
                                                            </div>
                                                            <div class="item-compare">
                                                                <a href="https://streetguardian.info/catalog/product_compare/add/product/535/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/form_key/GlKipbpiYAzwJI4S/">Add to Compare</a>
                                                            </div>
                                                        </div>	

                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title ">
                                                            <a href="https://streetguardian.info/sg9665gv-v3-32-cpl.html"  onclick="javascript: return true"  title="SG9665GC V3 FULL HD" >
                                                                SG9665GC V3 FULL HD					</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clr1"></div>
                                            <div class="respl-item">
                                                <div class="item-inner">
                                                    <div class="item-image">
                                                        <a class="rspl-image" href="https://streetguardian.info/sg9665gv-v3-128-cpl.html"  onclick="javascript: return true" title="SG9665GC V3 FULL HD" >
                                                            <img src="https://streetguardian.info/media/catalog/product/cache/1/image/170x260/9df78eab33525d08d6e5fb8d27136e95/1/2/128gb_v3_b1_f.jpg"  alt="SG9665GC V3 FULL HD" />
                                                        </a>
                                                        <div class="item-addto-wrap">
                                                            <div class="item-addcart">
                                                                <a title="Add to Cart" href="javascript:void(0);" onclick="setLocation('https://streetguardian.info/checkout/cart/add/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/product/534/form_key/GlKipbpiYAzwJI4S/')">
                                                                    Add to Cart						</a>
                                                            </div>
                                                            <div class="item-wishlist">
                                                                <a href="https://streetguardian.info/wishlist/index/add/product/534/form_key/GlKipbpiYAzwJI4S/">Add to Wishlist</a>
                                                            </div>
                                                            <div class="item-compare">
                                                                <a href="https://streetguardian.info/catalog/product_compare/add/product/534/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/form_key/GlKipbpiYAzwJI4S/">Add to Compare</a>
                                                            </div>
                                                        </div>	

                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title ">
                                                            <a href="https://streetguardian.info/sg9665gv-v3-128-cpl.html"  onclick="javascript: return true"  title="SG9665GC V3 FULL HD" >
                                                                SG9665GC V3 FULL HD					</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clr1 clr2"></div>
                                            <div class="respl-item">
                                                <div class="item-inner">
                                                    <div class="item-image">
                                                        <a class="rspl-image" href="https://streetguardian.info/sg9665gv-v3-64-cpl.html"  onclick="javascript: return true" title="SG9665GC V3 FULL HD" >
                                                            <img src="https://streetguardian.info/media/catalog/product/cache/1/image/170x260/9df78eab33525d08d6e5fb8d27136e95/6/4/64gb_v3_f.jpg"  alt="SG9665GC V3 FULL HD" />
                                                        </a>
                                                        <div class="item-addto-wrap">
                                                            <div class="item-addcart">
                                                                <a title="Add to Cart" href="javascript:void(0);" onclick="setLocation('https://streetguardian.info/checkout/cart/add/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/product/533/form_key/GlKipbpiYAzwJI4S/')">
                                                                    Add to Cart						</a>
                                                            </div>
                                                            <div class="item-wishlist">
                                                                <a href="https://streetguardian.info/wishlist/index/add/product/533/form_key/GlKipbpiYAzwJI4S/">Add to Wishlist</a>
                                                            </div>
                                                            <div class="item-compare">
                                                                <a href="https://streetguardian.info/catalog/product_compare/add/product/533/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/form_key/GlKipbpiYAzwJI4S/">Add to Compare</a>
                                                            </div>
                                                        </div>	

                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title ">
                                                            <a href="https://streetguardian.info/sg9665gv-v3-64-cpl.html"  onclick="javascript: return true"  title="SG9665GC V3 FULL HD" >
                                                                SG9665GC V3 FULL HD					</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clr1 clr3"></div>
                                            <div class="respl-item">
                                                <div class="item-inner">
                                                    <div class="item-image">
                                                        <a class="rspl-image" href="https://streetguardian.info/ts64gusdxc10v.html"  onclick="javascript: return true" title="TS64GUSDXC10V" >
                                                            <img src="https://streetguardian.info/media/catalog/product/cache/1/image/170x260/9df78eab33525d08d6e5fb8d27136e95/7/1/71sdaqowotl._sl1500_.jpg"  alt="TS64GUSDXC10V" />
                                                        </a>
                                                        <div class="item-addto-wrap">
                                                            <div class="item-addcart">
                                                                <a title="Add to Cart" href="javascript:void(0);" onclick="setLocation('https://streetguardian.info/checkout/cart/add/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/product/532/form_key/GlKipbpiYAzwJI4S/')">
                                                                    Add to Cart						</a>
                                                            </div>
                                                            <div class="item-wishlist">
                                                                <a href="https://streetguardian.info/wishlist/index/add/product/532/form_key/GlKipbpiYAzwJI4S/">Add to Wishlist</a>
                                                            </div>
                                                            <div class="item-compare">
                                                                <a href="https://streetguardian.info/catalog/product_compare/add/product/532/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/form_key/GlKipbpiYAzwJI4S/">Add to Compare</a>
                                                            </div>
                                                        </div>	

                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title ">
                                                            <a href="https://streetguardian.info/ts64gusdxc10v.html"  onclick="javascript: return true"  title="TS64GUSDXC10V" >
                                                                TS64GUSDXC10V					</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clr1 clr2 clr4"></div>
                                            <div class="respl-item">
                                                <div class="item-inner">
                                                    <div class="item-image">
                                                        <a class="rspl-image" href="https://streetguardian.info/ts128gusdu1.html"  onclick="javascript: return true" title="TS128GUSDU1" >
                                                            <img src="https://streetguardian.info/media/catalog/product/cache/1/image/170x260/9df78eab33525d08d6e5fb8d27136e95/6/1/6120pffocal._sl1000_.jpg"  alt="TS128GUSDU1" />
                                                        </a>
                                                        <div class="item-addto-wrap">
                                                            <div class="item-addcart">
                                                                <a title="Add to Cart" href="javascript:void(0);" onclick="setLocation('https://streetguardian.info/checkout/cart/add/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/product/531/form_key/GlKipbpiYAzwJI4S/')">
                                                                    Add to Cart						</a>
                                                            </div>
                                                            <div class="item-wishlist">
                                                                <a href="https://streetguardian.info/wishlist/index/add/product/531/form_key/GlKipbpiYAzwJI4S/">Add to Wishlist</a>
                                                            </div>
                                                            <div class="item-compare">
                                                                <a href="https://streetguardian.info/catalog/product_compare/add/product/531/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/form_key/GlKipbpiYAzwJI4S/">Add to Compare</a>
                                                            </div>
                                                        </div>	

                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title ">
                                                            <a href="https://streetguardian.info/ts128gusdu1.html"  onclick="javascript: return true"  title="TS128GUSDU1" >
                                                                TS128GUSDU1					</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clr1 clr5"></div>
                                            <div class="respl-item">
                                                <div class="item-inner">
                                                    <div class="item-image">
                                                        <a class="rspl-image" href="https://streetguardian.info/ts64gusdu1.html"  onclick="javascript: return true" title="TS64GUSDU1" >
                                                            <img src="https://streetguardian.info/media/catalog/product/cache/1/image/170x260/9df78eab33525d08d6e5fb8d27136e95/7/1/71dhqzgjhpl._sl1500_.jpg"  alt="TS64GUSDU1" />
                                                        </a>
                                                        <div class="item-addto-wrap">
                                                            <div class="item-addcart">
                                                                <a title="Add to Cart" href="javascript:void(0);" onclick="setLocation('https://streetguardian.info/checkout/cart/add/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/product/530/form_key/GlKipbpiYAzwJI4S/')">
                                                                    Add to Cart						</a>
                                                            </div>
                                                            <div class="item-wishlist">
                                                                <a href="https://streetguardian.info/wishlist/index/add/product/530/form_key/GlKipbpiYAzwJI4S/">Add to Wishlist</a>
                                                            </div>
                                                            <div class="item-compare">
                                                                <a href="https://streetguardian.info/catalog/product_compare/add/product/530/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/form_key/GlKipbpiYAzwJI4S/">Add to Compare</a>
                                                            </div>
                                                        </div>	

                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title ">
                                                            <a href="https://streetguardian.info/ts64gusdu1.html"  onclick="javascript: return true"  title="TS64GUSDU1" >
                                                                TS64GUSDU1					</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clr1 clr2 clr3 clr6"></div>
                                            <div class="respl-item">
                                                <div class="item-inner">
                                                    <div class="item-image">
                                                        <a class="rspl-image" href="https://streetguardian.info/ts32gusdu1.html"  onclick="javascript: return true" title="TS32GUSDU1" >
                                                            <img src="https://streetguardian.info/media/catalog/product/cache/1/image/170x260/9df78eab33525d08d6e5fb8d27136e95/6/1/61y1w3zrtvl._sl1000_.jpg"  alt="TS32GUSDU1" />
                                                        </a>
                                                        <div class="item-addto-wrap">
                                                            <div class="item-addcart">
                                                                <a title="Add to Cart" href="javascript:void(0);" onclick="setLocation('https://streetguardian.info/checkout/cart/add/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/product/529/form_key/GlKipbpiYAzwJI4S/')">
                                                                    Add to Cart						</a>
                                                            </div>
                                                            <div class="item-wishlist">
                                                                <a href="https://streetguardian.info/wishlist/index/add/product/529/form_key/GlKipbpiYAzwJI4S/">Add to Wishlist</a>
                                                            </div>
                                                            <div class="item-compare">
                                                                <a href="https://streetguardian.info/catalog/product_compare/add/product/529/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/form_key/GlKipbpiYAzwJI4S/">Add to Compare</a>
                                                            </div>
                                                        </div>	

                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title ">
                                                            <a href="https://streetguardian.info/ts32gusdu1.html"  onclick="javascript: return true"  title="TS32GUSDU1" >
                                                                TS32GUSDU1					</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clr1"></div>
                                            <div class="respl-item">
                                                <div class="item-inner">
                                                    <div class="item-image">
                                                        <a class="rspl-image" href="https://streetguardian.info/sg9665xs-full-hd-dvr.html"  onclick="javascript: return true" title="SG9665XS - FULL HD " >
                                                            <img src="https://streetguardian.info/media/catalog/product/cache/1/image/170x260/9df78eab33525d08d6e5fb8d27136e95/s/g/sg9556xs.jpg"  alt="SG9665XS - FULL HD " />
                                                        </a>
                                                        <div class="item-addto-wrap">
                                                            <div class="item-addcart">
                                                                <a title="Add to Cart" href="javascript:void(0);" onclick="setLocation('https://streetguardian.info/checkout/cart/add/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/product/528/form_key/GlKipbpiYAzwJI4S/')">
                                                                    Add to Cart						</a>
                                                            </div>
                                                            <div class="item-wishlist">
                                                                <a href="https://streetguardian.info/wishlist/index/add/product/528/form_key/GlKipbpiYAzwJI4S/">Add to Wishlist</a>
                                                            </div>
                                                            <div class="item-compare">
                                                                <a href="https://streetguardian.info/catalog/product_compare/add/product/528/uenc/aHR0cHM6Ly9zdHJlZXRndWFyZGlhbi5pbmZvLw,,/form_key/GlKipbpiYAzwJI4S/">Add to Compare</a>
                                                            </div>
                                                        </div>	

                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title ">
                                                            <a href="https://streetguardian.info/sg9665xs-full-hd-dvr.html"  onclick="javascript: return true"  title="SG9665XS - FULL HD " >
                                                                SG9665XS - FULL HD 					</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clr1 clr2 clr4"></div>
                                        </div>
                                        <div class="respl-loadmore " data-active-content=".items-category-created_at" 
                                             data-categoryid="" data-orderid="created_at" data-rl_start="8" 
                                             data-rl_total="39" data-rl_allready="All ready" 
                                             data-ajaxurl="https://streetguardian.info/tablisting/index/ajax" data-modid="bd3bdda44c3b5df530d5cd48d5a81f71" data-type="order" 
                                             data-rl_load="8" config-categoryid="121" >
                                            <div class="respl-loadmore-btn " 
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
                                             data-ajaxurl="https://streetguardian.info/tablisting/index/ajax" data-modid="bd3bdda44c3b5df530d5cd48d5a81f71" data-type="order" 
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
                                            <img alt="" src="https://streetguardian.info/media/aw_blog/icon_firmware.png"> 
                                        </div>
                                        <div class="item-lb-title">
                                            <a href="https://streetguardian.info/whats-new/SG9665GC-firmware/">SG9665GC FirmwareBulletin</a>
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
                        <script type="text/javascript" src="https://streetguardian.info/skin/frontend/default/sm_zen/sm/slider/js/slider.js"></script>	<div id="container_slider_17865154081484051477" class="container-slider brand-slider">
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
                                                                <img  src="https://streetguardian.info/media/logo_client/aptina.jpg"  alt="Aptina" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="https://streetguardian.info/media/logo_client/cell_power.jpg"  alt="cell_power" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="https://streetguardian.info/media/logo_client/hynix.jpg"  alt="hynix" />	
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
                                                                <img  src="https://streetguardian.info/media/logo_client/kingston.jpg"  alt="kingston" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="https://streetguardian.info/media/logo_client/novatek.jpg"  alt="novatek" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="https://streetguardian.info/media/logo_client/omnivision.jpg"  alt="omnivision" />	
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
                                                                <img  src="https://streetguardian.info/media/logo_client/sony_exmor.jpg"  alt="sony_exmor" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="https://streetguardian.info/media/logo_client/toshiba.jpg"  alt="toshiba" />	
                                                            </a>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="item-wrap">
                                                    <div class="item-img item-height">
                                                        <div class="item-img-info">
                                                            <a href="http://#"  onclick="javascript: return true";>
                                                                <img  src="https://streetguardian.info/media/logo_client/u_blox.jpg"  alt="u_blox" />	
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
                                                                <img  src="https://streetguardian.info/media/logo_client/zoran.jpg"  alt="zoran" />	
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

                        <script type="text/javascript">
                            //<![CDATA[
                            jQuery(document).ready(function ($) {
                                $('#container_slider_17865154081484051477 .slider').responsiver({
                                    interval: 0,
                                    speed: 500,
                                    start: 0,
                                    step: 1,
                                    circular: true,
                                    preload: true,
                                    fx: 'slide',
                                    pause: 'hover',
                                    control: {
                                        prev: '#container_slider_17865154081484051477 .control-button li[class="preview icon-angle-left"]',
                                        next: '#container_slider_17865154081484051477 .control-button li[class="next icon-angle-right"]'
                                    },
                                    getColumns: function (element) {
                                        var match = $(element).attr('class').match(/cols-(\d+)/);
                                        if (match[1]) {
                                            var column = parseInt(match[1]);
                                        } else {
                                            var column = 1;
                                        }
                                        if (!column)
                                            column = 1;
                                        return column;
                                    }
                                });
                            });
                            //]]>
                        </script>



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
<?php include 'footer.php';?>