<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
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
                                    <a href="<?php echo home_url() ?>" title="Go to Home Page" class="has-link">Home</a>
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
                <div id="blog-list">
                    <div class="postWrapper">
                        <?php
                        if (have_posts()): while (have_posts()): the_post();
                                ?> 
                                <div class="postTitle">
                                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?> </a></h2>
                                    <h3><?php the_excerpt(); ?></h3>
                                </div>
                                <div class="postContent"><p>Updated firmware for the SG9665GC is available for download from our support page, please choose the appropriate version based on your camera serial number and existing firmware version number</p>
                                    <p>&nbsp;</p>
                                    <a class="aw-blog-read-more" href="<?php the_permalink() ?>">Xem thêm</a>
                                </div>
                                <hr/>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>



            </div>   		                				        				        		</div>
    </div>


</div>


<?php
get_footer();
