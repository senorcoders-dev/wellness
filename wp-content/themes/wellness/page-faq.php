<?php get_header(); /* Template Name: FAQ */?>
  <div class="main">
            <div class="section">
                <div class="row">
                  <div class="col-md-8">
                    <div class="faq-container">
                        <h3>Frequently Asked Questions</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                      </div>
                    <?php

                      // check if the repeater field has rows of data
                      if( have_rows('faqs') ):

                        // loop through the rows of data
                          while ( have_rows('faqs') ) : the_row(); ?>
                        <button class="accordion"><strong>Q</strong>&nbsp; <?php the_sub_field('question'); ?></button>
                          <div class="panel">
                              <?php the_sub_field('answer'); ?>
                          </div>

                       <?php   endwhile;

                      else :

                          // no rows found

                      endif;

                      ?>
                      
                    
                  </div>
                  <div class="col-md-4">
                    <div class="support-block">
                        <h3><i class="fa fa-life-ring" aria-hidden="true"></i> Need Help?</h3>
                        <hr>
                        <p class="help">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                        <h3>Contact us for support</h3>
                        <hr>

                        <div class="help-span">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;support@wellness.com</p>
                            <p><i class="fa fa-phone-square" aria-hidden="true"></i> &nbsp;+617.479.0500 </p>

                        </div>  
                    </div>
                  </div>
                </div>
            </div> 
        </div>
        
        
<?php get_footer(); ?>