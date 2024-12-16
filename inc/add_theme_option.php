<?php


function dp_theme_page(){
   add_menu_page( 'Theme Admin Page', 'Theme Options', 'manage_options', 'dp_theme_option', 'dp_theme_admin_menu', 'dashicons-admin-settings', 101 );
}

add_action( 'admin_menu', 'dp_theme_page' );

function dp_theme_admin_menu(){
    echo "<h1>Theme OPtions</h1>";
}