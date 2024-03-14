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
              <p class="card-text">Hidden disabilities are conditions that are not immediately apparent to others, often because they do not have visible physical signs. These disabilities can include chronic illnesses, mental health disorders, neurological conditions, and cognitive impairments, among others. </p>
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
            <p class="card-text">Hearing loss refers to a partial or total inability to hear sounds. It can occur due to various factors, including aging, exposure to loud noises, genetic predisposition, infections, or certain medical conditions. Hearing loss can range from mild to profound and may affect one or both ears.</p>
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
            <p class="card-text">Sight loss, also known as visual impairment or blindness, refers to a condition in which an individual experiences partial or complete loss of vision. This loss of vision can result from various factors, including eye diseases, injuries, congenital conditions, or age-related changes.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Fifth Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="https://crohnsandcolitis.org.uk/">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Crohns & Colitis</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/chrons.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Crohn's disease, often referred to simply as Crohn's, is a chronic inflammatory bowel disease (IBD) that primarily affects the gastrointestinal tract.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Sixth Card -->
    <!-- <div class="col-md-4 mb-4">
    <a class="custom-card-link" target="_blank" href="https://crohnsandcolitis.org.uk/">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Something else</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image-3.jpg" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Space.</p>
        </div>
      </div>
    </a>
  </div> -->

</div>
</div>
</div>
</div>

<?php get_footer(); ?>