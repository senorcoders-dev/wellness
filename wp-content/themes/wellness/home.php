<?php get_header(); /* Template Name: Blog */ ?>
 <div class="main">
            <div class="section">
                <div class="row">
                  <div class="col-md-9">
                  <?php  $args = array(
                    'post_type'   => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 10,

                   );

                  $news = new WP_Query( $args );
                   if( $news->have_posts() ) :
                     while( $news->have_posts() ) :
                     $news->the_post();
                     ?>

                    <div class="blog-posts">
                        <?php if(get_the_post_thumbnail_url()): ?>
                        <div class="posts-image"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
                        <?php else: ?>
                        <div class="posts-image"><img src="http://placehold.it/800x400" alt=""></div>
                        <?php endif; ?>
                        <div class="post-information">
                            <h3><?php the_title(); ?></h3>
                            <div class="post-details">
                                <div class="post-items">
                                    <p>BY <strong><?php the_author(); ?></strong></p>
                                </div>
                                <div class="post-items">
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;<?php the_date(); ?></p>
                                </div>
                            </div>
                          <p><?php 
                            $string = get_the_content();
                            if (strlen($string) > 200) {
                            $string = substr($string, 0, 200) . "..."; 
                            echo strip_tags($string); } ?></p>                            
                        </div>
                        
                       <a href="<?php the_permalink(); ?>" class="btn btn-warning" role="button">READ MORE</a>
                        
                    </div>  
                    
                     <?php
                    endwhile;
                    wp_reset_postdata();
                     endif;
          ?>
                      
                 
                      
                      
                  </div>
                  <div class="col-md-3">
                     <?php get_sidebar('home'); ?>
                  </div>
                </div>

            </div>
        </div>
<?php get_footer(); ?>