<?php get_header('page'); ?>
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
            <h1 id='OV-PostHeadline' itemprop='headline'><?php echo get_the_title(); ?></h1>
            <!--Load Content-->
            <?php the_content(); ?>
        </article>
    </main>
    <?php get_footer('page'); ?>
</body>