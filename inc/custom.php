<?php
    function custom_post(){
        register_post_type( 'services', array(
            'labels' => array(
                'name' => ('All Services'),
                'singular_name' => ('Service'),
                'add_new' => ('Add New Service'),
                'add_new_item' => ('Add New Service'),
                'edit_item' => ('Edit Service'),
                'new_item' => ('New Service'),
                'view_item' => ('View Service'),
                'not_found' => ('Sorry we can not find the service that you are looking for.')
            ),
            'menu_icon' => 'dashicons-networking',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'taxonomies' => array('category'),
            'rewrite' => array('slug' => 'service'),
            'supports' => array('title','thumbnail','editor','excerpt'),

        ) );
    }

    add_action('init','custom_post');



    //Custom Slider

    function custom_slider(){
        register_post_type( 'slider', array(
            'labels' => array(
                'name' => ('All Sliders'),
                'singular_name' => ('Slider'),
                'add_new' => ('Add New Slider'),
                'add_new_item' => ('Add New Slider'),
                'edit_item' => ('Edit Slider'),
                'new_item' => ('New Slider'),
                'view_item' => ('View Slider'),
                'not_found' => ('Sorry we can not find the service that you are looking for.')
            ),
            'menu_icon' => 'dashicons-format-gallery',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slug' => 'slider'),
            'supports' => array('title','thumbnail','editor','excerpt'),

        ) );
    }

    add_action('init','custom_slider');


    function custom_query_post($query){
       
        if(is_category()) {
            $post_type = get_query_var('post_type');
            if($post_type){
                $post_type = $post_type;
            }
            else{
                $post_type = array('post','services');
                $query->set('post_type',$post_type);
                return $query;
            }
        }
    }

    add_filter('pre_get_posts','custom_query_post');
?>