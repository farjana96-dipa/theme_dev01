<?php
/*
My theme default functions
*/
add_theme_support('title');


$header_info = array(
	'width' => '250px',
    'height' => '80px',
	'default-image' => get_template_directory_uri() . '/img/download__35_-removebg-preview.png'
);
add_theme_support( 'custom-header', $header_info );

$header_images = array(
	'sunset' => array(
		'url'           => get_template_directory_uri() . '/img/download__35_-removebg-preview.png',
		'thumbnail_url' => get_template_directory_uri() . '/img/download__35_-removebg-preview.png',
		'description'   => 'WordPress Logo',
	),
	'flower' => array(
		'url'           => get_template_directory_uri() . '/img/advance-skin-care.png',
		'thumbnail_url' => get_template_directory_uri() . '/img/advance-skin-care.png',
		'description'   => 'Skin Care',
	),
);
register_default_headers( $header_images );

//Post thumbnail

add_theme_support('post-thumbnails', array('page','post','services','slider') );
add_image_size('post_thumb',970,350,true);
//add_image_size('services',600,200,true);

add_theme_support( 'post-formats',array('aside','gallery','audio','video') );
//Add more button

function dp_read_more($more){
    global $post;
    if(is_object($post)){
        return '<br><br><a href="'.get_permalink($post->ID).'" class="redmore">' . 'Read More...' . '</a>';
    }
    return $more;
   
}

add_filter( 'excerpt_more','dp_read_more');


function dp_excerpt_len($len){
    return 10;
}

add_filter( 'excerpt_length', 'dp_excerpt_len',999 );


// Pagination

function dp_page_nav(){
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if(! $current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999999,'%#%',get_pagenum_link(999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if($max > 1){
        echo '</pre>
            <div class="wp_pagenav">';
              if($total==1 && $max>1) echo $pages . paginate_links( $args );
              if($max > 1) echo  '</div> <pre>';
    } 
}


//Dashicon not showing fixing

function dp_dashicons_load_issue(){
    wp_enqueue_style('dashicons');
}

add_action( 'wp_enqueue_scripts', 'dp_dashicons_load_issue');


?>