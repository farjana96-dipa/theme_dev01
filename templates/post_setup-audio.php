
<div class="container audiopage">
    <div class="row">
        <div class="col-md-6">
            <h2>This page is design for Audio Post Format</h2>
            <img src="<?php echo get_theme_file_uri('../img/download (35).jpg'); ?>" alt="">
        </div>
        <div class="col-md-6">
            <form action="" class="form">
                <input type="text" placeholder="Enter your Email">
                <button class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</div>



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
