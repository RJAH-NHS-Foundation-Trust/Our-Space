<?php 

    /** 
     * Template Name: Personal Health Hub Template
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


<div class="row mt-2">
    <!-- First Card -->
    <div class="col-md-4 mb-4">
        <a class="custom-card-link" href="<?php echo get_option('home'); ?>/anxiety">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Stop Smoking</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/stop-smoking.png" class="card-img-top" alt="Image Alt">
            <div class="card-body">
              <p class="card-text">Quitting smoking is one of the most significant steps individuals can take to improve their health and quality of life. Smoking is a leading cause of preventable death worldwide, contributing to a wide range of health issues such as lung cancer, heart disease, respiratory disorders, and stroke.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Third Card -->
      <div class="col-md-4 mb-4">
        <a class="custom-card-link" href="<?php echo get_option('home'); ?>/disability">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Alcohol</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/alcohol.png" class="card-img-top" alt="Image Alt">
            <div class="card-body">
              <p class="card-text">Taking a break from alcohol can have numerous benefits for both physical and mental health. It allows the body time to recover from the potential negative effects of alcohol consumption, such as liver damage, disrupted sleep patterns, and weight gain. Additionally, abstaining from alcohol can improve mental clarity, mood stability, and overall well-being, as alcohol can exacerbate feelings of anxiety and depression in some individuals.</p>
            </div>
          </div>
        </a>
      </div>

    <!-- Second Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/depression">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Diabetes</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/diabetes.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Diabetes is a chronic condition characterized by elevated blood sugar levels due to either insufficient production of insulin (Type 1 diabetes) or the body's ineffective use of insulin (Type 2 diabetes). Insulin, a hormone produced by the pancreas, helps regulate blood sugar levels and facilitates the uptake of glucose into cells for energy.</p>
          </div>
        </div>
      </a>
    </div>

</div>
</div>
</div>
</div>

<?php get_footer(); ?>