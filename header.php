<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?></title>
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/raindrop.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
    
  <?php wp_head(); ?>
</head>
<body>
<nav class="py-2 bg-body-tertiary border-bottom">
  <div class="container d-flex flex-wrap">
    <ul class="nav me-auto">
      <!-- Search bar added here -->
      <li class="nav-item">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </li>
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
        <a href="<?php echo get_option('home'); ?>">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" alt="Logo">
        </a>
      </div>
      <div class="site-info">
        <h2 class="site-subtitle text-center"><?php echo get_bloginfo( 'description' ); ?></h2>
      </div>
    </div>
  </header>

<header class="d-flex justify-content-center py-3 border-top border-bottom bg-body-tertiary">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
        </div>
        </li>
      </ul>      
    </div>
  </div>
</nav>
</header>
