<?php 

    /** 
     * Template Name: Mental Health Hub Template
     * 
     * 
    */

    get_header(); 

?>  

<div class="container">

<div class="row mb-2 mt-4">
  <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
</div>

<h2 class="mt-4"><?php the_title(); ?></h2>

<?php the_content(); ?>

<div class="row mt-2">
    <!-- First Card -->
    <div class="col-md-4 mb-4">
        <a class="custom-card-link" href="<?php echo get_option('home'); ?>/anxiety">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Anxiety</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/anxiety.png" class="card-img-top" alt="Image Alt">
            <div class="card-body">
              <p class="card-text">Anxiety is a natural response to stress or perceived threats, but when it becomes excessive or persistent, it can interfere with daily life and well-being. Individuals with anxiety may experience feelings of fear, worry, or apprehension that are disproportionate to the situation at hand. Physical symptoms such as increased heart rate, sweating, trembling, and difficulty breathing may also accompany anxiety.</p>
            </div>
          </div>
        </a>
      </div>

    <!-- Second Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/depression">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Depression</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/depression.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Depression is a serious mental health condition characterized by persistent feelings of sadness, hopelessness, and loss of interest or pleasure in activities once enjoyed. It can affect how a person thinks, feels, and functions on a daily basis, often leading to disruptions in sleep, appetite, and energy levels.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Third Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/adhd">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">ADHD</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/adhd.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">ADHD, or Attention-Deficit/Hyperactivity Disorder, is a neurodevelopmental condition characterized by persistent patterns of inattention, hyperactivity, and impulsivity that interfere with daily functioning and social interactions. Individuals with ADHD may struggle with maintaining focus, organizing tasks, managing time, and controlling impulsive behaviors.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Fourth Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/bipolar">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Bipolar</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/bipolar.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Bipolar disorder is a mental health condition characterized by extreme mood swings that include periods of mania (elevated mood, high energy) and depression (low mood, fatigue). These mood episodes can vary in duration and intensity, and individuals may experience periods of stability in between.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Fifth Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/autism">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Autism</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/autism.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Autism spectrum disorder (ASD) is a neurodevelopmental condition characterized by challenges in social communication and interaction, as well as restricted interests and repetitive behaviors. Symptoms of autism vary widely and can range from mild to severe, affecting individuals differently.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Sixth Card -->
    <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/ocd">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">OCD</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/ocd.png" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Obsessive-compulsive disorder (OCD) is a mental health condition characterized by intrusive, unwanted thoughts (obsessions) and repetitive behaviors or mental rituals (compulsions) performed in response to these thoughts. These obsessions and compulsions can significantly interfere with daily activities, relationships, and overall quality of life.</p>
        </div>
      </div>
    </a>
  </div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>