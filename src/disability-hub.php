<?php 

    /** 
     * Template Name: Disability Hub Template
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
        <a class="custom-card-link" href="<?php echo get_option('home'); ?>/anxiety">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Hidden Disabilities</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/hidden-disability.png" class="card-img-top" alt="Image Alt">
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
          <span class="custom-pill">Access To Work</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/access-to-work.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Third Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/disability">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Hearing Loss</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/hearing-loss.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Fourth Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/sight">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Sight Loss</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/sight-loss.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">A collection of affordable, easy to make recipes.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Fifth Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="https://crohnsandcolitis.org.uk/">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Chrons</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image-2.jpeg" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Crohn's disease, often referred to simply as Crohn's, is a chronic inflammatory bowel disease (IBD) that primarily affects the gastrointestinal tract.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Sixth Card -->
    <div class="col-md-4 mb-4">
    <a class="custom-card-link" target="_blank" href="https://crohnsandcolitis.org.uk/">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Colitis</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image-3.jpg" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Colitis refers to inflammation of the colon, also known as the large intestine. It is a condition that can have various causes, including infection, autoimmune disorders, and inflammatory bowel diseases (IBD) such as ulcerative colitis and Crohn's disease.</p>
        </div>
      </div>
    </a>
  </div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>