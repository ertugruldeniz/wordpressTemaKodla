    <!-- Footer Start -->
                       <div class="col-md-12 page-body margin-top-50 footer">
                          <footer>
                          <?php 

                           wp_nav_menu( array(
                                'theme_location' => 'footer_menu',
                                'menu_class' => 'menu-link'
                            ) );

                           ?>
                            
                          <p>© Copyright 2016 DevBlog. All rights reserved</p>
						  
						  
						  <!-- UiPasta Credit Start -->
                          <div class="uipasta-credit"> Geliştirici: <a href="http://ertugruldeniz.com" target="_blank">Ertuğrul Deniz</a></div>
                          <!-- UiPasta Credit End -->

                           
                         </footer>
                       </div>
                       <!-- Footer End -->
                     
                     
                  </div>
                  <!-- Blog Post (Right Sidebar) End -->
                
            </div>
         </div>
      </div>
    
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/plugin.js"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/scripts.js"></script>

    <?php wp_footer(); ?>
    
   </body>
 </html>
