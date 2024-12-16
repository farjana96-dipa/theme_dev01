<?php
get_header();

?>
    

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="error_page">
                        <h3 class="error_title">404 Error - Page Not Found!!</h3>
                        <p>Opps! Looks like something is wrong.</p>

                        <div id="error_search">
                        <?php get_search_form(); ?>
                        </div>

                        <a href="<?php echo home_url(); ?>" class="hurl">Back to Home Page</a>
                    </div>
                   

                   
                </div>
            </div>
        </div>
    </section>

   <?php get_footer(); ?>


