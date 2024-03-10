<?php 

    /** 
     * Template Name: Self Help Hub Template
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
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/meditation.png" class="card-img-top" alt="Image Alt">
            <div class="card-body">
              <p class="card-text">Follow along with some guided meditations provided by our very own Richa Kulshrestha, if you have an interest in the benefits of meditation or just want to learn more, there is plenty here for everyone.</p>
            </div>
          </div>
        </a>
      </div>

    <!-- Second Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/podcasts">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Podcasts</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/podcast.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">A collection of Podcasts covering lots of different topics from Depression to ADHD and everything inbetween.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Third Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/books">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Books</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/books.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Books can be a great tool to help us learn, here we have a collection of different books across different topics to help you learn more about yourself and others.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Third Card -->
    <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/groups">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Groups</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/groups.png" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Local support groups, craft groups, walking groups and more. Find something that suits your interests in our group directory.</p>
        </div>
      </div>
    </a>
  </div>

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