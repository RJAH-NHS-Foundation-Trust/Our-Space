<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website Title</title>
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/raindrop.css">
  <?php wp_head(); ?>
</head>
<body>
  <nav class="py-2 bg-body-tertiary border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">        
      </ul>
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Welcome Back, Rich</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>        
      </ul>
    </div>
  </nav> 
  <header>    
    <div class="container mb-3">
      <div class="logo text-center">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" alt="Logo">
      </div>
      <div class="site-info">
        <h2 class="site-subtitle text-center">Useful Resources to help you look after number one</h2>
      </div>
    </div>
  </header>

    <header class="d-flex justify-content-center py-3 border-top bg-body-tertiary">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="<?php echo get_option('home'); ?>" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Resources
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Useful Apps</a></li>
            <li><a class="dropdown-item" href="#">Recipies</a></li>
            <li><a class="dropdown-item" href="#">Walking Routes</a></li>
          </ul>
        </li>        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Getting Help
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Charities</a></li>
            <li><a class="dropdown-item" href="#">Self Help</a></li>
            <li><a class="dropdown-item" href="#">Something else...</a></li>
            <li><a class="dropdown-item" href="#">Something else...</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">Join Our Strava</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
      </ul>
    </header>