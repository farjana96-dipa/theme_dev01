

<?php
    get_header();
?>

    <section id="body_area">
        <div class="container">
            <div class="row">
                    <div class="col-md-9">
                    <span class="dashicons dashicons-format-<?php echo get_post_format($post->ID) ; ?> dashIcon" ></span>
                    <?php get_template_part( 'templates/post_setup', get_post_format()); ?>

                            <div id="commment_area">
                                <?php if(comments_open()) : ?>
                                    <?php  comments_template(); ?>
                                    <?php endif; ?>
                                    
                            </div>

                    </div>
                    <div class="col-md-3">
                        <?php get_sidebar(); ?>
                    </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>



