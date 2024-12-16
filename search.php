<?php
get_header();

?>


   

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                   
                    <div id="search_title">
                        <h2 class="archive_title"><?php printf(__('Search Result For : %s','solocoder'), get_search_query()); ?></h2>
                         <?php get_search_form(); ?>
                    </div>

                   <?php get_template_part( 'templates/blog_setup'); ?>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

   <?php get_footer(); ?>