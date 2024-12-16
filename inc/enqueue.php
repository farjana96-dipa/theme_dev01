<?php

//Google fonts

function dp_google_fonts()
{
    wp_enqueue_style( 'dp_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap', false);
}

add_action( 'wp_enqueue_scripts', 'dp_google_fonts');

//Theme css and jquery file calling

function dp_css_js_file_calling(){
    //main style css file
    wp_enqueue_style( 'dp_style', get_stylesheet_uri() );
    //bootstrap file
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');

     //BxSlider CSS File
     wp_register_style('jquery.bxslider.min',get_template_directory_uri().'/css/jquery.bxslider.min.css', array(), '4.2.17', 'all');

    // wp_register_style('owl.carousel.min',get_template_directory_uri().'/css/owl.carousel.min.css',array(),'2.3.4','all');
     //owl carousel
     //wp_register_style( 'owl.theme.default.min',get_template_directory_uri().'/css/owl.theme.default.min.css', array(),'2.3.4','all' );

   
     //custom css file
     wp_register_style('custom',get_template_directory_uri().'/css/custom.css', array(), '3.0.0');



    wp_enqueue_style('bootstrap');
    wp_enqueue_style('jquery.bxslider.min');
   // wp_enqueue_style('owl.carousel.min');
    //wp_enqueue_style( 'owl.theme.default.min');
   
    wp_enqueue_style('custom');

    //jquery calling
    //wp_enqueue_script('jquery');
   // wp_enqueue_script( 'jquery-3.1.1.min', get_template_directory_uri().'.js/jquery-3.1.1.min.js', array(), '3.1.1' );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2','true');

   
    wp_enqueue_script('jquery.bxslider.min', get_template_directory_uri().'/js/jquery.bxslider.min.js', array(), '4.2.17','true');

    
    //wp_enqueue_script('owl.carousel.min',get_template_directory_uri().'/js/owl.carousel.min.js',array(),'2.3.4','true');

    wp_enqueue_script('main', get_template_directory_uri().'js/main.js/', array(), '3.7.1', 'true');
    
}




add_action('wp_enqueue_scripts','dp_css_js_file_calling');

?>

