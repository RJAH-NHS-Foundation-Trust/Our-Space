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
        <a class="custom-card-link" target="_blank" href="https://www.nhs.uk/live-well/quit-smoking/nhs-stop-smoking-services-help-you-quit/">
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
        <a class="custom-card-link" target="_blank" href="https://www.nhs.uk/live-well/alcohol-advice/alcohol-support/">
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
      <a class="custom-card-link" target="_blank" href="https://www.diabetes.org.uk/">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Diabetes</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/diabetes.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Diabetes is a chronic condition characterized by elevated blood sugar levels due to either insufficient production of insulin (Type 1 diabetes) or the body's ineffective use of insulin (Type 2 diabetes). Insulin, a hormone produced by the pancreas, helps regulate blood sugar levels and facilitates the uptake of glucose into cells for energy.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Second Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/sanitary-products">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Sanitary Products</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/sanitary-products.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">We are delighted to announce that due to the huge success of the scheme, we are continuing this service to support our staff – thanks to our Estates and Facilities Team who have offered to order and stock staff toilets with sanitary towels and tampons going forward.</p>
          </div>
        </div>
      </a>
    </div> 
    
    <!-- Second Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="<?php echo get_bloginfo('template_directory'); ?>/files/StaffSelfReferralPhysiotherapyService.pdf">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Physio Self Referral</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/physio.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Did you know at RJAH we offer a staff self-referral to our Physiotherapy Service for permanent members of staff employed by RJAH suffering with MSK problems? Please note this will take you to the trust intranet where you will need to login to access the document.</p>
          </div>
        </div>
      </a>
    </div> 
</div>
</div>
</div>
</div>

<?php get_footer(); ?>