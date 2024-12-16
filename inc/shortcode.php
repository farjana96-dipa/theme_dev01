<?php
function dp_shortcode(){
    return "This is the first shortcode";
}

add_shortcode( 'text', 'dp_shortcode' );



function dp_btn_shortcode($atts,$content=null){
    $values = shortcode_atts(array('url' => '#'), $atts);
    return '<a class="shortcode_btn" href="'.esc_attr($values['url']).'">'.$content.'</a>';
}

add_shortcode( 'button', 'dp_btn_shortcode' );


// Custom Post Type Shortcode

function service_shortcode($atts){
    ob_start();
     $query = new WP_Query(array(
        'post_type' => 'services',
        'post_per_page' => 3,
        'order' => 'ASC',
        'order_by' => 'title'
     ) );

     if($query->have_posts()) { ?>


<section id="service_area">
    <div class="container">
        <div class="row">

               <?php while($query->have_posts()): $query->the_post(); ?>
                    <div class="col-md-4">
                        <div class="child_service">
                       <?php echo the_post_thumbnail( 'services'); ?>
                        <h3><?php echo the_title(); ?></h3>
                       <?php the_excerpt(); ?>
                        </div>
                    
                    </div>

                <?php 
                    endwhile;wp_reset_postdata();
                ?> 
                </div>
          </div>
     </div>
</section>

     <?php $myvar = ob_get_clean();
     return $myvar;
     }

}

add_shortcode( 'services', 'service_shortcode' );
?>