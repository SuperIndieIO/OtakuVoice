<?php /*
Template Name: Midform Blurb Template without Image
Template Post Type: post
*/
get_header('post');
?>
<body>
    <!--Header logo for OtakuVoice-->
    <a style='text-decoration: none;' href='<?php echo esc_url( home_url( '/' ) ); ?>'>
        <header>
            <h1 id='OV-Otaku'>Otaku</h1>
            <img id='OV-LogoLarge' src='<?php echo get_template_directory_uri(); ?>/img/ov-logo-72.png' />
            <!--<img id='OV-LogoSmall' src='<?php echo get_template_directory_uri(); ?>/img/OtakuVoice-Small.jpg' />-->
            <h1 id='OV-Voice' >Voice</h1>
        </header>
    </a>
    <main>
        <!--Wordpress Loop Code-->
        <?php $post = get_the_ID(); ?>   
        <?php $primary = $post; ?>
        <?php $xdesktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-xlarge' ); ?>
        <?php $sdesktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-large' ); ?>
        <?php $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-medium' ); ?>
        <?php $small = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-small' ); ?>
        
        <article id='OV-PostBody'>
        <div id='OV-Post'>
		<span itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
			<meta itemprop='url' content='<?php echo $thumb[0] ?>'/>
			<meta itemprop='width' content='1296'/>
			<meta itemprop='height' content='720'/>
		</span>
        </div>
            <h1 id='OV-PostHeadline' itemprop='headline'><?php echo get_the_title(); ?></h1>
            <h2 id='OV-PostSubHeadline'><?php echo(get_the_excerpt()); ?></h2>
            <div id='OV-PostAuthor' itemprop='author'><a href='<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>'><?php the_author(); ?></a> | <a href='https://www.twitter.com/<?php the_author_meta( twitter ); ?>'>@<?php the_author_meta( twitter ); ?></a> <div id='OV-PostDate' itemprop='datePublished'><?php the_time("M j, Y"); ?></div></div>
            <!--Load Content-->
            <?php the_content(); ?>
            <!--Social media sharing link-->
            <div id='OV-PostSocialMedia'>
            <a href="http://twitter.com/share" onclick="ga('send', 'event', 'Social Share', 'Twitter Share', 'Twitter', '1');" target='_blank'>
                <img src='<?php echo get_template_directory_uri(); ?>/social-icons/twitter.svg' class='social-image' /></a>
    
            <a href='https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>' onclick="ga('send', 'event', 'Social Share', 'Facebook Share', 'Facebook', '1');" target='_blank'>
                <img src='<?php echo get_template_directory_uri(); ?>/social-icons/facebook.svg' class='social-image'/></a>
    
            <a href='https://plus.google.com/share?url=<?php the_permalink(); ?>' onclick="ga('send', 'event', 'Social Share', 'Google Plus Share', 'Google', '1');" target='_blank'>
                <img src='<?php echo get_template_directory_uri(); ?>/social-icons/google_plus.svg' class='social-image'/></a>

            <a href='http://tumblr.com/widgets/share/tool?canonicalUrl=<?php echo get_the_permalink(); ?>' onclick="ga('send', 'event', 'Social Share', 'Tumblr Share', 'Tumblr', '1');" target='_blank'>
                <img src='<?php echo get_template_directory_uri(); ?>/social-icons/tumblr.svg' class='social-image'/></a>

            <a href='http://www.reddit.com/submit?url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>' onclick="ga('send', 'event', 'Social Share', 'Reddit Share', 'Reddit', '1');" target='_blank'>
                <img src='<?php echo get_template_directory_uri(); ?>/social-icons/reddit.svg' class='social-image'/></a>
            </div>
            
            <!--Category related articles-->
            <div id='OV-RelatedCategory'>
                <?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post), 'numberposts' => 3, 'post__not_in' => array($post), 'category__not_in' => 'Featured' ) ); ?>
                <?php if( $related ) foreach( $related as $post ) {?>
                <?php $post = get_the_ID(); ?>
                <?php $desktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '16/9-medium' ); ?>
                <?php $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '32/9-medium' ); ?>
                <?php $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '32/9-small' ); ?>
                    <a href='<?php echo get_the_permalink(); ?>'>
                        <div class='OV-PostSmall img-background'> 
                            <!--<img class='OV-PostSmallImage' src='<?php echo $thumb[0] ?>'/>-->
                            <picture>
                                <source media='(max-width: 479px)' srcset='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' data-srcset='<?php echo $mobile[0] ?>'>
                                <source media='(min-width: 480px) and (max-width: 639px)' srcset='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' data-srcset='<?php echo $tablet[0] ?>'>
                                <source media='(min-width: 640px)' srcset='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' data-srcset='<?php echo $desktop[0] ?>'>
                                <img class='OV-PostSmallImage' src='<?php echo $desktop[0] ?>'>
                            </picture>
                            <h3 class='OV-PostSmallText'><?php echo get_the_title(); ?></h3>
                        </div>
                </a>
                <?php } wp_reset_postdata(); ?>
            </div>
        </article>
        <aside>
            <div class='OV-SidebarOther'></div>
            <div class='OV-Sidebar'>
                <?php wp_reset_query(); ?>
                <?php //for use in the loop, list 2 post titles related to first tag on current post
                    $backup = $post;  // backup the current object
                    $tags = wp_get_post_tags($post->ID);
                    $tagIDs = array();
                    if ($tags) {
                        $tagcount = count($tags);
                        for ($i = 0; $i < $tagcount; $i++) {
                            $tagIDs[$i] = $tags[$i]->term_id;
                        }
                        $args=array(
                            'tag__in' => $tagIDs,
                            'post__not_in' => array($post->ID),
                            'showposts'=>2,
                            'caller_get_posts'=>1
                        );
                        $my_query = new WP_Query($args);
                        if( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '' ); ?>
                <?php $desktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '16/9-medium' ); ?>
                <?php $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '8/3-medium' ); ?>
                <?php $mobile = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size = '32/9-small' ); ?>
                <a href='<?php echo get_the_permalink(); ?>'>
                    <div class='OV-PostSmallSidebar img-background' >
                        <picture>
                            <source media="(max-width: 479px)" srcset='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' data-srcset='<?php echo $mobile[0] ?>'>
                            <source media="(min-width: 480px) and (max-width: 639px)" srcset='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' data-srcset='<?php echo $tablet[0] ?>'>
                            <source media="(min-width: 640px)" srcset='<?php echo $desktop[0] ?>'>
                            <img class='OV-PostSmallImage' src='<?php echo $thumb[0] ?>'>
                        </picture>
                        <h3 class='OV-PostSmallText'><?php echo get_the_title(); ?></h3>
                    </div>
                </a>
                 <?php endwhile;
                    } else { ?><!--Put Something Here-->
                <?php }
                }
                $post = $backup;  // copy it back
                wp_reset_query(); // to use the original query again
                ?>
            </div>
            <div class='OV-SidebarOther'></div>
        </aside>
    </main>
    <?php get_footer('post'); ?>
</body>