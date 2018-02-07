<?php get_header(); ?>



                     
                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	<div class="row">
                    		
                            
                            <div class="sub-title">
                           		<a href="index.html" title="Go to Home Page"><h2>Back Home</h2></a>
                                <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
                             </div>
                            
                            
                            <div class="col-md-12 content-page">
                              <div class="col-md-12 blog-post">

                              	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                                  <div class="post-image">


                                        <?php if (has_post_thumbnail()) { the_post_thumbnail('anasayfa',array('class'=>'makale-resim'));
                                         }
                                         else{
                                         ?>
                                         <img src="<?php bloginfo("template_url"); ?>/assets/images/blog/1.jpg" alt="Yazı Resmi">
                                         <?php } ?>


                                    </div> 
                            	
                            	
                                
                                <!-- Post Headline Start -->
                                <div class="post-title">
                                    <h1><?php the_title(); ?></h1> 
                                   </div>
                                   <!-- Post Headline End -->
                                    
                                    
                                <!-- Post Detail Start -->
                                <div class="post-info">
                                	<span>  Yazar : <a href="#" target="_blank"> <?php the_author();  ?></a>
                                        <?php echo " Kategori : "; the_category(','); ?> </span>  Tarih: <?php the_time( 'd F Y' ); ?>
                                   </div>
                                   <!-- Post Detail End -->
                                    
                                    
                                    <p>
                                    	
                                    	<?php the_content(); ?>

                                    </p>
                       
                                  
                                  <!-- Post Author Bio Box Start -->
                                  <div class="about-author margin-top-70 margin-bottom-50">
                                    
                                    <div class="picture">
                                      <img src="images/blog/author.png" class="img-responsive" alt="">
                                     </div>
                                   
                                    <div class="c-padding">
                                       <h3>Article By <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Visit Alex Website">Alex Parker</a></h3>
                                       <p>You can use about author box when someone guest post on your blog, Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ad minim veniam.</p>
                                      </div>
                                    </div>
                                    <!-- Post Author Bio Box End -->


                                    
                              <?php endwhile; else: ?>
                                <?php _e('Sonuç Bulunamadı.'); ?>
                                <?php endif; ?>


                                </div>    


                             </div>
                              
                         </div>
                         
                        
                        
                        <!-- Subscribe Form Start -->
                        <div class="col-md-8 col-md-offset-2">
                           <form id="mc-form" method="post" action="http://uipasta.us14.list-manage.com/subscribe/post?u=854825d502cdc101233c08a21&amp;id=86e84d44b7">
								
						  <div class="subscribe-form margin-top-20">
							 <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
							  <button class="submit-btn" type="submit">Submit</button>
								</div>
                                <p>Subscribe to my weekly newsletter</p>
								<label for="mc-email" class="mc-label"></label>
							  </form>
                             
                           </div>
                           <!-- Subscribe Form End -->
                           
                           
                         </div>


<?php get_footer(); ?>