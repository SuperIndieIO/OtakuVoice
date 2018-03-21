<?php ?>
<!DOCTYPE html>

<head>
    
    <!--Styles-->
    <link rel="stylesheet"  type="text/css" href='<?php echo get_template_directory_uri(); ?>/style-post.css?r=<?php echo time(); ?>'/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.ico" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Open+Sans|Roboto:400, 900" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'/>   
    <meta name='theme-color' content='#E5E5F2' />
    
    <!--Meta Info-->
    <?php the_post(); ?><!--Gather Post Excerpt Information for Meta Tags-->  
    <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-large' ); ?> 
    <title><?php echo get_the_title(); ?> | Otaku Voice</title>
    <meta name='title' content='<?php echo get_the_title(); ?>'>
    <meta name='description' content='<?php echo(get_the_excerpt()); ?>'>
    <meta name='section' content='<?php $postcats = get_the_category(); if ($postcats) { foreach($postcats as $cat) { echo $cat->name . ", "; } } ?>'>
    <meta name='keywords' content='<?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name . ', '; } } ?>'>
    <meta name='language' content='english'>
    
    <!--Temporary AMP Support Removal-->
    <!--<link rel="amphtml" href='amp/'>-->
    
    <!--Facebook Meta Info-->
	<meta property='og:type' content='article'/>
	<meta property='og:title' content='<?php echo get_the_title(); ?>'/>
	<meta property='og:url' content='<?php echo get_the_permalink(); ?>'/>
	<meta property='og:image' content='<?php echo $thumb[0] ?>'/>
	<meta property='og:description' content='<?php get_the_excerpt(); ?>'/>

    <!--Twitter Meta Info-->
	<meta name='twitter:card' content='summary_large_image'>
	<meta name='twitter:url' content='<?php echo get_the_permalink(); ?>'>
	<meta name='twitter:title' content='<?php echo get_the_title(); ?>'>
	<meta name='twitter:image' content='<?php echo $thumb[0] ?>'>
	<meta name='twitter:description' content='<?php echo strip_tags(get_the_excerpt($post->ID)); ?>'>
    
    <!--Adsense Code-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>