<?php get_header('home'); ?>
<body>
    <main>
        <?php $posttype = 0; ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( $posttype == 0) { ?>
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
        <?php $posttype++ ?>
        <?php } elseif ( $posttype == 1) { ?>
        <div id='OV-FeaturedGridA' class='OV-FeaturedGrid'>
            <?php $post = get_the_ID(); ?>   
            <?php $desktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '16/9-medium' ); ?>
            <?php $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-medium' ); ?>
            <?php $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-small' ); ?>
            <a href='<?php echo get_the_permalink(); ?>'>
            <div class='OV-SemiFeatured grid-a'>
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
        <?php $posttype++ ?>
        <?php } elseif ( $posttype == 2) { ?>
            <?php $post = get_the_ID(); ?>   
            <?php $desktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '32/9-medium' ); ?>
            <?php $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-medium' ); ?>
            <?php $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-small' ); ?>
            <a href='<?php echo get_the_permalink(); ?>'>
            <div class='OV-SemiFeatured grid-b'>
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
        </div>
        <?php $posttype++ ?>
        <?php } elseif ( $posttype == 3) { ?>
        <div id='OV-FeaturedGridB' class='OV-FeaturedGrid'>
            <?php $post = get_the_ID(); ?>   
            <?php $desktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '32/9-medium' ); ?>
            <?php $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-medium' ); ?>
            <?php $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-small' ); ?>
            <a href='<?php echo get_the_permalink(); ?>'>
            <div class='OV-SemiFeatured grid-b'>
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
        <?php $posttype++ ?>
        <?php } elseif ( $posttype == 4) { ?>
            <?php $post = get_the_ID(); ?>   
            <?php $desktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '16/9-medium' ); ?>
            <?php $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-medium' ); ?>
            <?php $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '8/3-small' ); ?>
            <a href='<?php echo get_the_permalink(); ?>'>
            <div class='OV-SemiFeatured grid-a'>
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
        </div>
        <?php $posttype++ ?>
        <?php } elseif ( $posttype == 5) { ?>
        <div id='OV-MainPosts'>
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
        <?php $posttype++ ?>
        <?php } elseif ( $posttype >= 6) { ?>
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
        <?php $posttype++ ?>
        <?php } ?>
        <?php endwhile; else : ?>
	       <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </div>
        <div id='OV-PostNav'><?php numeric_posts_nav(); ?></div>
    </main>
    <?php get_footer('home'); ?>
</body>