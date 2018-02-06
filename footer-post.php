<footer>
    <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
            <!--<img id='OP-FooterLogo' src='<?php echo get_template_directory_uri(); ?>/img/TheOtakuProjectSmallLogo.png'/>-->
            <meta itemprop="url" content='<?php echo get_template_directory_uri(); ?>/img/TheOtakuProjectSmallLogo.png'/>
            <meta itemprop="width" content="300">
            <meta itemprop="height" content="30">
        </div>
        <meta itemprop="name" content="Otaku Voice"/>
        <meta itemprop='url' content='https://otakuvoice.com'/>
        </a>
    </span>
    <div id='OV-FooterSocialIcons'>
        <a href="http://twitter.com/otakuvoice" onclick="ga('send', 'event', 'Social Follow', 'Twitter Follow', 'Twitter', '1');" target='_blank'>
        <img src='<?php echo get_template_directory_uri(); ?>/social-icons/twitter.svg' class='social-image-follow' /></a>

        <a href="http://facebook.com/theotakuvoice" onclick="ga('send', 'event', 'Social Follow', 'Facebook Follow', 'Facebook', '1');" target='_blank'>
        <img src='<?php echo get_template_directory_uri(); ?>/social-icons/facebook.svg' class='social-image-follow' /></a>

        <a href="https://www.youtube.com/channel/UC0hq2bUJYw7NN12pf_7HDCw" onclick="ga('send', 'event', 'Social Follow', 'Youtube Follow', 'Youtube', '1');" target='_blank'>
        <img src='<?php echo get_template_directory_uri(); ?>/social-icons/youtube.svg' class='social-image-follow' /></a>
    </div>
    <div id='OV-FooterInfo'>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>about-us'>About Us</a>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>contact-us'>Contact Us</a>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy'>Privacy Policy</a>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>?s='>Search</a>
    </div>
</footer>
<span>
    <!--Detect Adsense Author Channel-->
    <script>
        var my_google_ad_channel = '<?php the_author_meta( authoradsense ); ?>';
    </script>
    
    <!--Defer Image Load JS-->
    <script>
        function init() {
            var imgDefer = document.getElementsByTagName('source');
            for (var i=0; i<imgDefer.length; i++) {
                if(imgDefer[i].getAttribute('data-srcset')) {
                imgDefer[i].setAttribute('srcset',imgDefer[i].getAttribute('data-srcset'));
            } } }
        window.onload = init;
    </script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://www.googletagmanager.com/gtag/js?id=UA-110231473-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-110231473-1');
      gtag('set', {'user_id': 'USER_ID'}); // Set the user ID using signed-in user_id.
    </script>
    
    <!--JQuery Code-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!--Advertising.js-->
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/advertising.js'></script>
    
    <!--Publishing.js-->
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/OV-Publishing.js'></script>
    
    <!--GA Page Scrolling-->
    <script async type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/OV-Page.js?r=<?php echo time(); ?>'></script>
    
    <!--In-Article Advertising JS-->
    <script async defer type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/OV-InArticle.js?r=<?php echo time(); ?>'></script>
    
    <!--In-Sidebar Advertising JS-->
    <script async defer type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/OV-InSidebar.js?r=<?php echo time(); ?>'></script>
    
    <!--Start Quantcast JS-->
    <script type="text/javascript">
        var _qevents = _qevents || [];

        (function() {
            var elem = document.createElement('script');
            elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
            elem.async = true;
            elem.type = "text/javascript";
            var scpt = document.getElementsByTagName('script')[0];
            scpt.parentNode.insertBefore(elem, scpt);
            })();

        _qevents.push({
        qacct:"p-f8xH8YBmV66Ap"
        });
    </script>
    <!--End Quantcast JS-->
</span>