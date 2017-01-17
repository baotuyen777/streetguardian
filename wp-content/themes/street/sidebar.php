<div id="yt_main_right" class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
    <div id="myCarousel" class="block-left latest-blog-wrap carousel slide" data-interval="0">
        <div class="latest-blog-header">
            <div class="title-header title-latestblog">Nâng cấp phần mềm</div>
            <ul class="btn-latest-blog">
                <li><a href="#myCarousel" data-slide="next" class="icon-angle-left"></a></li>
                <li><a href="#myCarousel" data-slide="prev" class="icon-angle-right"></a></li>
            </ul>
        </div>
        <div class="carousel-inner">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 8
            );
            $the_query = new WP_Query($args);
            $i = 0;
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                    $i++;
                    $active = $i == 1 ? 'active' : '';
                    ?>
                    <div class="item <?php echo $active ?>">
                        <div class="item-latest-blog">
                            <div class="item-lb-image">
                                <?php the_post_thumbnail('thumbnail') ?>
                            </div>
                            <div class="item-lb-title">
                                <a href="<?php echo get_site_url() ?>/whats-new/SG9665GC-firmware/"><?php the_title() ?></a>
                            </div>
                            <div class="item-lb-date">
                                <span class="day"> 21</span> 
                                <span class="ago">
                                    203 days ago                    </span>
                            </div>
                            <div class="item-lb-description">
                                <?php the_excerpt() ?>			
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

        </div>
    </div>

    <div id="container_slider_17865154081484051477" class="container-slider brand-slider">
        <div class="brand-slider-header">
            <div class="title-header page-title-slider"> WHAT WE USE</div>
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
                        <?php
                        $images = get_field('trademark', PAGE_HOME);
                        $count = count($images);

                        if ($images):
                            $i = 0;
                            foreach ($images as $image):
                                $i++;
                                if ($i == 1 || ($i - 1) % 3 == 0):
                                    ?>
                                    <div class="item">
                                    <?php endif; ?>
                                    <div class="item-wrap">
                                        <div class="item-img item-height">
                                            <div class="item-img-info">
                                                <a href="http://#"  onclick="javascript: return true";>
                                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />	
                                                </a>
                                            </div>
                                        </div>						
                                    </div>
                                    <?php if ($i % 3 == 0 || $i == $count): ?>
                                    </div>
                                <?php endif; ?>

                                <?php
                            endforeach;
                        endif;
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<aside id="secondary" class="widget-area" role="complementary">
    <?php // dynamic_sidebar( 'sidebar-1' );    ?>
</aside><!-- #secondary -->
