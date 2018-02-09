<?php get_header('page'); ?>
<body>
    <!--Header logo for OtakuVoice-->
    <header>
        <a style='text-decoration: none;' href='<?php echo esc_url( home_url( '/' ) ); ?>'>
            <!--<img id='OV-LogoLarge' src='<?php echo get_template_directory_uri(); ?>/img/OtakuVoice-Large.jpg' />-->
            <!--<img id='OV-LogoSmall' src='<?php echo get_template_directory_uri(); ?>/img/OtakuVoice-Small.jpg' />-->
            <h1 style='margin: 16px auto; text-decoration: none; text-align: center; font-family: "Roboto:900", sans-serif; font-size: 3em;'>Otaku Voice</h1>
        </a>
    </header>
    <main>
        <!--Wordpress Loop Code-->
        <?php $post = get_the_ID(); ?>   
        <?php $primary = $post; ?>
        <?php $xdesktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-xlarge' ); ?>
        <?php $sdesktop = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-large' ); ?>
        <?php $tablet = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-medium' ); ?>
        <?php $small = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-small' ); ?>
        <article id='OV-PostBody'>
            <h1 id='OV-PostHeadline' itemprop='headline'><?php echo get_the_title(); ?></h1>
            <!--Load Content-->
            <?php the_content(); ?>
        </article>
    </main>
    <?php get_footer('post'); ?>
</body>