<footer>
    <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
			<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
				<img id='OV-FooterLogo' src='<?php echo get_template_directory_uri(); ?>/img/ov-logo-64.png'/>
				<meta itemprop="url" content='<?php echo get_template_directory_uri(); ?>/img/ov-logo-64.png'/>
				<meta itemprop="width" content="64">
				<meta itemprop="height" content="64">
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
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://www.googletagmanager.com/gtag/js?id=UA-110231473-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-110231473-1');
      gtag('set', {'user_id': 'USER_ID'}); // Set the user ID using signed-in user_id.
    </script>
    
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