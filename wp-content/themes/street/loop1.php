<div class="respl-items-inner">
    <?php
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 8
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
            ?>

            <?php the_post_thumbnail('thumbnail') ?>
            <a href="<?php echo get_site_url() ?>/sg9665gv-v3-32-cpl.html"  onclick="javascript: return true"  title="SG9665GC V3 FULL HD" >
                <?php the_title() ?>				
            </a>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>