<footer id="footer_area">
<div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'footer01' ); ?>
                </div>
                <div class="col-md-4">
                <?php dynamic_sidebar( 'footer02' ); ?>
                </div>
                <div class="col-md-4">
                <?php dynamic_sidebar( 'footer03' ); ?>
                </div>
                
            </div>
</div>
    <section id="copyright_area">
       
            <div class="row">
                <div class="col-md-12">
                <div class="copyright_area">
                    <p><?php echo esc_html('dp_copyright_section'); ?></p>
                </div>
                </div>
            </div>
        </div>
    </section>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous">
</script>
 

<?php wp_footer(); ?>
</body>
</html>