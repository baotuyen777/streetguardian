
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



    //load product
    // Biến dùng kiểm tra nếu đang gửi ajax thì ko thực hiện gửi thêm
    var is_busy = false;
    var page = 0;

    function getProducts() {
        if (is_busy == true) {
            return false;
        }
        page++;
        var postPerPage = 8;
        jQuery('#load_more_product').html('Đang tải ...');
        jQuery.ajax({
            type: 'get',
            dataType: 'json',
            url: ajax_url,
            data: {page: page, postPerPage: postPerPage, action: "get_product"},
            success: function (result) {
                console.log(page);
                var html = '';
                jQuery.each(result, function (key, obj) {
                    html += '<div class="respl-item"> <div class="item-inner"><div class="item-image"><a class="rspl-image" href="' + obj.link + '" onclick="javascript: return true" title="SG9665GC V3 FULL HD" > \n\
<img src="' + obj.image + '" alt="' + obj.post_title + '" /> </a> \n\
 </div> <div class="item-info">\n\
 <div class="item-title "> <a href="' + obj.link + '" onclick="javascript: return true" title="SG9665GC V3 FULL HD" > ' + obj.post_title + ' </a> </div> </div> </div> </div> <div class="clr1"></div>';
                });
                jQuery('#tab-product-content .content').append(html)
                // Trường hợp hết dữ liệu cho trang kết tiếp
                if (result.length < postPerPage) {
                    jQuery('#load_more_product').remove();
                }
            }
        }).done(function () {
            console.log(1231);
            // Sau khi thực hiện xong thì đổi giá trị cho button
            jQuery('#load_more_product').html('Xem thêm');
            is_busy = false;
        });
    }
    jQuery(document).ready(function () {
        getProducts();
        jQuery('.respl-tab').on('click', function () {
            jQuery('.respl-tab').removeClass('tab-sel');

            jQuery(this).addClass('tab-sel');
        });
        jQuery('#load_more_product').click(function () {
            getProducts();
        });
        jQuery('#load_more_post').click(function () {
            getPost();
        });
        //switch content
        jQuery('#tab-post').on('click', function () {
            jQuery('.respl-items-container .tab-content').removeClass('respl-items-selected');
            jQuery('#tab-post-content').addClass('respl-items-selected');
            if (isLoadedPost === false) {
                getPost();
                isLoadedPost = true;
            }
        });

        jQuery('#tab-product').on('click', function () {
            jQuery('.respl-items-container .tab-content').removeClass('respl-items-selected');
            jQuery('#tab-product-content').addClass('respl-items-selected');

        });
    });

    var isLoadedPost = false;
    var pagePost = 0;
    function getPost() {
        console.log(is_busy);
        if (is_busy == true) {
            return false;
        }
        pagePost++;
        var postPerPage = 2;
        jQuery('#load_more_post').html('Đang tải ...');
        jQuery.ajax({
            type: 'get',
            dataType: 'json',
            url: ajax_url,
            data: {page: pagePost, postPerPage: postPerPage, action: "get_post"},
            success: function (result) {
                console.log(pagePost);
                var html = '';
                jQuery.each(result, function (key, obj) {
                    html += '<article class="row " >'
                            + '<a class="col-sm-3" href="' + obj.link + '">'
                            + '<img src="' + obj.image + '" alt="' + obj.post_title + '" /> </a> '
                            + '<div class="col-sm-9">'
                            + '<h2><a href="' + obj.link + '">' + obj.post_title + '</a></h2>'
                            + '<p>' + obj.post_excerpt + '</p>'
                            + '</div></article>';
                });

                jQuery('#tab-post-content .content').append(html);
                // Trường hợp hết dữ liệu cho trang kết tiếp
                if (result.length < postPerPage) {
                    jQuery('#load_more_post').remove();
                }
            }
        }).always(function () {
            jQuery('.load_more').html('Xem thêm');
            is_busy = false;
        });
    }

})();

jQuery(document).ready(function ($) {
    $('body#bd').append('<div class="yt_ressidebar_screennav"><nav id="yt_screennav"><ul class="siderbar-menu"></ul></nav></div>');
    $('#yt_screennav ul.siderbar-menu').html($('#yt_resmenu_sidebar ul.nav-menu').html());

    $('#yt-responsivemenu .btn.btn-navbar').click(function () {
        if ($('body#bd').hasClass('onpen-sidebar')) {
            $('body#bd').removeClass('onpen-sidebar');
        } else {
            $('body#bd').addClass('onpen-sidebar');
        }
    });
});
//tab product single
jQuery('.abc_accordion_title').on('click', function (e) {
    e.preventDefault();
    jQuery(this).parents('.abc_accordion_wrapper').find('.abc_accordion_content').slideToggle('slow');
});
//chat
function popitup(url) {
    newwindow = window.open(url, 'name', 'height=500,width=320');
    if (window.focus) {
        newwindow.focus();
    }
    return false;
}


