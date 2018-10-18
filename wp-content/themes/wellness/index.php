<?php get_header(); ?>

 <div class="main">
            <div class="section">
                <div class="row">
                  <div class="col-md-12">
                        <div class="about-info">
                        <?php
                                    while ( have_posts() ) :
                                        the_post();

                                      the_content(); 


                                    endwhile; // End of the loop.
                                    ?>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
<?php get_footer(); ?>