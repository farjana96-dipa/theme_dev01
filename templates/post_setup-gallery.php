
<div class="container audiopage">
    <div class="row">
        <div class="col-md-6">
            <h2>This page is design for Gallery Post Format</h2>
            <img src="<?php echo get_theme_file_uri('../img/download (35).jpg'); ?>" alt="">
        </div>
        <div class="col-md-6">
            <form action="" class="form">
                <label for="name">Name : </label>
                <input type="text" placeholder="Enter your Name" class="form-control" id="name"><br><br>
                <label for="email">Email : </label>
                <input type="email" placeholder="Enter your Email" class="form-control" id="email"><br><br>
                <label for="pass">Password</label>
                <input type="password" placeholder="Enter your Password" class="form-control" id="pass"><br><br>
                <textarea name="" id="" placeholder="Enter your messages."></textarea>
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
