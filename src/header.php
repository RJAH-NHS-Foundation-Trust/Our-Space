<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?></title>
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
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo get_option('home'); ?>/events">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo get_option('home'); ?>/mental-health-first-aiders">Mental Health First Aiders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo get_option('home'); ?>/staff-networks">Staff Networks</a>
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

$pagename = str_replace('/','',str_replace(get_option('home'), '', get_pagenum_link()));
$meditation = array("Meditation");
$finance = array("Finances");
$personal_fitness = array("Personal Fitness","Desk Exercises","Exercises","Workouts","Routes");
$titles_to_exclude = array("Discount Codes", "Mental Health First Aiders", "Events", "Staff Networks","Get In Touch","Groups","Pharmacy","Get Help Now","Gyms","Days Out","Suggest an edit");
$title = get_the_title();


//Used this because the title for the events page doesn't render the slug so get the page part from the URL 
if($pagename != "events") {

//If the page title is not in the titles to exclude we can use it 
if (!in_array($title, $titles_to_exclude)) { 

  //If the page title is not in the personal fitness array 
  if(in_array($title,$personal_fitness)) { ?>

    <div class="container disclaimer mt-4"> 
      <div class="row pt-2 pb-2 justify-content-center align-items-center text-center">
        <p class="my-0">The resources within this section are for guidance only, always work within your own ability, before starting any new exercises it is always worth checking in with your GP first.</a></p>
      </div>
    </div> <?php } elseif(in_array($title,$meditation)) { ?> 

    <div class="container disclaimer mt-4"> 
      <div class="row pt-2 pb-2 justify-content-center align-items-center text-center">
        <p class="my-0">The meditation resources provided are for guidance only, always make sure you are in a safe space before beginning any meditation and always listen to your own body.</p>
      </div>
    </div> <?php } elseif(in_array($title,$finance)) { ?> 

    <div class="container disclaimer mt-4"> 
      <div class="row pt-2 pb-2 justify-content-center align-items-center text-center">
        <p class="my-0">Our Space is for educational and awareness purposes and is not a replacement for proper financial advice. It is recommended you consult a financial advisor or your bank before making any large changes to your financial circumstances.</p>
      </div>
    </div> <?php } else { ?>

    <div class="container disclaimer mt-4"> 
      <div class="row pt-2 pb-2 justify-content-center align-items-center text-center">
        <p class="my-0">Our Space is for educational and awareness purposes and is not a replacement for professional medical advice. If you have concerns about your health, please contact your GP or medical professional. You can find out more about this <a href="<?php echo get_option('home'); ?>/about">here</a></p>
      </div>
    </div>
    
<?php }
} }?>