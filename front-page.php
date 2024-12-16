<?php

/*
Front Page

*/

?>

<?php get_header(); ?>

<!--section id="slider_area">
    <div class="container">
        <div class="row">
           


                <?php query_posts( 'post_type=slider&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post') );
                
                        if(have_posts()) :
                            while(have_posts()) : the_post();
                ?>
                    <div class="col-md-12">
                       
                        <div class="slider">
                            <div class="child_slider">
                                <?php echo the_post_thumbnail( 'slider'); ?>
                                    <h3><?php echo the_title('slider'); ?></h3>
                                <?php the_excerpt('slider'); 
                                
                                ?>
                                

                             </div>        
                        </div>

                        <?php      endwhile;
                                endif; ?>
                    
                    </div>

        </div>
    </div>
</section-->



<section id="cat_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="bxslider main-slider">
                   <div class="item">
                            <div class="banner">
                                <div class="row">
                                    <div class="col-md-7 first">
                                        <h3>29</h3>
                                    </div>
                                    <div class="col-md-5 sec">
                                 
                                        <h3>December<br>2024</h3>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            
                                <div class="col-md-6">
                                    <img src="<?php echo get_theme_file_uri('img/bike-and-run-yutz-2024-236x300.jpg.webp'); ?>" />
                                </div>
                                <div class="col-md-6">
                                    <div class="content">
                                        <h2>Run and bike Yutz</h2>
                                        <div class="content_icon">
                                        <i class="fa-solid fa-location-crosshairs"></i><span> Yutz, Yutz</span><br>
                                        </div>
                                        <button class="btn btn-danger redbtn">Read More</button>
                                    </div>
                                </div>
                        </div>
                  
                     </div>


                     <div class="item">
                             <div class="banner">
                                <div class="row">
                                    <div class="col-md-7 first">
                                        <h3>01</h3>
                                    </div>
                                    <div class="col-md-5 sec">
                                 
                                        <h3>February<br>2024</h3>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo get_theme_file_uri('img/AFFICHE-T-GIVREE-2025-V3-212x300.png.webp'); ?>" />
                                </div>
                                <div class="col-md-6">
                                    <div class="content">
                                        <h2>The Frozen T</h2>
                                        <div class="content_icon">
                                        <i class="fa-solid fa-location-crosshairs"></i><span> Villerupt</span><br>
                                        </div>
                                        <button class="btn btn-danger redbtn">Read More</button>
                                    </div>
                                </div>
                        </div>
                  
                     </div>


                     <div class="item">

                            <div class="banner">
                                <div class="row">
                                    <div class="col-md-7 first">
                                        <h3>15</h3>
                                    </div>
                                    <div class="col-md-5 sec">
                                 
                                        <h3>September<br>2024</h3>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo get_theme_file_uri('img/head-gotiming-279x300.jpg.webp'); ?>" />
                                </div>
                                <div class="col-md-6">
                                    <div class="content">
                                        <h2>THE STARRY </h2>
                                        <div class="content_icon">
                                        <i class="fa-solid fa-location-crosshairs"></i><span> St Michel center</span><br>
                                        </div>
                                        <button class="btn btn-danger redbtn">Read More <i class="fa-solid fa-arrow-right ricon"></i></button>
                                    </div>
                                </div>
                        </div>
                  
                     </div>

                  
            </div>
            </div>
        </div>
    </div>
</section>

<section id="service_area">
    <div class="container">
        <div class="row">

                <?php query_posts( 'post_type=services&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post') );
                
                        if(have_posts()) :
                            while(have_posts()) : the_post();
                ?>
                    <div class="col-md-4">
                        <div class="child_service">
                       <?php echo the_post_thumbnail( 'services'); ?>
                        <h3><?php echo the_title(); ?></h3>
                       <?php the_excerpt(); ?>
                        </div>
                    
                    </div>

                <?php 
                    endwhile;
                endif;
                ?> 
        </div>
    </div>
</section>



<?php get_footer(); ?>