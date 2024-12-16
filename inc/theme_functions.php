<?php

// Customizer option

function dp_customizer_register($wp_customize){

    //Logo Customize Option

    /*$wp_customize->add_section('dp_header_area', array(
        'title' => __('Header_Area','solocoder'),
        'description' => 'If you want to change anything, you can do it here.'
    ));

    $wp_customize->add_setting('dp_logo', array(
       'default-image' => get_template_directory_uri() . '/img/advance-skin-care.png',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dp_logo', array(
        'label' => 'Logo Upload',
        'setting' => 'dp_logo',
        'section' => 'dp_header_area',
    )));
*/

    //Menu Area Customize

    $wp_customize->add_section('dp_menu_position',array(
        'title' => 'Menu Position Option', __('dp_menu_position','solocoder'),
        'description' => 'You can change the menu postion here'
    ));

    $wp_customize->add_setting('dp_menu_position',array(
        'default' => 'right-menu'
    ));

    $wp_customize->add_control('dp_menu_position',array(
        'label' => 'Menu Position',
        'setting' => 'dp_menu_position',
        'section' => 'dp_menu_position',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu'
        )
    ));


    //Footer Area Customization

    $wp_customize->add_section('dp_footer_area',array(
        'title' => 'Copyright Section',
        'description' => 'You can change your footer position here'
    ));

    $wp_customize->add_setting('dp_copyright_section', array(
        'default' => '&copy; Copyright 2024 | All rights reserved solocoder.'
    ));

    $wp_customize->add_control('dp_copyright_section',array(
        'label' => 'Copyright Section',
        'setting' => 'dp_copyright_section',
        'section' => 'dp_footer_area'
    ));


    //Theme Color 

    $wp_customize->add_section('theme_color',array(
        'title' => 'Theme Color',
        'description' => 'You can change the theme color here'
    ));

    $wp_customize->add_setting('dp_theme_color',array(
        'default' => '#fff'
    ));

    $wp_customize->add_control(new Wp_Customize_color_control($wp_customize,'dp_theme_color',array(
        'label' => 'Background Color',
        'setting' => 'dp_theme_color',
        'section' => 'theme_color'
    )));


  
    $wp_customize->add_setting('dp_primary_color',array(
        'default' => '#ea1a70'
    ));

    $wp_customize->add_control(new Wp_Customize_color_control($wp_customize,'dp_primary_color',array(
        'label' => 'Primary Color',
        'setting' => 'dp_primary_color',
        'section' => 'theme_color'
    )));
}

add_action('customize_register','dp_customizer_register');


function dp_theme_colors(){
    ?>
        <style>
                body{background:<?php echo esc_attr( $dp_theme_color ); ?>}
                :root{--pink:<?php echo esc_attr($dp_primary_color); ?>}
        </style>


    <?php
}


add_action('wp_head','dp_theme_colors');


// Load text domain for i18n

function dp_solocoder_load_textdomain(){
    load_theme_textdomain( 'solocoder', get_parent_theme_file_path('/assets/lang') );
}

add_action('after_setup_theme','dp_solocoder_load_textdomain');
?>


