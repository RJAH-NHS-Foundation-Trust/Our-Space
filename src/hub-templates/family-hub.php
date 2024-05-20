<?php 

    /** 
     * Template Name: Family Hub Template
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
    <div class="col-md-4 mb-4">
        <a class="custom-card-link" href="<?php echo get_option('home'); ?>/fertility">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Fertility</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/fertility.png" class="card-img-top" alt="Fertility">
            <div class="card-body">
              <p class="card-text">Resources to help and support you when trying to conceive.</p>
            </div>
          </div>
        </a>
      </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/maternity">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Maternity</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/maternity.png" class="card-img-top" alt="Maternity">
          <div class="card-body">
            <p class="card-text">Resources to help and support expectant parents.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/parents">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Parents</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/parents.png" class="card-img-top" alt="Parents">
          <div class="card-body">
            <p class="card-text">Resources to help and support parents.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/days-out">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Days Out</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/days-out.png" class="card-img-top" alt="Family Days Out">
          <div class="card-body">
            <p class="card-text">Family days out are cherished moments where loved ones come together to create lasting memories and strengthen bonds. These outings offer opportunities for adventure, exploration, and relaxation, catering to the diverse interests of family members of all ages.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="<?php echo get_option('home'); ?>/healthy-eating">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Budget Meals</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/healthy-eating.png" class="card-img-top" alt="Budget Meals">
          <div class="card-body">
            <p class="card-text">Budget meals are essential for many households aiming to stretch their finances without compromising on nutrition or taste. These meals prioritize affordability without sacrificing quality ingredients or flavor.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/baby-yoga">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Baby Yoga</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/baby-yoga.png" class="card-img-top" alt="Baby Yoga">
          <div class="card-body">
            <p class="card-text">A selection of Yoga videos for you and your baby.</p>
          </div>
        </div>
      </a>
    </div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>