
//tab
//var optionsPrice = new Product.OptionsPrice([]);
//jQuery(document).ready(function () {
//    jQuery('.yt-tab-navi li').click(function (e) {
//        e.preventDefault()
//        jQuery(this).children().tab('show')
//    })
//});

//cảousel
jQuery(document).ready(function () {
    function init_slide() {
        device = jQuery.fn.detectDevice();
        number_visible = 3;
        if (device == "mobile" || device == "tablet" || device == "normal") {
            number_visible = 2;
        }
        jQuery(".jCarouselLite").jCarouselLite({
            btnNext: ".more-views .next",
            btnPrev: ".more-views .prev",
            visible: number_visible,
            start: 0,
            circular: true,
            speed: 300
        });
    }
    init_slide();

    jQuery('.jCarouselLite ul li a').each(function () {
        if (jQuery(this).hasClass('actived')) {
            jQuery(this).parent().addClass('selected');
        }
    });

    jQuery('.jCarouselLite ul li a').click(function () {
        $this = jQuery(this);
        jQuery('.jCarouselLite ul li a').parent().removeClass('selected');
        if ($this.hasClass('actived')) {
            $this.parent().addClass('selected');
        }
    });

    function init() {
        jQuery('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();
        jQuery('.fancybox-image-hidden').each(function () {
            attr = jQuery(this).attr('href');
            href_current = jQuery('a#yt_popup').attr('href');
            if (attr == href_current) {
                jQuery(this).removeClass("fancybox-button");
            }
        });

        jQuery('a.cloud-zoom-gallery').bind('click', function () {
            jQuery('a#yt_popup').attr('href', jQuery(this).attr('href'));
            jQuery('.fancybox-image-hidden').addClass("fancybox-button");
            jQuery('.fancybox-image-hidden').each(function () {
                attr = jQuery(this).attr('href');
                href_current = jQuery('a#yt_popup').attr('href');
                if (attr == href_current) {
                    jQuery(this).removeClass("fancybox-button");
                }
            });
        });

        jQuery(".fancybox-button").fancybox({
            padding: 0,
            prevEffect: 'none',
            nextEffect: 'none',
            closeBtn: true,
            closeClick: true,
            nextClick: true,
            mouseWheel: false,
            helpers: {
                title: true,
                buttons: {}
            },
            afterLoad: function () {
                this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
            }
        });

    }

    e = jQuery(".yt-detail-image"), ehtml = e.html(), id = '', init();
    jQuery(window).resize(function () {
        if (id)
            clearTimeout(id);
        id = setTimeout(function () {
            e.children().empty().remove();
            e.html(ehtml);
            init();
        }, 300);
    });
});