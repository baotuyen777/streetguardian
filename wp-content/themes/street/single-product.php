<?php
get_header();
?>
<div id="yt_content" class="yt-content wrap">
    <div class="yt-breadcrumbs">
        <div class="container">
            <div class="row">
                <div id="yt_pathway" class="clearfix">
                    <div class="pathway-inner">
                        <!--<h4></h4>-->
                        <ul class="breadcrumbs">
                            <i class="breadcrumbs-icon"></i>
                            <div class="breadcrumbs-content">
                                <li class="breadcrumbs-home"></li>
                                <li class="home">
                                    <a href="<?php echo home_url() ?>" title="Go to Home Page" class="has-link">Trang chủ</a>
                                    &nbsp;&nbsp;&nbsp;<span class="icon-caret-right"></span>&nbsp;&nbsp;&nbsp;
                                </li>
                                <li class="cms_page last">
                                    <?php the_title() ?>                                 
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="yt_main" class="yt-main col-main ">
        <div class="yt_main_inner yt-content-inner">
            <div class="container">
                <div class="row">
                    <div id="messages_product_view"> </div>
                    <div class="yt-product-detail">
                        <div class="yt-product-detail-inner">
                            <div class="product-essential">
                                <div class="yt-detail-left col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                    <div class="product-img-box">
                                        <div class="yt-detail-image">
                                            <div class="product-image-zoom">
                                                <div id="wrap" style="top:0px;z-index:9999;position:relative;">
                                                    <a id="yt_cloudzoom" class="cloud-zoom" rel="zoomWidth:300, zoomHeight:300, adjustX: 20, adjustY: -3" title="SG9665GC V2 – FULL HD GPS DVR" 
                                                       href="<?php the_post_thumbnail_url(); ?>" style="position: relative; display: block;">
                                                        <img id="image" src="<?php the_post_thumbnail_url('product-slide-active'); ?> " alt="<?php the_title() ?>" title="<?php the_title() ?>" style="display: block;">

                                                    </a>
                                                    <div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:373px;height:373px;left:0px;top:0px;"></div>
                                                </div>
                                                <div class="popup-btn  hidden-phone">
                                                    <?php
                                                    $images = get_field('gallery');
                                                    $count = count($images);

                                                    if ($images):
                                                        $i = 0;
                                                        foreach ($images as $image):
                                                            $i++;
                                                            if ($i == 1):
                                                                ?>
                                                                <a id="yt_popup" class="fancybox-button" data-fancybox-group="button" 
                                                                   href="<?php echo $image['url']; ?>">
                                                                    Zoom
                                                                </a>
                                                            <?php endif; ?>

                                                            <a style="display:none;" class="fancybox-button fancybox-image-hidden " data-fancybox-group="button" 
                                                               href="<?php echo $image['url']; ?>">
                                                            </a>
                                                            <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="more-views slide-gallery">
                                            <div class="jCarouselLite" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 291px;">
                                                <ul style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; width: 1164px; left: -291px;">
                                                    <?php
                                                    $images = get_field('gallery');
                                                    $count = count($images);

                                                    if ($images):
                                                        $i = 0;
                                                        foreach ($images as $image):
                                                            ?>
                                                            <li style="width: 87px; height: 87px; overflow: hidden; float: left;">
                                                                <a onclick="$$('.cloud-zoom-gallery').each(function (e, i) {
                                                                            e.removeClassName('actived');
                                                                        });
                                                                        this.addClassName('actived')" 
                                                                   class="cloud-zoom-gallery" 
                                                                   rel="useZoom: 'yt_cloudzoom', smallImage: '<?php echo $image['sizes']['product-slide-active'] ?>'" 
                                                                   href="<?php echo $image['url'] ?>" title=""> 
                                                                    <img src="<?php echo $image['sizes']['product-slide']; ?>" alt="" title="">
                                                                </a>
                                                            </li>
                                                            <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </ul>
                                            </div>
                                            <span class="next"></span>
                                            <span class="prev"></span> 
                                        </div>
                                    </div>
                                </div>
                                <div class="yt-detail-right col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                    <form>

                                        <div class="product-shop">
                                            <h1 class="product-name">
                                                <a  title="<?php the_title() ?>"><?php the_title() ?></a>
                                            </h1>
                                            <div class="product-next-pre">
                                                 <?php previous_post_link( '%link', 'Sản phẩm sau', TRUE, ' ', 'product_cat' ); ?>
                                                <?php next_post_link( '%link', 'Sản phẩm trước', TRUE, ' ', 'product_cat' ); ?>
                                              
                                            </div>
                                            <div class="product-review">
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price" id="product-price-493">
                                                    <span class="price-label">Giá: </span
                                                    <?php
                                                    $price = null != (get_field('price')) ? number_format(get_field('price')) . ' đ' : 'Liên hệ';
                                                    ?>
                                                    <span class="price"><?php echo $price ?></span>                                    
                                                </span>
                                            </div>
                                            <?php
                                            if (get_field('availability') == 'Out stock'):
                                                ?>
                                                <p class="availability out-of-stock">Trạng thái: <span>instock</span></p>
                                            <?php else: ?>
                                                <p class="availability in-stock">Trạng thái: <span>instock</span></p>
                                            <?php endif; ?>

                                            <div class="short-description">
                                                <?php the_excerpt() ?>
                                            </div>
                                        </div>
                                        <div class="clearer"></div>
                                    </form>
                                    <div id="yt_tab_products" class="tab-product-detail">
                                        <ul class="yt-tab-navi">
                                            <li class="active">
                                                <a href="#yt_tab_decription">Chi tiết sản phẩm</a>
                                            </li>
                                        </ul>
                                        <div class="yt-tab-content tab-content">
                                            <div id="yt_tab_decription" class="tab-pane fade in active">
                                                <?php
                                                if (have_posts()): while (have_posts()): the_post();
                                                        the_content();
                                                endwhile;
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Upsell products-->				
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
