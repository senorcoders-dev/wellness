<?php get_header(); the_post(); ?>

 <div class="main">
            <div class="section">
                <div class="row">
                  <div class="col-md-9">
                    <div class="blog-posts">
                        <div class="posts-image"><img src="http://placehold.it/800x400" alt=""></div>
                        <div class="post-information">
                            <div class="post-details">
                                <div class="post-items">
                                    <p>BY <strong><?php the_author(); ?></strong></p>
                                </div>
                                <div class="post-items">
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;<?php the_date(); ?></p>
                                </div>
                            </div>
                            <h1><?php the_title(); ?></h1>
                             <?php the_content(); ?>
                            
                       
                            
                            
                        </div>            
                    </div>
                      
                    <div class="post-tags">
                        <h2>Tags</h2>
                        <hr class="tags">
                      <?php  $tags = get_the_tags(the_ID()); ?>
                            <?php foreach($tags as $tag) :  ?>
                              <div class="tags-btn"><a href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>" class="btn btn-warning" role="button"><i class="fa fa-tag" aria-hidden="true"></i> &nbsp;<?php print_r($tag->name); ?></a></div>

                           <?php endforeach; ?>


                    </div>
                      
                  </div>
                  <div class="col-md-3">
                    <?php get_sidebar('home'); ?>
                  </div>
                </div>
                
                <div class="comments">
                <div id="disqus_thread"></div>
                    <script>

                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://quickdevs-1.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>

            </div>
        </div>
<?php get_footer(); ?>