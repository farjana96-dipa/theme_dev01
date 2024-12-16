<?php

function dp_widget_register(){
    register_sidebar( array(
        'name' => __('Main Widget Area', 'solocoder'),
        'id' => 'widget01',
        'description' => __('You can add new widgets here', 'solocoder'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ) );


    //Footer Widget Area
    register_sidebar( array(
        'name' => __('Footer - 01', 'solocoder'),
        'id' => 'footer01',
        'description' => __('You can add new widgets here', 'solocoder'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ) );

    register_sidebar( array(
        'name' => __('Footer - 02', 'solocoder'),
        'id' => 'footer02',
        'description' => __('You can add new widgets here', 'solocoder'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ) );

    register_sidebar( array(
        'name' => __('Footer - 02', 'solocoder'),
        'id' => 'footer03',
        'description' => __('You can add new widgets here', 'solocoder'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ) );


    register_sidebar( array(
        'name' => __('Category Post','solocoder'),
        'id' => 'cat',
        'descriptioni' => __('You can add your custom post category here.','solocoder'),
        'before_widget' => '<div class="child_cat">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ) );

}

add_action('widgets_init','dp_widget_register');

?>