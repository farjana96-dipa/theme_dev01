
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">


    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bxslider@4.2.17/dist/jquery.bxslider.min.css"-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/bxslider@4.2.17/dist/jquery.bxslider.min.js"></script-->

    <script>
      $(document).ready(function(){
        $(".bxslider").bxSlider({
            auto: true,
            autoControls: true,
            stopAutoOnClick: true,
            pager: true
            
        });
      });
    </script>
   <?php wp_head(); ?>
</head>
<body <?php body_class();  ?> >
    <header id="header_area" class="<?php echo esc_html('dp_menu_position'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo">
                <?php if ( get_header_image() ) : ?>
                    <div id="site-header">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        </a>
                    </div>
                <?php endif; ?>
                </div>
                <div class="col-md-9 menu">
                    <?php wp_nav_menu( array('theme_location' => 'main_menu' , 'menu_id' => 'nav') ); ?>
                </div>
                
            </div>
        </div>
    </header>