<!DOCTYPE html>
<html lang="en">

  <head>
    <?php wp_head(); ?>
    <!-- Meta Tag -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="<?php bloginfo( 'description' );; ?>">
    <meta name="author" content="<?php bloginfo( 'author' ); ?>">
    <meta name="url" content="<?php bloginfo( 'url' ); ?>">
    <meta name="copyright" content="Deniz Bilişim">
    <meta name="robots" content="index,follow">
    
    
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

  </head>


  <body>

    
     
     <!-- Preloader Start -->
     <div class="preloader">
       <div class="rounder"></div>
      </div>
      <!-- Preloader End -->
      
      
    
    
    <div id="main">
        <div class="container">
            <div class="row">
                
               
                 
                 <!-- About Me (Left Sidebar) Start -->


                    <!-- Sidebar ÇAĞIRMA -->
                    <?php  get_sidebar(); ?>
                 
                <!-- About Me (Left Sidebar) End -->
                