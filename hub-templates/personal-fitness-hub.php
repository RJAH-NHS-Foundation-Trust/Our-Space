<?php 

    /** 
     * Template Name: Personal Fitness Hub Template
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
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/desk-exercises">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Desk Exercises</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/desk-workout.webp" class="card-img-top" alt="Desk Exercises">
          <div class="card-body">
            <p class="card-text">Desk exercises offer a convenient way to incorporate physical activity into a sedentary workday, promoting better health and productivity. Simple exercises such as seated leg lifts, chair squats, and desk stretches can help improve circulation, reduce muscle tension, and alleviate stiffness commonly associated with prolonged sitting.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/exercises">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Exercises</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/exercise.webp" class="card-img-top" alt="Exercises">
          <div class="card-body">
            <p class="card-text">Find a selection of exercises that fit your ability, use these exercises to build your own workout routine.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/workouts">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Workouts</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/workouts.webp" class="card-img-top" alt="Workouts">
          <div class="card-body">
            <p class="card-text">Working out is an essential component of a healthy lifestyle, offering numerous physical and mental benefits. Regular exercise helps maintain a healthy weight, strengthen muscles, and improve cardiovascular health.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/exercise-routes">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Exercise Routes</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/walking-routes.webp" class="card-img-top" alt="Exercise Routes">
          <div class="card-body">
            <p class="card-text">We have put together a collection of local routes, from short walks to long hikes and everything inbetween, there are even routes to do on your lunch break.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/gyms">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Local Gyms</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/local-gym.webp" class="card-img-top" alt="Gyms">
          <div class="card-body">
            <p class="card-text">Here you can find a directory of local gyms with information on opening times, prices and discounts.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/cycle-to-work-scheme">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Cycle to Work Scheme</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/cycle-to-work.webp" class="card-img-top" alt="Cycle to Work Scheme">
          <div class="card-body">
            <p class="card-text">The Cycle to Work scheme is a government supported initiative to promote greener journeys and reduce environmental pollution, and enables those who wish to cycle to work access to a tax free benefit.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="https://www.strava.com/clubs/ourspace">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Strava Club</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/strava-club.webp" class="card-img-top" alt="Strava Club">
          <div class="card-body">
          <iframe allowtransparency frameborder='0' height='160' scrolling='no' src='https://www.strava.com/clubs/1225638/latest-rides/ac167025df3c3c7040fc42cb1d18ffadcba91100?show_rides=false' width='300'></iframe>
          </div>
        </div>
      </a>
    </div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>