
<!-- BEGIN: footer -->
<div id="yt_footer" class="yt-footer wrap">
    <div class="yt-footer-wrap">
        <div class="yt-footer-top">
            <div class="container">
                <div class="row">
                    <div class="yt-footer-top-wrap">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 store-location">
                            <div class="block-store-location">
                                <?php echo get_field('contact', PAGE_HOME) ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 other-information">
                            <div class="block-other-information">
                                <div class="block-title-footer">Sản phẩm chính</div>
                                <div class="block-content-info">
                                    <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  block-newsletter">

                            <div class="fb-page" data-href=" <?php echo get_field('fanpage', PAGE_HOME) ?>" 
                                 data-tabs="false" data-small-header="false" 
                                 data-adapt-container-width="false" data-hide-cover="false" 
                                 data-show-facepile="true">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="yt-footer-bottom">
            <div class="container">
                <div class="row">
<!--                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 yt-copyright">
                          Copyright &copy; StreetGuardian. Site developed and maintained by <a href="https://www.facebook.com/baotuyen666">DavidBui</a>. &nbsp;&nbsp;            	
                    </div>-->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 yt-payment">
                        <!--<div style="text-align: right; margin-bottom: 5px;"><a href="/">Home</a> | <a href="terms-conditions">Terms &amp; Conditions | </a><a href="privacy-policy">Privacy Policy</a></div>-->
                        <p class="hidden">camera hành trình, camera hanh trinh, camera hành trình ô tô, camera hành trình ô tô, bán camera hành trình
                        camera hành trình giá rẻ,camera hành trình nào tốt,giá camera hành trình, mua camera hành trình,
                        camera hành trình cho ô tô, ban camera hanh trinh, camera hanh trình, camera hành trinh, camera hành trình visiondrive,
                        camera hành trình loại nào tốt, nên mua camera hành trình loại nào, camera hanh trinh otosaigon,
                        camera hanh trinh tot nhat, camera hành trình nào tốt nhất, camera hành trình tốt nhất, tư vấn camera hành trình,
                        camera hành trình otosaigon, camera hanh trinh 910, camera hành trình tốt nhất hiện nay, camera hành trình hàn quốc,
                        camera hanh trinh visiondrive, camera hành trình có gps, chọn camera hành trình, camera hành trình otofun, camera hanh trinh han quoc,
                        camera hành trình tphcm, tự chế camera hành trình, camera hanh trinh otofun, camera hanh trinh oto, camera hanh trinh tren oto,
                        camera hanh trinh cho oto, camera oto, camera hành trình oto, lap camera hanh trinh cho oto, camera hành trình trên ôtô,
                        camera xe oto, camera hanh trinh xe hoi, camera hành trình xe hơi, camera giám sát hành trình, camera giám sát hành trình ô tô,
                        camera giam sat hanh trinh, lắp camera hành trình, lap dat camera hanh trinh, lắp camera hành trình cho ô tô,
                        lắp đặt camera hành trình, có nên lắp camera hành trình, cách lắp camera hành trình, camera xe hoi, camera ô tô,
                        hộp đen ô tô, video ô tô, màn hình ô tô, camera hinh trinh, hinh trinh, camera han quoc, camera hàn quốc, camera hanh trinh vietmap,
                        camera hành trình vietmap, vietmap, vietmap c007, cam hanh trinh, cam hành trình, visiondrive, shop korea,
                        viet map, hanhtrinhxe, camerahanhtrinh, dvr 910, hop den o to, shopkorea, dvr 910 gps
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>       

</div>
<!-- END: footer -->
</div>
<div id="fb-root"></div>
<script>
    var ajax_url = '<?php echo admin_url() . "admin-ajax.php" ?>'
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-1.7.2.min.js"></script>
<?php if (is_singular('product')): ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/yt-extend.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/cloud-zoom.1.0.2.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jcarousellite_1.0.1.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/fancybox-buttons.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/product.js"></script>
<?php endif; ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>

</body>
</html>
