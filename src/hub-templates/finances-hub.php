<?php 

    /** 
     * Template Name: Finances Hub Template
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
        <a class="custom-card-link" href="<?php echo get_option('home'); ?>/hidden-disabilities/">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Your Family</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/hidden-disability.png" class="card-img-top" alt="Image Alt">
            <div class="card-body">
              <p class="card-text">Hidden disabilities are conditions that are not immediately apparent to others, often because they do not have visible physical signs. These disabilities can include chronic illnesses, mental health disorders, neurological conditions, and cognitive impairments, among others. </p>
            </div>
          </div>
        </a>
      </div>

    <!-- Second Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/discounts">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Discount Codes</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/discounts.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">The UK Government's Access to Work scheme is a vital support system designed to assist individuals with disabilities or health conditions in securing and maintaining employment. Through this initiative, eligible individuals receive personalized assistance tailored to their specific needs, ranging from specialized equipment and adaptations in the workplace to travel support and sign language interpreters.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Third Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="https://rnid.org.uk/">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Hearing Loss</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/hearing-loss.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Hearing loss refers to a partial or total inability to hear sounds. It can occur due to various factors, including aging, exposure to loud noises, genetic predisposition, infections, or certain medical conditions. Hearing loss can range from mild to profound and may affect one or both ears.</p>
          </div>
        </div>
      </a>
    </div>

</div>
</div>
</div>
</div>

<?php get_footer(); ?>