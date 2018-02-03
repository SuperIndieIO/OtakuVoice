<?php
    
add_theme_support( 'post-thumbnails' );
add_image_size( 'post-xlarge', 1296, 0, false );
add_image_size( 'post-large', 960, 0, false );
add_image_size( 'post-medium', 640, 0, false );
add_image_size( 'post-small', 480, 0, false );
add_image_size( 'post-amp', 1280, 720, true );

add_image_size( '16/9-xlarge', 1296, 729, true );
add_image_size( '16/9-large', 960, 540, true );
add_image_size( '16/9-medium', 640, 360, true );
add_image_size( '16/9-small', 480, 270, true );

add_image_size( '8/3-xlarge', 1296, 486, true );
add_image_size( '8/3-large', 960, 360, true );
add_image_size( '8/3-medium', 640, 240, true );
add_image_size( '8/3-small', 480, 180, true );

add_image_size( '32/9-xlarge', 1280, 360, true );
add_image_size( '32/9-large', 960, 270, true );
add_image_size( '32/9-medium', 640, 180, true );
add_image_size( '32/9-small', 480, 135, true );

add_action('template_include','wp_archive');
function wp_archive( $template ){
    if( is_front_page() && is_paged() ){
        $template = locate_template(array('archive.php','index.php'));
        }
    return $template;
    }

function numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<nav class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></nav>' . "\n";

}

function my_new_contactmethods( $contactmethods ) {
    // Add Twitter
    $contactmethods['twitter'] = 'Twitter';
    // Add Facebook
    $contactmethods['facebook'] = 'Facebook';
    // Add Title
    $contactmethods['title'] = 'Title';

    return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);

?>