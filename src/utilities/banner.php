<?php
  $pagename = str_replace('/','',str_replace(get_option('home'), '', get_pagenum_link()));
  $meditation = array("Meditation");
  $finance = array("Finances");
  $personal_fitness = array("Personal Fitness","Desk Exercises","Exercises","Workouts","Routes");
  $titles_to_exclude = array("Reasonable Adjustments For Autistic Employees","International Mens Day","World Mental Health Day 2024","Mental Health First Aid Supervision","Neuro Friends","Body Doubling","Fun Run","Therapy Dogs Nationwide","Discount Codes", "Mental Health First Aiders", "Parents", "Events", "Staff Networks","Get In Touch","Groups","Pharmacy","Get Help Now","Gyms","Days Out","Suggest an edit");
  $no_search = array("Mental Health First Aid Supervision","Neuro Friends","Fun Run","Therapy Dogs Nationwide","Body Doubling");
  $title = get_the_title();

  if($pagename != "events") {

    if (!in_array(trim(strtolower($title)), array_map('strtolower', $titles_to_exclude))) {
  
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