<?php 

    /** 
     * Template Name: Mindfulness Hub Template
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

<p><?php the_content(); ?></p>

<div class="row mt-2">
    <!-- First Card -->
    <div class="col-md-4 mb-4">
        <a class="custom-card-link" href="<?php echo get_option('home'); ?>/meditation">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Meditation</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image.jpg" class="card-img-top" alt="Image Alt">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
            </div>
          </div>
        </a>
      </div>

    <!-- Second Card -->
    <!-- <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/depression">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Depression</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/depression.jpg" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
          </div>
        </div>
      </a>
    </div> -->

    <!-- Third Card -->
    <!-- <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/disability">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Disability</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/disability.jpg" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
          </div>
        </div>
      </a>
    </div> -->

    <!-- Fourth Card -->
    <!-- <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/recipes">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Recipes</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/recipe.jpg" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">A collection of affordable, easy to make recipes.</p>
          </div>
        </div>
      </a>
    </div> -->

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