<div class="right-sidebar">
                        <div class="categories-container">
                            <h4>Categories</h4>
                            <hr class="sidebar">
                            <div class="categories-box">
                                <ul class="list-group">
                                  <?php $categories = get_categories( array(
                                          'orderby' => 'name'
                                      ) );

                                      foreach ( $categories as $category ) { ?>
                                          
                                   <li class="list-group-item">
                                     <span class="badge">( <?php echo esc_html( $category->count ) ?>)</span>
                                   <a href="<?php esc_url( get_category_link( $category->term_id ) ) ?>">
                                    <?php echo esc_html( $category->name ) ?>
                                     </a> 
                                    </li>
                                     <?php } ?>
                                   
                                   
                                </ul>
                            </div>
                            </div>
                       <div class="related-post">
                           <h3>TOP POSTS</h3>
                           <hr class="sidebar">
                         <?php  $args = array(
                              'post_type'   => 'post',
                              'post_status' => 'publish',
                              'posts_per_page' => 5,

                             );

                            $news = new WP_Query( $args );
                             if( $news->have_posts() ) :
                               while( $news->have_posts() ) :
                               $news->the_post();
                               ?>
                         <div class="media">
                             <div class="media-left">
                               <a href="<?php the_permalink(); ?>">
                                 <?php if(get_the_post_thumbnail()): ?>
                                    <img class="media-object" src="<?php the_post_thumbnail_url() ?>" alt="...">

                                 <?php else: ?>
                                 <img class="media-object" src="http://placehold.it/80x80" alt="...">
                                 <?php endif; ?>
                               </a>
                             </div>
                             <div class="media-body">
                               <h5 class="media-heading"><?php the_title(); ?></h5>
                               <p><i class="fa fa-comments" aria-hidden="true"></i> &nbsp;  <?php comments_number( 'no comments', '1 comment', '% comments' ); ?>.</p>
                             </div>
                           </div>
                           <hr>
                            <?php
                              endwhile;
                              wp_reset_postdata();
                               endif;
                            ?>
                           
                           
                         
                       </div>
                    </div>