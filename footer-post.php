<footer>
    <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
			<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
				<img id='OV-FooterLogo' src='<?php echo get_template_directory_uri(); ?>/img/ov-logo-64.png' alt='Otaku Voice Logo - 64px'/>
				<meta itemprop="url" content='<?php echo get_template_directory_uri(); ?>/img/ov-logo-64.png'/>
				<meta itemprop="width" content="64">
				<meta itemprop="height" content="64">
			</div>
			<meta itemprop="name" content="Otaku Voice"/>
			<meta itemprop='url' content='https://otakuvoice.com'/>
        </a>
    </span>
    <div id='OV-FooterSocialIcons'>
        <a href="https://twitter.com/otakuvoice" onclick="TrackSocialFollow('Twitter');" target="_blank">
        <img src='<?php echo get_template_directory_uri(); ?>/social-icons/twitter.svg' class='social-image-follow' alt='Twitter Follow Logo'/></a>

        <a href="https://facebook.com/theotakuvoice" onclick="TrackSocialFollow('Facebook');" target='_blank'>
        <img src='<?php echo get_template_directory_uri(); ?>/social-icons/facebook.svg' class='social-image-follow' alt='Facebook Follow Logo'/></a>
		
		<a href="https://tumblr.otakuvoice.com" onclick="TrackSocialFollow('Tumblr');" target='_blank' >
        <img src='<?php echo get_template_directory_uri(); ?>/social-icons/tumblr.svg' class='social-image-follow' alt='Tumblr Follow Logo'/></a>
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
	
	<!--Track Outbound Links-->
	<script>
		var TrackSocialFollow = function(platform) {
			gtag('event', platform + ' follow', {'event_category' : 'Social Follow', 'event_label' : platform, 'value' : '1'});
		}
		var TrackSocialShare = function(platform) {
			gtag('event', platform + ' share', {'event_category' : 'Social Share', 'event_label' : platform, 'value' : '1'});
		}
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
    <script async type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/OV-Page.min.js'></script>
    
    <!--In-Article Advertising JS-->
    <script async defer type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/OV-InArticle.min.js'></script>
    
    <!--In-Sidebar Advertising JS-->
    <script async defer type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/OV-InSidebar.min.js'></script>
    
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
	
	<!--Facebook JS SDK-->
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId      : '585600295152171',
		  xfbml      : true,
		  version    : 'v3.0'
		});

		FB.AppEvents.logPageView();

	  };

	  (function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "https://connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
</span>