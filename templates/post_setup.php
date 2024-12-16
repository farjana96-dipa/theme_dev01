<?php
if(have_posts()) : 
    while(have_posts()) : the_post();
?>

    <div class="post_thumb">
            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post_thumb'); ?></a>
    </div>
    <div class="post_details">

      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_content(); ?>
      
    </div>



<?php  
endwhile;
else :
  _e('No Posts Found!!','solocoder');
endif;
?>
