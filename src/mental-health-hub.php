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
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
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
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
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
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
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
            <p class="card-text">A collection of affordable, easy to make recipes.</p>
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
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
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
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
        </div>
      </div>
    </a>
  </div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>