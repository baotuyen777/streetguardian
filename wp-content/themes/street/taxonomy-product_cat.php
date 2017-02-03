<?php
get_header();
$term = get_term_by('slug', get_query_var('term'), 'product_cat');
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
                                    <?php echo $term->name ?>                                 
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="yt_main" class="yt-main col-main ">
        <div class=" yt-content-inner">
            <div class="container">
                <div class="row">

                    <div id="yt_main_left" class="col-md-9 col-xs-12">
                        <div class="page-title category-title">
                            <h1 class="text-center1"><?php echo $term->name ?></h1>
                            <hr/>
                        </div>
                        <div class="category-products">
                            <div class="yt-products-container clearfix">
                                <div class="products-grid">
                                    <div class="row">
                                        <?php
                                        if (have_posts()): while (have_posts()): the_post();
                                                ?>

                                                <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="item-inner">
                                                        <div class="product-image">
                                                            <a href="<?php the_permalink() ?>">
                                                                <?php the_post_thumbnail('product-slide-active') ?>
                                                            </a>
                                                        </div>

                                                        <div class="product-info">
                                                            <div class="product-name">
                                                                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                                                    <?php the_title() ?>								
                                                                </a>
                                                            </div>
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price" id="product-price-493">
                                                                        <!--span class="price-label"></span-->
                                                                        <span class="price">
                                                                            <?php echo get_field('price') ? number_format(get_field('price')) . ' đ' : 'Liên hệ' ?>
                                                                        </span>                                    
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end item -->
                                                <?php
                                            endwhile;
                                        endif;
                                        ?>

                                    </div>
                                </div>
                            </div>
                           
                            <div class="toolbar-bottom">
                                <div class="toolbar">
                                    <div class="toolbar-inner">
                                        <div class="pagination-wrap">
                                            <div class="pagination">
                                                <div class="pages">
                                                     <?php echo david_pagination(); ?>
<!--                                                    <ol>
                                                        <li class="current"><a href="#" onclick="javascript:void(0);">1</a></li>
                                                        <li class=""><a href="https://streetguardian.info/products/digital-video-recorders?p=2">2</a></li>
                                                        <li>
                                                            <a class="next " href="https://streetguardian.info/products/digital-video-recorders?p=2" title="Next">
                                                                Next                                    </a>
                                                        </li>
                                                    </ol>-->

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div id="yt_main_right" class="col-md-3  col-xs-12">
                        <?php get_sidebar() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
