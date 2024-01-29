<div class="col-lg-3 col-md-6 mb-4">
          <div class="section">
            <h3 class="section-title">I am in Crisis</h3>    
            <p class="section-content">If you feel you need immediate help, contact one of the below charities.</p>        
            <div class="app-icons">
              <div class="app-icon">
                <a href="<?php echo get_option('charity_a_url'); ?>">
                  <img src="<?php echo get_option('charity_a_logo'); ?>" alt="<?php echo get_option('charity_a_name'); ?>" class="app-image">      
                </a>
              </div>
              <div class="app-icon">
                <a href="<?php echo get_option('charity_b_url'); ?>">
                  <img src="<?php echo get_option('charity_b_logo'); ?>" alt="<?php echo get_option('charity_b_name'); ?>" class="app-image">                
                </a>
              </div>
              <div class="app-icon">
                <a href="<?php echo get_option('charity_c_url'); ?>">                  
                  <img src="<?php echo get_option('charity_c_logo'); ?>" alt="<?php echo get_option('charity_c_name'); ?>" class="app-image">
                </a>
              </div>
              <div class="app-icon">
                <a href="<?php echo get_option('charity_d_url'); ?>">                  
                  <img src="<?php echo get_option('charity_d_logo'); ?>" alt="<?php echo get_option('charity_d_name'); ?>" class="app-image">
                </a>
              </div>
            </div>
          </div>
          <div class="section mt-4">
            <h3 class="section-title">Recommended Apps</h3>
            <p class="section-content">Below are a selection of the apps we recommend</p>
            <div class="app-icons">
              <div class="app-icon">
                <a href="<?php echo get_option('app_a_url'); ?>">
                  <img src="<?php echo get_option('app_a_logo'); ?>" alt="<?php echo get_option('app_a_name'); ?>" class="app-image">                  
                </a>
              </div>
              <div class="app-icon">
                <a href="<?php echo get_option('app_d_url'); ?>">
                  <img src="<?php echo get_option('app_b_logo'); ?>" alt="<?php echo get_option('app_b_name'); ?>" class="app-image">                
                </a>
                <div style="display: block; position:absolute;">
                  <img style="max-width: 20px" src="<?php echo get_option('app_b_logo'); ?>" alt="<?php echo get_option('app_b_name'); ?>" class="app-image">  
                  <img style="max-width: 20px" src="<?php echo get_option('app_b_logo'); ?>" alt="<?php echo get_option('app_b_name'); ?>" class="app-image">  
                </div>
              </div>
              <div class="app-icon">
                <a href="<?php echo get_option('app_c_url'); ?>">
                  <img src="<?php echo get_option('app_c_logo'); ?>" alt="<?php echo get_option('app_c_name'); ?>" class="app-image">
                </a>
              </div>
              <div class="app-icon">
                <a href="<?php echo get_option('app_d_url'); ?>">
                  <img src="<?php echo get_option('app_d_logo'); ?>" alt="<?php echo get_option('app_d_name'); ?>" class="app-image">
                </a>
              </div>
            </div>
          </div>
          <div class="section mt-4">
          <h3 class="section-title">Recipe of the Week</h3>
          <div class="recipe-card d-flex flex-column">
            
            <div class="recipe-content mt-2 text-center">
            <?php          
            $args = array (
                    'post_status' => 'publish',
                    'post_type' => 'recipe',
                    'order'          => 'desc',
                    'orderby'        => 'publish_date',
                    'posts_per_page' => 1,               
                );
                $posts = new WP_Query( $args );
                
                if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                    get_template_part( 'recipe-content', get_post_format() );
                        endwhile; endif; wp_reset_postdata(); 
            ?>
            </div>
            <div class="mt-2">
              <a href="<?php echo get_option('home'); ?>" class="btn btn-sm btn-primary">Submit Yours</a>
              <a href="<?php echo get_option('home'); ?>/recipe-archive/" class="btn btn-sm btn-primary">View Archive</a>
            </div>
          </div>
        </div>
        </div>