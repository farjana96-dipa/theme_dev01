<?php
if(have_posts()) : 
    while(have_posts()) : the_post();
?>
<div id="blog_area">

    <div class="post_thumb">
    <p><i class="fas fa-calendar-alt"></i><?php echo  the_time(' j F, Y'); ?><span> At </span><i class="fas fa-clock"></i><?php echo the_time(' G:i a'); ?></p>
            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post_thumb'); ?></a>
    </div>
    <div class="post_details">

      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      
      <?php the_excerpt(); ?>
      
    </div>

</div>

<?php  
endwhile;
else:
_('No posts found!!','solocoder');
endif;
?>
<div id="page_nav">
<?php  if('dp_page_nav') {dp_page_nav();} else {?>
        <?php echo next_posts_link(); ?>
        <?php echo previous_posts_link(); ?>
<?php } ?>
</div>