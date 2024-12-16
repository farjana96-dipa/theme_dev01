<?php

function dp_login_enqueue(){
    wp_enqueue_style( 'login_enqueue', get_stylesheet_directory_uri(). '/css/login_enqueue.css', array(),'1.0.0','all' );
}


add_action( 'login_enqueue_scripts','dp_login_enqueue' );


function dp_login_logo(){
    ?>
    <style>
        body.login #login h1.wp-login-logo a{
            background-image: url(<?php echo get_template_directory_uri(). 'img/advance-skin-care.png'; ?>);
        }
    </style>
    <?php
}

add_action( 'login_enqueue_scripts', 'dp_login_logo');

function dp_login_url(){
    return home_url();
}

add_filter( 'login_headerurl', 'dp_login_url' );

?>