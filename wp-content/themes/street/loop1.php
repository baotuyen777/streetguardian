<div class="respl-items-inner">
                                            <?php
                                            $args = array(
                                                'post_type' => 'product',
                                                'posts_per_page' => 8
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