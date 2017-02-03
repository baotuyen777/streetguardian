<?php
/**
 * Template Name: Facebook
 */
?>
<style>
    .fb-page{
        margin: 10px auto;
        text-align: center;
        left: 50%;
        transform: translate(-50%)
    }
</style>
<!-- $CHAT -->
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '95100348886',
            xfbml: true,
            version: 'v2.6'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    
</script>

<div class="fb-page" 
     data-href="https://www.facebook.com/Street-Guardian-Vi%E1%BB%87t-Nam-1082480898473922/" 
     data-tabs="messages" 
     data-width="320" 
     data-height="300" 
     data-small-header="true">
    <div class="fb-xfbml-parse-ignore">
        <blockquote></blockquote>
    </div>
</div>