
(function () {
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
    //menu
    $jsmart = jQuery.noConflict();
    $jsmart.fn.getOffsetRight = function () {	//this is object that need get offset right	
        offset_right = $jsmart(this).offset().left + $jsmart(this).outerWidth();
        return offset_right;
    }
    $jsmart.fn.getOffsetLeft = function () {	//this is object that need get offset right	
        offset_right = $jsmart(this).offset().left;
        return offset_right;
    }
    $jsmart.fn.setOffsetElement = function () {
//this is div child of LI.sm_megamenu_lv1 object that need "set offset left for div has align:left" and "set offset right for div has align:right"

        offset_right_class_sm_megamenu_menu = $jsmart('#sm_megamenu_menu5874d414849dc').getOffsetRight();
        offset_left_class_sm_megamenu_menu = $jsmart('#sm_megamenu_menu5874d414849dc').getOffsetLeft();

        if (!$jsmart(this).hasClass('sm_megamenu_align_right')) {
            px_exceed_right_side_menu = $jsmart(this).offsetParent().offset().left + $jsmart(this).outerWidth() - offset_right_class_sm_megamenu_menu;
            if (px_exceed_right_side_menu > 0) {
                $jsmart(this).css({'left': -px_exceed_right_side_menu});
            } else {
                //$jsmart(this).css({'left':'0'});
            }
        } else {
            px_exceed_left_side_menu = $jsmart(this).offsetParent().getOffsetRight() - $jsmart(this).outerWidth() - offset_left_class_sm_megamenu_menu;
            if (px_exceed_left_side_menu > 0) {
                $jsmart(this).css({'left': 'auto', 'right': '0px'});
            } else {
                $jsmart(this).css({'left': 'auto', 'right': px_exceed_left_side_menu});
            }
        }
    }

    $jsmart(function () {	//init
        effect_duration = 200;
        if (effect_duration <= 0) {
            effect_duration = 800;
        }
        $jsmart('#sm_megamenu_menu5874d414849dc li.sm_megamenu_lv1').children('div').each(function (i, e) {
            $jsmart(e).setOffsetElement();
        });
        if ($jsmart('#sm_megamenu_menu5874d414849dc li.sm_megamenu_lv1').parent().hasClass('sm-megamenu-hover')) {
            $jsmart('#sm_megamenu_menu5874d414849dc li.sm_megamenu_lv1').children('div').css({'display': 'block'});
            $height_slide = $jsmart('#sm_megamenu_menu5874d414849dc li.sm_megamenu_lv1 .slider-height').children('.sm_megamenu_content').height();
            $height_slide = $height_slide / 2;
            $jsmart('#sm_megamenu_menu5874d414849dc li.sm_megamenu_lv1').children('div').css({'display': 'none'});
        }
        $jsmart('#sm_megamenu_menu5874d414849dc li.sm_megamenu_lv1').hover(function (e) {
            $jsmart(this).children('div').stop(true, true).delay(200).slideDown(effect_duration);
            $jsmart('.container-slider.menu-slider .vpo-wrap .vp').css({'height': '345px'});
        }, function (e) {
            $jsmart(this).children('div').stop(true, true).delay(0).slideUp(effect_duration);
        });
    });

//back to top
    jQuery(document).ready(function ($) {
        $("#yt-totop").hide();
        $(function () {
            var wh = $(window).height();
            var whtml = $(document).height();
            $(window).scroll(function () {
                if ($(this).scrollTop() > whtml / 10) {
                    $('#yt-totop').fadeIn();
                } else {
                    $('#yt-totop').fadeOut();
                }
            });
            $('#yt-totop').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    });
//slider sidebar
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

    //list product
//    jQuery(document).ready(function ($) {
//        (function (element) {
//            var jQuery('#content') = $(element),
//                    $tab = $('.respl-tab', jQuery('#content')),
//                    $tab_label = $('.respl-tab-label', $tab),
//                    $tabs = $('.respl-tabs', jQuery('#content')),
//                    ajax_url = $tabs.parents('.respl-tabs-container').attr('data-ajaxurl'),
//                    rl_moduleid = $tabs.parents('.respl-tabs-container').attr('data-modid'),
//                    $items_content = $('.respl-items', jQuery('#content')),
//                    $items_inner = $('.respl-items-inner', $items_content),
//                    $items_first_active = $('.respl-items-selected', jQuery('#content')),
//                    $load_more = $('.respl-loadmore', jQuery('#content')),
//                    $btn_loadmore = $('.respl-loadmore-btn', $load_more),
//                    $select_box = $('.respl-selectbox', jQuery('#content')),
//                    $tab_label_select = $('.respl-tab-selected', jQuery('#content'));
//
//            enableSelectBoxes();
//            function enableSelectBoxes() {
//                $tab_wrap = $('.respl-tabs-wrap', jQuery('#content')),
//                        $tab_label_select.html($('.respl-tab', jQuery('#content')).filter('.tab-sel').children('.respl-tab-label').html());
//                if ($(window).innerWidth() <= 479) {
//                    $tab_wrap.addClass('respl-selectbox');
//                } else {
//                    $tab_wrap.removeClass('respl-selectbox');
//                }
//            }
//
//            $('span.respl-tab-selected, span.respl-tab-arrow', jQuery('#content')).click(function () {
//
//                if ($('.respl-tabs', jQuery('#content')).hasClass('respl-open')) {
//                    $('.respl-tabs', jQuery('#content')).removeClass('respl-open');
//                } else {
//                    $('.respl-tabs', jQuery('#content')).addClass('respl-open');
//                }
//            });
//
//            $(window).resize(function () {
//                if ($(window).innerWidth() <= 479) {
//                    $('.respl-tabs-wrap', jQuery('#content')).addClass('respl-selectbox');
//                } else {
//                    $('.respl-tabs-wrap', jQuery('#content')).removeClass('respl-selectbox');
//                }
//            });
//            function showAnimateItems(el) {
//                var $_items = $('.respl-item', el), delay = 0, nub = 0;
//                $('.respl-loadmore-btn', el).fadeOut('fast');
//                $_items.each(function () {
//                    nub++;
//                    $(this).delay(delay).animate({
//                        opacity: 1,
//                        filter: 'alpha(opacity = 100)'
//                    }, {
//                        delay: 100
//                    });
//                    delay += 100;
//                    if (nub == $_items.length) {
//                        $('.respl-loadmore-btn', el).fadeIn(delay);
//                    }
//                });
//            }
//
//            showAnimateItems($items_first_active);
//
//            //$tab.on('click.tab', function(){
//            $tab.click(function () {
//                var $this = $(this);
//                if ($this.hasClass('tab-sel'))
//                    return false;
//                if ($this.parents('.respl-tabs').hasClass('respl-open')) {
//                    $this.parents('.respl-tabs').removeClass('respl-open');
//                }
//                $tab.removeClass('tab-sel');
//                $this.addClass('tab-sel');
//                var items_active = $this.attr('data-active-content');
//                $items_content.removeClass('respl-items-selected');
//                $(items_active, jQuery('#content')).addClass('respl-items-selected');
//                $tab_label_select.html($tab.filter('.tab-sel').children('.respl-tab-label').html());
//                var $loading = $('.respl-loading', $(items_active, jQuery('#content')));
//                var loaded = $(items_active, jQuery('#content')).hasClass('respl-items-loaded');
//                if (!loaded && !$(items_active, jQuery('#content')).hasClass('respl-process')) {
//                    $(items_active, jQuery('#content')).addClass('respl-process');
//                    var category_id = $this.attr('data-category-id');
//                    var order_id = $this.attr('data-order-id');
//                    var config_categoryid = $this.attr('config-categoryid');
//                    var data_type = $this.attr('data-type');
//                    $loading.show();
//                    $.ajax({
//                        type: 'POST',
//                        url: ajax_url,
//                        data: {
//                            sm_module_id: rl_moduleid,
//                            is_ajax: 1,
//                            ajax_tablisting_start: 0,
//                            tab_cat_id: category_id,
//                            order_id: order_id,
//                            config_categoryid: config_categoryid,
//                            data_type: data_type
//                        },
//                        success: function (data) {
//                            if (data.items_markup != '') {
//                                $('.respl-items-inner', $(items_active, jQuery('#content'))).html(data.items_markup);
//                                $(items_active, jQuery('#content')).addClass('respl-items-loaded').removeClass('respl-process');
//                                $loading.remove();
//                                showAnimateItems($(items_active, jQuery('#content')));
//                                updateStatus($(items_active, jQuery('#content')));
//                            }
//                        },
//                        dataType: 'json'
//                    });
//
//                } else {
//                    $('.respl-item', $items_content).removeAttr('style');
//                    showAnimateItems($(items_active, jQuery('#content')));
//                }
//
//            });
//
//            function updateStatus($el) {
//                $('.respl-loadmore-btn', $el).removeClass('loading');
//                var countitem = $('.respl-item', $el).length;
//                $('.respl-image-loading', $el).css({display: 'none'});
//                $('.respl-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
//                var rl_total = $('.respl-loadmore-btn', $el).parent().attr('data-rl_total');
//                var rl_load = $('.respl-loadmore-btn', $el).parent().attr('data-rl_load');
//                var rl_allready = $('.respl-loadmore-btn', $el).parent().attr('data-rl_allready');
//                if (countitem < rl_total) {
//                    $('.load-number', $el).attr('data-total', (rl_total - countitem + ' )'));
//                    if ((rl_total - countitem) < rl_load) {
//                        $('.load-number', $el).attr('data-more', '( ' + (rl_total - countitem));
//                    }
//                }
//
//                if (countitem == rl_total) {
//                    $('.respl-loadmore-btn', $el).addClass('loaded');
//                    $('.load-number', $el).css({display: 'none'});
//                    $('.respl-image-loading', $el).css({display: 'none'});
//                    $('.respl-loadmore-btn', $el).attr('data-label', rl_allready);
//                    $('.respl-loadmore-btn', $el).removeClass('loading');
//                }
//            }
//
//
//            $btn_loadmore.on('click.loadmore', function () {
//                var $this = $(this);
//                if ($this.hasClass('loaded') || $this.hasClass('loading')) {
//                    return false;
//                } else {
//                    $this.addClass('loading');
//                    $this.css({padding: '6px 20px 6px 50px'});
//                    $('.respl-image-loading', $this).css({display: 'inline-block'});
//                    var rl_start = $this.parent().attr('data-rl_start'),
//                            rl_moduleid = $this.parent().attr('data-modid'),
//                            rl_ajaxurl = $this.parent().attr('data-ajaxurl'),
//                            category_id = $this.parent().attr('data-categoryid'),
//                            config_categoryid = $this.parent().attr('config-categoryid'),
//                            data_type = $this.parent().attr('data-type');
//                    order_id = $this.parent().attr('data-orderid'),
//                            items_active = $this.parent().attr('data-active-content');
//
//                    $.ajax({
//                        type: 'POST',
//                        url: rl_ajaxurl,
//                        data: {
//                            sm_module_id: rl_moduleid,
//                            is_ajax: 1,
//                            ajax_tablisting_start: rl_start,
//                            tab_cat_id: category_id,
//                            order_id: order_id,
//                            config_categoryid: config_categoryid,
//                            data_type: data_type
//                        },
//                        success: function (data) {
//                            if (data.items_markup != '') {
//                                $(data.items_markup).insertAfter($('.respl-item', $(items_active, jQuery('#content'))).nextAll().last());
//                                $('.respl-image-loading', $this).css({display: 'none'});
//                                //$this.hide('fast');
//                                showAnimateItems($(items_active, jQuery('#content')));
//                                updateStatus($(items_active, jQuery('#content')));
//                                $this.css({padding: '6px 20px'});
//                                //$this.show('slow');
//                            }
//                        },
//                        dataType: 'json'
//
//                    });
//                }
//                return false;
//
//            });
//
//        })('#yt_tablisting_17040255591484051477');
//    });
    //end list product

    //load product
    // Biến dùng kiểm tra nếu đang gửi ajax thì ko thực hiện gửi thêm
    var is_busy = false;

// Biến lưu trữ trang hiện tại
    var page = 0;

// Số record trên mỗi trang
    var postPerPage = 8;

// Biến lưu trữ rạng thái phân trang 
    var stopped = false;
    function getProducts() {
        if (is_busy == true) {
            return false;
        }
        // Tăng số trang lên 1
        page++;
        // Hiển thị loadding ...
        jQuery('#load_more').html('Đang tải ...');
        // Gửi Ajax
        jQuery.ajax(
                {
                    type: 'get',
                    dataType: 'json',
                    url: ajax_url,
                    data: {page: page, postPerPage: postPerPage, action: "get_product"},
                    success: function (result)
                    {
                        console.log(page);
                        var html = '';
                        jQuery.each(result, function (key, obj) {
//                                html += '<div>' + obj.ID + ' - ' + obj.post_title + '</div>';
                            html += '<div class="respl-item"> <div class="item-inner"><div class="item-image"><a class="rspl-image" href="<?php echo get_site_url() ?>/sg9665gv-v3-32-cpl.html" onclick="javascript: return true" title="SG9665GC V3 FULL HD" > <img src="http://localhost/streetguardian/wp-content/uploads/2017/01/sg89upn_main-170x260.jpg" alt="SG9665GC V3 FULL HD" /> </a> \n\
 </div> <div class="item-info">\n\
 <div class="item-title "> <a href="<?php echo get_site_url() ?>/sg9665gv-v3-32-cpl.html" onclick="javascript: return true" title="SG9665GC V3 FULL HD" > ' + obj.post_title + ' </a> </div> </div> </div> </div> <div class="clr1"></div>';
                        });
                        jQuery('#content').append(html)
                        // Trường hợp hết dữ liệu cho trang kết tiếp
                        if (result.length < postPerPage)
                        {
                            jQuery('#load_more').remove();
                        }

                    }
                })
                .always(function ()
                {
                    // Sau khi thực hiện xong thì đổi giá trị cho button
                    jQuery('#load_more').html('Xem thêm');
                    is_busy = false;
                });
    }
    jQuery(document).ready(function (){
        getProducts();
        jQuery('#load_more').click(function ()
        {
            getProducts();
        });
    });
    jQuery('.abc_accordion_title').on('click',function(e){
        e.preventDefault();
        jQuery(this).parents('.abc_accordion_wrapper').find('.abc_accordion_content').slideToggle('slow');
    });
})();