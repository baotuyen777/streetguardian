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

<div class="row">
    <div class="page-title category-title">
        <h1>Contact</h1>
    </div>
    
    <div class="contact-map-wrap col-md-7 col-xs-12">
        <div class="contact-info">
            <p class="contact-address"><label>Add : </label>10/53-55 Governor Macquarie Drive, Chipping Norton, NSW 2170</p>
            <p class="contact-phone"><label>Tel : </label>+61-2-8004 6223 <label>Mob : </label>+61-419 544 888</p>
            <p class="contact-email"><label>Email : </label><a href="mailto:info@streetguardian.info">info@streetguardian.info</a></p>
        </div>
    </div>
    <div class="contact-map-wrap col-md-5 col-xs-12">
        <div class="contact-map"><!--<div class="contact-map-content"><img src="https://streetguardian.info/media/wysiwyg/bg-map.jpg" alt="" /></div>-->
            <div class="contact-map-content">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.740530283916!2d150.961985!3d-33.922077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12be1a4a8226d7%3A0xd1249e5f7271a632!2s10%2F53-55+Gov+Macquarie+Dr%2C+Chipping+Norton+NSW+2170!5e0!3m2!1sen!2sau!4v1423089823253 &amp;output=embed" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="100%" height="240"></iframe></div>
        </div>
    </div>
    <hr/>
</div>