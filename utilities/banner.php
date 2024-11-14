<?php
  $pagename = str_replace('/','',str_replace(get_option('home'), '', get_pagenum_link()));
  $meditation = array("Meditation");
  $finance = array("Finances");
  $personal_fitness = array("Personal Fitness","Desk Exercises","Exercises","Workouts","Routes");
  $excluded_pages = get_option('excluded_pages', []);
  $title = get_the_title();

  if($pagename != "events") {

    if (!in_array(get_the_ID(), $excluded_pages)) {
  
    if(in_array($title,$personal_fitness)) { ?>

    <div class="banner alert disclaimer alert-dismissible fade show py-3 text-center mb-0" role="alert">
      <div class="container">
        <p class="mb-0">OurSpace is for educational and awareness purposes and is not a replacement for professional medical advice. If you have concerns about your health, please contact your GP or medical professional. You can find out more about this <a href="<?php echo get_option('home'); ?>/about">here</a></p>
        <button type="button" class="btn-close ms-3" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div> <?php } elseif(in_array($title,$meditation)) { ?> 

    <div class="banner alert disclaimer alert-dismissible fade show py-3 text-center mb-0" role="alert">
      <div class="container">
        <p class="mb-0">OurSpace is for educational and awareness purposes and is not a replacement for professional medical advice. If you have concerns about your health, please contact your GP or medical professional. You can find out more about this <a href="<?php echo get_option('home'); ?>/about">here</a></p>
        <button type="button" class="btn-close ms-3" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div> <?php } elseif(in_array($title,$finance)) { ?> 

    <div class="banner alert disclaimer alert-dismissible fade show py-3 text-center mb-0" role="alert">
      <div class="container">
        <p class="mb-0">OurSpace is for educational and awareness purposes and is not a replacement for professional medical advice. If you have concerns about your health, please contact your GP or medical professional. You can find out more about this <a href="<?php echo get_option('home'); ?>/about">here</a></p>
        <button type="button" class="btn-close ms-3" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div> <?php } else { ?>

    <div class="banner alert disclaimer alert-dismissible fade show py-3 text-center mb-0" role="alert">
      <div class="container">
        <p class="mb-0">OurSpace is for educational and awareness purposes and is not a replacement for professional medical advice. If you have concerns about your health, please contact your GP or medical professional. You can find out more about this <a href="<?php echo get_option('home'); ?>/about">here</a></p>
        <button type="button" class="btn-close ms-3" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div> 
<?php } } } ?>