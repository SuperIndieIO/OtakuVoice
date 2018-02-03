<?php get_header('home'); ?>
<body>
    <header>
        <h1 style='margin: 16px auto; text-decoration: none; text-align: center; font-family: "Roboto:900", sans-serif; font-size: 3em;'>Otaku Voice</h1>
        <!--<a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
            <img id='OV-LogoLarge' src='<?php echo get_template_directory_uri(); ?>/img/TheOtakuProjectLargeLogo.png' />
            <img id='OV-LogoSmall' src='<?php echo get_template_directory_uri(); ?>/img/TheOtakuProjectSmallLogo.png' />
        </a>-->
    </header>
    <main>
        <!--Featured Post-->
        <span>
        <?php query_posts('showposts=1'); ?>
            <?php the_post(); ?>
            <?php $post = get_the_ID(); ?>   
            <?php $primary = $post; ?>
            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '' ); ?>
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
                <img class='OV-PostLargeImage' src='<?php echo $thumb[0] ?>'>
            </picture>
            <div class='OV-Headline'>
                <h2 class='OV-PostLargeHeadline'><?php echo get_the_title(); ?></h2>
                <h3 class='OV-PostLargeSubHeadline italics'><?php echo(get_the_excerpt()); ?></h3>
            </div>
        </div>
        </a>
        </span>
        
        <!--Semi-Featured Section-->
        <div id='OV-FeaturedGridA' class='OV-FeaturedGrid'>
        <?php $SFS = 0 ?>
            <?php query_posts('showposts=2&offset=1'); ?>
            <?php while( $wp_query->have_posts() ) : $wp_query>the_post(); ?>
            <?php $SFS++ ?>

            <?php $post = get_the_ID(); ?>   
            <?php if ( $SFS % 2 !== 0 ) {
                $desktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '16/9-medium' );
                $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-medium' );
                $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-small' );
            } 
            else {
                $desktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '32/9-medium' );
                $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-medium' );
                $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-small' );
            }?>
            <a href='<?php echo get_the_permalink(); ?>'>
            <div class='OV-SemiFeatured <?php if ( $SFS % 2 !== 0 ) {echo 'grid-a';} else {echo 'grid-b';} ?> img-background'>
                <picture>
                    <source media="(max-width: 479px)" srcset='<?php echo $mobile[0] ?>'>
                    <source media="(max-width: 639px) and (min-width: 480px)" srcset='<?php echo $tablet[0] ?>'>
                    <source media="(min-width: 640px)" srcset='<?php echo $desktop[0] ?>'>
                    <img class='OV-SemiFeaturedImage' src='<?php echo $desktop[0] ?>'>
                </picture>
                <div class='OV-SemiFeaturedText'>
                    <h2 class='OV-SemiFeaturedHeadline'><?php echo get_the_title(); ?></h2>    
                    <h3 class='OV-SemiFeaturedSubHeadline'><?php echo(get_the_excerpt()); ?></h3>
                </div>
            </div>
            </a>
            <?php endwhile ?>
        </div>
        
        <div id='OV-FeaturedGridB' class='OV-FeaturedGrid'>
        <?php $SFS = 0 ?>
            <?php query_posts('showposts=2&offset=3'); ?>
            <?php while( $wp_query->have_posts() ) : $wp_query>the_post(); ?>
            <?php $SFS++ ?>

            <?php $post = get_the_ID(); ?>   
            <?php if ( $SFS % 2 !== 0 ) {
                $desktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '32/9-medium' );
                $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-medium' );
                $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-small' );
            } 
            else {
                $desktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '16/9-medium' );
                $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-medium' );
                $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-small' );
            }?>             
            <a href='<?php echo get_the_permalink(); ?>'>
            <div class='OV-SemiFeatured <?php if ( $SFS % 2 !== 0 ) {echo 'grid-b';} else {echo 'grid-a';} ?>'>
                <picture>
                    <source media="(max-width: 479px)" srcset='<?php echo $mobile[0] ?>'>
                    <source media="(max-width: 639px) and (min-width: 480px)" srcset='<?php echo $tablet[0] ?>'>
                    <source media="(min-width: 640px)" srcset='<?php echo $desktop[0] ?>'>
                    <img class='OV-SemiFeaturedImage' src='<?php echo $desktop[0] ?>'>
                </picture>
                <div class='OV-SemiFeaturedText'>
                    <h2 class='OV-SemiFeaturedHeadline'><?php echo get_the_title(); ?></h2>    
                    <h3 class='OV-SemiFeaturedSubHeadline'><?php echo(get_the_excerpt()); ?></h3>
                </div>
            </div>
            </a>
            <?php endwhile ?>
        </div>
        
         <!--Main Posts Section-->
        <div id='OV-MainPosts'>
            
            <?php $c = 0 ?>
            <?php query_posts('showposts=6&offset=5'); ?>
            <?php if ( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query>the_post(); ?>
            <?php if ( $c==6 ) { break; } ?>
            <?php $c++ ?>

            <?php $post = get_the_ID(); ?>   
            <?php $desktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '16/9-medium' ); ?>
            <?php $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '32/9-medium' ); ?>
            <?php $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '32/9-small' ); ?>
            <a href='<?php echo get_the_permalink(); ?>'>
            <div class='OV-PostSmall img-background'>
                <picture>
                    <source media="(max-width: 479px)" srcset='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' data-srcset='<?php echo $mobile[0] ?>'>
                    <source media="(max-width: 639px) and (min-width: 480px)" srcset='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' data-srcset='<?php echo $tablet[0] ?>'>
                    <source media="(min-width: 640px)" srcset='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' data-srcset='<?php echo $desktop[0] ?>'>
                    <img class='OV-PostSmallImage' src='<?php echo $desktop[0] ?>'>
                </picture>
                <!--<img class='OV-PostSmallImage' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' data-src='<?php //echo $thumb[0] ?>' />-->
                <div class='OV-PostSmallText'>
                    <h2 class='OV-PostSmallHeadline'><?php echo get_the_title(); ?></h2>    
                    <h3 class='OV-PostSmallSubHeadline'><?php echo(get_the_excerpt()); ?></h3>
                </div>
            </div>
            </a>
            <?php endwhile ?>
            <?php endif ?>
        </div>
        <div id='OV-PostNav'><?php numeric_posts_nav(); ?></div>
    </main>
    <?php get_footer('home'); ?>
</body>