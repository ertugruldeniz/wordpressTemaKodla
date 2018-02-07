
<?php 
// Header Çağırma:
get_header(); 

?>

 
                
                
                
                 
                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	<div class="row">
                    		
                            
                            <div class="sub-title">
                           		<h2>Blog Yazılarım</h2>
                                <a href="contact.html"><i class="icon-envelope"></i></a>
                             </div>
                            
                            
                            <div class="col-md-12 content-page">
                         
                                

                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                <!-- Blog Post Start -->
                                <div class="col-md-12 blog-post">
                                	<div class="post-image">


                                        <?php if (has_post_thumbnail()) { the_post_thumbnail('anasayfa',array('class'=>'makale-resim'));
                                         }
                                         else{
                                         ?>
                                         <img src="<?php bloginfo("template_url"); ?>/assets/images/blog/1.jpg" alt="Yazı Resmi">
                                         <?php } ?>


                                    </div> 
                                    <div class="post-title">
                                      <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                                    </div>  
                                    <div class="post-info">
                                    	<span>  Yazar : <a href="#" target="_blank"> <?php the_author();  ?></a>
                                        <?php echo " Kategori : "; the_category(','); ?> </span>  Tarih: <?php the_time( 'd F Y' ); ?>
                                    </div>  
                                    <p><?php the_excerpt(); ?></p>                          			
                                    <a href="<?php the_permalink(); ?>" class="button button-style button-anim fa fa-long-arrow-right"><span> Devamını Gör</span></a>
                                </div>
                                <!-- Blog Post End -->
                                


                                <?php endwhile; else: ?>
                                <?php _e('Sonuç Bulunamadı.'); ?>
                                <?php endif; ?>

                                

                                <?php sayfalama(); ?>
                                
                                <!-- <div class="col-md-12 text-center">
                                 <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
                                 <div id="post-end-message"></div>
                                </div> -->
                                
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
                     
                     
<!-- FOOTER ÇAĞIRMA -->
<?php get_footer(); ?>