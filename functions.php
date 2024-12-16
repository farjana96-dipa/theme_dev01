<?php
//Default Theme Function

include_once('inc/default.php');


// Css and js file calling

include_once('inc/enqueue.php');


//theme customizer option

include_once('inc/theme_functions.php');


// Menu Register and walker nav menu

include_once('inc/register_menu.php');

// Widget Register
include_once('inc/widget_register.php');


//Comments Load
//Comment Form Fields
// Custom Post type

include_once('inc/custom.php');

// Shortcode

include_once('inc/shortcode.php');

//Login Enqueue

include_once('inc/login_enqueue.php');


//Add Theme Menu Page
include_once('inc/add_theme_option.php');


//Registering Patterns

include_once('patterns/hero.php');



?>




