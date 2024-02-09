<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?></title>
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/ourspace.css">
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
<nav class="py-2 bg-body-tertiary border-bottom">
  <div class="container d-flex flex-wrap">
    <ul class="nav me-auto">
      <!-- Search bar added here -->
      <div class="logo text-center">
        <li class="nav-item">
        <a href="<?php echo get_option('home'); ?>">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" alt="Logo">
          </a>
        </li>
      </div>
    </ul>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
                <li class="dropdown-item">Action</li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
                <li class="dropdown-item">Another action</li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
                <li class="dropdown-item">Something else here</li>
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
                <li class="dropdown-item">Action</li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
                <li class="dropdown-item">Another action</li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
                <li class="dropdown-item">Something else here</li>
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
          <div class="dropdown-menu pr-2" aria-labelledby="navbarDropdown">
            <ul>
                <li class="dropdown-item">Action</li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
                <li class="dropdown-item">Another action</li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
                <li class="dropdown-item">Something else here</li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link your-ideas" aria-current="page" href="<?php echo get_option('home'); ?>">Submit Your Ideas</a>
        </li>
      </ul>      
    </div>
  </div>
</nav>
  </div>
</nav> 


<?php $array = ["One specific aspect of mindfulness is awareness.","One specific aspect of mindfulness is awareness.","Mindfulness is a deceptively simple way of relating to all experience that can reduce suffering and set the stage for positive personal transformation.","We can talk about mindfulness or write at length about it, but to truly understand mindfulness, we have to experience it directly.","Mindfulness is the capacity to perceive our world clearly, without adulteration or manipulation.","We are all mindful to one degree or another, moment by moment. It is an inherent human capacity.","It is only when the mind is open and receptive that learning and seeing and change can occur."];?>

    <div class="jumbotron">
        <div class="container">
          <div class="row justify-content-center align-items-center">
              <div class="col-md-6">
                <h1 class="jumbotron-title mb-4"><? echo $array[array_rand($array, 1)]; ?></h1>
                <?php get_search_form(); ?>
              </div>
            </div>
        </div>
    </div>
