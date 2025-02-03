<?php 

    /** 
     * Template Name: Personal Health Hub Template
     * 
     * 
    */

    get_header(); 

?>  

<div class="container">

<h2 class="mt-4"><?php the_title(); ?></h2>


<div class="row mt-2">
    <div class="col-md-4 mb-4">
        <a class="custom-card-link" target="_blank" href="https://www.nhs.uk/live-well/quit-smoking/nhs-stop-smoking-services-help-you-quit/">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Stop Smoking</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/stop-smoking.webp" class="card-img-top" alt="Stop Smoking">
            <div class="card-body">
              <p class="card-text">Quitting smoking is one of the most significant steps individuals can take to improve their health and quality of life. Smoking is a leading cause of preventable death worldwide, contributing to a wide range of health issues such as lung cancer, heart disease, respiratory disorders, and stroke.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-4">
        <a class="custom-card-link" target="_blank" href="https://www.nhs.uk/live-well/alcohol-advice/alcohol-support/">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Alcohol</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/alcohol.webp" class="card-img-top" alt="Alcohol">
            <div class="card-body">
              <p class="card-text">Taking a break from alcohol can have numerous benefits for both physical and mental health. It allows the body time to recover from the potential negative effects of alcohol consumption, such as liver damage, disrupted sleep patterns, and weight gain. Additionally, abstaining from alcohol can improve mental clarity, mood stability, and overall well-being, as alcohol can exacerbate feelings of anxiety and depression in some individuals.</p>
            </div>
          </div>
        </a>
      </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="https://www.diabetes.org.uk/">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Diabetes</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/diabetes.webp" class="card-img-top" alt="Diabetes">
          <div class="card-body">
            <p class="card-text">Diabetes is a chronic condition characterized by elevated blood sugar levels due to either insufficient production of insulin (Type 1 diabetes) or the body's ineffective use of insulin (Type 2 diabetes). Insulin, a hormone produced by the pancreas, helps regulate blood sugar levels and facilitates the uptake of glucose into cells for energy.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="https://legsmatter.org/">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Legs Matter</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/legs-matter.webp" class="card-img-top" alt="Legs Matter">
          <div class="card-body">
            <p class="card-text">The Legs Matter coalition is working together to increase awareness, understanding and prevent harm for lower leg and foot conditions.</p>
          </div>
        </div>
      </a>
    </div> 
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/sanitary-products">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Sanitary Products</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/sanitary-products.webp" class="card-img-top" alt="Sanitary Products">
          <div class="card-body">
            <p class="card-text">We are delighted to announce that due to the huge success of the scheme, we are continuing this service to support our staff – thanks to our Estates and Facilities Team who have offered to order and stock staff toilets with sanitary towels and tampons going forward.</p>
          </div>
        </div>
      </a>
    </div> 
    <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/musculoskeletal/">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Musculoskeletal self care</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/musculoskeletal.webp" class="card-img-top" alt="Musculoskeletal self care">
          <div class="card-body">
            <p class="card-text">Self-care is all about looking after your musculoskeletal problems in a healthy way. There is a lot of support available to people suffering from joint and/or muscle aches and pains, and this page aims to give you more information on how to do this as well as how to access physiotherapy through the workplace if needed.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="<?php echo get_bloginfo('template_directory'); ?>/files/StaffSelfReferralPhysiotherapyService.pdf">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Physio Self Referral</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/physio.webp" class="card-img-top" alt="Physio Self Referral">
          <div class="card-body">
            <p class="card-text">Did you know at RJAH we offer a staff self-referral to our Physiotherapy Service for permanent members of staff employed by RJAH suffering with MSK problems? Download and complete this referral form to get started.</p>
          </div>
        </div>
      </a>
    </div> 
    <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/pharmacy">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Pharmacy</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/pharmacy.webp" class="card-img-top" alt="Pharmacy">
          <div class="card-body">
            <p class="card-text">It is now possible to get over the counter medication from the league of friends shop, find out more here.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
    <a class="custom-card-link" target="_blank" href="https://www.nhsemployers.org/staff-experience/flexible-working">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Flexible Working</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/flexible-working.webp" class="card-img-top" alt="Flexible Working">
          <div class="card-body">
            <p class="card-text">As part of the <a href="https://www.england.nhs.uk/ournhspeople/">NHS People Plan</a>, the <a href="https://www.england.nhs.uk/ournhspeople/online-version/lfaop/our-nhs-people-promise/">NHS People Promise</a> sets out a series of commitments, one of which is We work flexibly, which states: We do not have to sacrifice our family, our friends or our interests for work.<br/><br/> Find out more here</div>
        </div>
      </a>
    </div>    
    
</div>
</div>
</div>
</div>

<?php get_footer(); ?>