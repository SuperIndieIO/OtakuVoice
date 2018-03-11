<?php get_header('author'); ?>
<body>
    <a style='text-decoration: none;' href='<?php echo esc_url( home_url( '/' ) ); ?>'>
        <header>
            <h1 id='OV-Otaku'>Otaku</h1>
            <img id='OV-LogoLarge' src='<?php echo get_template_directory_uri(); ?>/img/ov-logo-72.png' />
            <!--<img id='OV-LogoSmall' src='<?php echo get_template_directory_uri(); ?>/img/OtakuVoice-Small.jpg' />-->
            <h1 id='OV-Voice' >Voice</h1>
        </header>
    </a>
    <main>
        <div id='OV-MainAuthor'>
            <div id='OV-AuthorImage'><?php echo get_avatar( get_the_author_meta( 'ID' ), 256 ); ?></div>
            <h1 id='OV-AuthorName'><?php the_author(); ?></h1>
            <h2 id='OV-AuthorTitle'><?php the_author_meta( title ); ?> | <a href='https://twitter.com/<?php the_author_meta( twitter ); ?>'>@<?php the_author_meta( twitter ); ?></a></h2>
            <p id='OV-AuthorText'><?php echo the_author_meta('description'); ?></p>
        </div>
        <div id='OV-AuthorRecentArticles'>
            <!--Secondary Regular Posts-->
            <div id='OV-MainPosts'>
                <?php $args = array(
                   'author'        =>  $current_user->ID,
                   'post_type' => 'post',
                   'posts_per_page' => 9,
                   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                   ); ?>
                <?php query_posts($args); ?>
                <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

                <?php $post = get_the_ID(); ?>   
                <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '' ); ?>
                <?php $desktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '16/9-medium' ); ?>
                <?php $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '8/3-medium' ); ?>
                <?php $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '32/9-small' ); ?>
                <a href='<?php echo get_the_permalink(); ?>'>
                    <div class='OV-PostSmall img-background' >
                        <picture>
                            <source media="(max-width: 479px)" srcset='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' data-srcset='<?php echo $mobile[0] ?>'>
                            <source media="(min-width: 480px) and (max-width: 639px)" srcset='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' data-srcset='<?php echo $tablet[0] ?>'>
                            <source media="(min-width: 640px)" srcset='<?php echo $desktop[0] ?>'>
                            <img class='OV-PostSmallImage' src='<?php echo $thumb[0] ?>'>
                        </picture>
                        <h3 class='OV-PostSmallText'><?php echo get_the_title(); ?></h3>
                    </div>
                </a>
                <?php endwhile ?>
                <?php endif ?>

            </div>
            <div id='OV-PostNav'><?php numeric_posts_nav(); ?></div>
        </div>
    </main>
    <footer>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
            <img id='OV-FooterLogo' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOSmallLogo.png'/></a>
        <div id='OV-FooterSocialIcons'>
            <a href="http://twitter.com/superindieio" onclick="ga('send', 'event', 'Social Follow', 'Twitter Follow', 'Twitter', '1');" target='_blank'>
            <img src='<?php echo get_template_directory_uri(); ?>/social-icons/twitter.svg' class='social-image-follow' /></a>

            <a href="http://facebook.com/superindieio" onclick="ga('send', 'event', 'Social Follow', 'Facebook Follow', 'Facebook', '1');" target='_blank'>
            <img src='<?php echo get_template_directory_uri(); ?>/social-icons/facebook.svg' class='social-image-follow' /></a>

            <a href="https://tumblr.superindie.io" onclick="ga('send', 'event', 'Social Follow', 'Tumblr Follow', 'Tumblr', '1');" target='_blank'>
            <img src='<?php echo get_template_directory_uri(); ?>/social-icons/tumblr.svg' class='social-image-follow' /></a>

            <a href="https://www.youtube.com/channel/UC0hq2bUJYw7NN12pf_7HDCw" onclick="ga('send', 'event', 'Social Follow', 'Youtube Follow', 'Youtube', '1');" target='_blank'>
            <img src='<?php echo get_template_directory_uri(); ?>/social-icons/youtube.svg' class='social-image-follow' /></a>
        </div>
        
        <div id='OV-FooterInfo'>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>about-us'>About Us</a>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>contact-us'>Contact Us</a>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy'>Privacy Policy</a>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>?s=search'>Search</a>
        </div>
    </footer>
    <span>
        
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
        </span>
</body>