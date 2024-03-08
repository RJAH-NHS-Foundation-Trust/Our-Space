<?php 

    /** 
     * Template Name: Personal Fitness Hub Template
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

<div class="row mt-2 mb-2 mt-2" style="align-items: flex-start;">
  <div class="col-md-6">
      <div class="section">
        <div class="card playlist-card">
          <div class="card-body d-flex align-items-center">
            <!-- Font Awesome icon on the left -->
            <i class="fas fa-shoe-prints fa-2x" style="margin-right: 0.75rem;"></i>
            <div>
              <p class="card-text">Join Our Strava Group. So far our members have walked 2,8482 steps.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="section">
        <div class="card fitness-card">
          <div class="card-body d-flex align-items-center">
            <!-- Font Awesome icon on the left -->
            <i class="fas fa-shoe-prints fa-2x" style="margin-right: 0.75rem;"></i>
            <div>
              <p class="card-text">Join Our <a href="https://www.strava.com/clubs/ourspace" target="_blank">Strava</a> Group. So far our members have walked 2,8482 steps.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="row mt-2">
    <!-- First Card -->
    <div class="col-md-4 mb-4">
        <a class="custom-card-link" href="<?php echo get_option('home'); ?>/anxiety">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Desk Exercises</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image.jpg" class="card-img-top" alt="Image Alt">
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
          <span class="custom-pill">Workouts</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/depression.jpg" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Third Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/exercise-routes">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Walking Routes</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/disability.jpg" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Fourth Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/gyms">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Local Gyms</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/recipe.jpg" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">A collection of affordable, easy to make recipes.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Fifth Card -->
    <!-- <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/meditation">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Mindfulness</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image-2.jpeg" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
          </div>
        </div>
      </a>
    </div> -->

    <!-- Sixth Card -->
    <!-- <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/personal-health">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Personal Health</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image-3.jpg" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
        </div>
      </div>
    </a>
  </div> -->
</div>
</div>
</div>
</div>

<?php get_footer(); ?>