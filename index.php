<?php get_header('home'); ?>
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
        <?php $posttype = 0; ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( $posttype == 0 ) { ?>
            <?php $post = get_the_ID(); ?>   
            <?php $xdesktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-xlarge' ); ?>
            <?php $sdesktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-large' ); ?>
            <?php $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '16/9-medium' ); ?>
            <?php $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '16/9-small' ); ?>
            <a href='<?php echo get_the_permalink(); ?>'>
                <div class='OV-PostLarge img-background'>
                    <picture>
                        <source media="(min-width: 992px)" srcset='<?php echo $xdesktop[0] ?>'>
                        <source media="(min-width: 640px) and (max-width: 991px)" srcset='<?php echo $sdesktop[0] ?>'>
                        <source media="(max-width: 639px) and (min-width: 480px)" srcset='<?php echo $tablet[0] ?>'>
                        <source media="(max-width: 479px)" srcset='<?php echo $mobile[0] ?>'>
                        <img class='OV-PostLargeImage' src='<?php echo $xdesktop[0] ?>'>
                    </picture>
                    <div class='OV-Headline'>
                        <h2 class='OV-PostLargeHeadline'><?php echo get_the_title(); ?></h2>
                        <h3 class='OV-PostLargeSubHeadline italics'><?php echo(get_the_excerpt()); ?></h3>
                    </div>
                </div>
            </a>
        <?php } elseif ($postype == 1) { ?>
        
        <?php } elseif ($postype == 2) { ?>
        
        <?php } elseif ($postype == 3) { ?>
        
        <?php } elseif ($postype == 4) { ?>
        
        <?php } elseif ($postype >= 5) { ?>
        
        <?php } endif; ?>
            
        <?php endwhile; else : ?>
	       <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        
    </main>
    <?php get_footer('home'); ?>
</body>