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
                <div>
                    <div class="page-title category-title">
                        <h1 class="text-center1"><?php the_title() ?></h1>
                        <hr/>
                    </div>

                    <?php
                    if (have_posts()): while (have_posts()): the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>
                <?php // get_sidebar() ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
