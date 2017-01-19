
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
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 yt-copyright">
                        <strong>ABN:</strong> 74 142 014 935 . Copyright &copy; StreetGuardian. Site developed and maintained by <a href="https://www.facebook.com/baotuyen666">DavidBui</a>. &nbsp;&nbsp;            	</div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 yt-payment">
                        <div style="text-align: right; margin-bottom: 5px;"><a href="/">Home</a> | <a href="terms-conditions">Terms &amp; Conditions | </a><a href="privacy-policy">Privacy Policy</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>       

</div>
<!-- END: footer -->
</div>
<script>
    var ajax_url = '<?php echo admin_url() . "/admin-ajax.php" ?>'
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-1.7.2.min.js"></script>

<?php if (1 == 1): ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://streetguardian.info/skin/frontend/default/sm_zen/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="https://streetguardian.info/skin/frontend/default/sm_zen/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://streetguardian.info/skin/frontend/default/sm_zen/js/yt-extend.js"></script>
    <script type="text/javascript" src="https://streetguardian.info/skin/frontend/default/sm_zen/js/cloud-zoom.1.0.2.js"></script>
    <script type="text/javascript" src="https://streetguardian.info/skin/frontend/default/sm_zen/js/jcarousellite_1.0.1.js"></script>
    <script type="text/javascript" src="https://streetguardian.info/skin/frontend/default/sm_zen/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="https://streetguardian.info/skin/frontend/default/sm_zen/js/fancybox-buttons.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/product.js"></script>
<?php endif; ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.themepunch.revolution.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/slider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/sm-megamenu.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/allPage.js"></script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=578202858865332";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer() ?>
</body>
</html>
