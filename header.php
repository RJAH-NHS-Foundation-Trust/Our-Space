<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/ourspace.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/events.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo('template_directory'); ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo('template_directory'); ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo('template_directory'); ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_bloginfo('template_directory'); ?>/site.webmanifest">
  <?php wp_head(); ?>
</head>
<body>

<?php
  include(get_template_directory() . '/utilities/banner.php');
  $excluded_search_pages = get_option('excluded_search_pages', []);
?>

<nav class="py-2 bg-body-tertiary border-bottom">
  <div class="container d-flex flex-wrap">
    <div class="logo text-center">
    <ul class="nav me-auto">
        <li class="nav-item">
          <a href="<?php echo get_option('home'); ?>">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.webp" alt="OurSpace Logo">
          </a>
        </li>
      </ul>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo get_option('home'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo get_option('home'); ?>/events">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo get_option('home'); ?>/mental-health-first-aiders">Mental Health First Aiders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo get_option('home'); ?>/staff-networks">Staff Networks</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="supportDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Support
          </a>
          <ul class="dropdown-menu" aria-labelledby="supportDropdown">
            <li><a class="dropdown-item" aria-current="page" href="<?php echo get_option('home'); ?>/support">Support Links</a></li>           
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo get_option('home'); ?>/contact">Get In Touch</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link crisis-help" aria-current="page" href="<?php echo get_option('home'); ?>/crisis">Crisis Help</a>
        </li>
      </ul>      
    </div>
  </div>
</nav>
</div>
</nav> 

<?php  

if (!in_array(get_the_ID(), $excluded_search_pages)) { ?>
  <div class="jumbotron">
      <div class="overlay"></div>
      <div class="container">
          <div class="row justify-content-center align-items-center">
              <div class="col-md-6">
                  <h1 class="jumbotron-title mb-4">Search OurSpace</h1>
                  <?php get_search_form(); ?>
              </div>
          </div>
      </div>
  </div>

  <?php
    include(get_template_directory() . '/utilities/breadcrumb.php');
  ?>

  <?php } ?>