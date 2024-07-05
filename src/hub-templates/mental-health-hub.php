<?php 

    /** 
     * Template Name: Mental Health Hub Template
     * 
     * 
    */

    get_header(); 

?>  

<div class="container">

<h2 class="mt-4"><?php the_title(); ?></h2>

<?php the_content(); ?>

<div class="row mt-2">
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/anxiety">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Anxiety</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/anxiety.webp" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Anxiety is a natural response to stress or perceived threats, but when it becomes excessive or persistent, it can interfere with daily life and well-being. Individuals with anxiety may experience feelings of fear, worry, or apprehension that are disproportionate to the situation at hand. Physical symptoms such as increased heart rate, sweating, trembling, and difficulty breathing may also accompany anxiety.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/depression">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Depression</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/depression.webp" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Depression is a serious mental health condition characterized by persistent feelings of sadness, hopelessness, and loss of interest or pleasure in activities once enjoyed. It can affect how a person thinks, feels, and functions on a daily basis, often leading to disruptions in sleep, appetite, and energy levels.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/counselling">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Counselling</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/counselling.webp" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Care First provide RJAH staff with access to free in person or telephone counselling</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/bipolar">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Bipolar</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/bipolar.webp" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Bipolar disorder is a mental health condition characterized by extreme mood swings that include periods of mania (elevated mood, high energy) and depression (low mood, fatigue). These mood episodes can vary in duration and intensity, and individuals may experience periods of stability in between.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/ocd">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">OCD</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/ocd.webp" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Obsessive-compulsive disorder (OCD) is a mental health condition characterized by intrusive, unwanted thoughts (obsessions) and repetitive behaviors or mental rituals (compulsions) performed in response to these thoughts. These obsessions and compulsions can significantly interfere with daily activities, relationships, and overall quality of life.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/adhd">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">ADHD</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/adhd.webp" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">ADHD, or Attention-Deficit/Hyperactivity Disorder, is a neurodevelopmental condition characterized by persistent patterns of inattention, hyperactivity, and impulsivity that interfere with daily functioning and social interactions. Individuals with ADHD may struggle with maintaining focus, organizing tasks, managing time, and controlling impulsive behaviors.</p>
        </div>
      </div>
    </a>
  </div> 
  <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/shropshire-telford-and-wrekin-staff-wellbeing-hub">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Shropshire, Telford and Wrekin Staff Wellbeing Hub</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/wellbeing.webp" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Shropshire, Telford and Wrekin Staff Wellbeing Hub is available for NHS and Social Care staff who work in Shropshire, Telford and Wrekin. They are highly confidential and don’t routinely contact your workplace or GP and clients can self-refer.</p>
        </div>
      </div>
    </a>
  </div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>