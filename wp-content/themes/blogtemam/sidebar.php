<div class="col-md-3">
                   <div class="about-fixed">
                    
                     <div class="my-pic">
                        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/pic/my-pic.png" alt="Profil Fotosu"></a>
                        <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
                         <div id="menu" class="collapse">
                         
                            

                               <?php 
                            wp_nav_menu( array(
                                'theme_location' => 'header_menu',
                                'menu_class' => 'menu-link'
                            ) );

                                ?>
                        
                         </div>
                        </div>
                      
                      
                      
                      <div class="my-detail">
                    	
                        <div class="white-spacing">
                            <h1>Ertuğrul Deniz</h1>
                            <span>Web Developer</span>
                        </div> 
                       
                       <ul class="social-icon">
                         <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="#" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
                        </ul>

                    </div>
                  </div>
                </div>