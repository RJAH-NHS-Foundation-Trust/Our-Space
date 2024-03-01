<?php get_header(); ?>    

  <div class="container mt-5">
    <!-- <div class="row">
      <div class="col-md-6">
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
  </div>

  <div class="col-md-6">
  <div class="section">
    <h3 class="section-title">Featured Content</h3>
    <div class="card featured-card" style="min-height: 20vh; max-height: 20vh; overflow: hidden;">
      <div class="card-body">
      <?php          
            $args = array (
                'post_status' => 'publish',
                'category_name' => 'anxiety',
                'posts_per_page' => '1',
                'order'          => 'desc',
                'orderby'        => 'publish_date',    
            );

            $posts = new WP_Query( $args );
            
            if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'featured-content', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
        ?>
      </div>
    </div>
  </div>
</div>
</div> -->

<div class="row mt-2">
    <!-- First Card -->
    <div class="col-md-4 mb-4">
        <a class="custom-card-link" href="<?php echo get_option('home'); ?>/mental-health/">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Mental Health</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/depression.jpg" class="card-img-top" alt="Image Alt">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
            </div>
          </div>
        </a>
      </div>

    <!-- Second Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/disability">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Disability</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/disability.jpg" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Third Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/personal-fitness">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Personal Fitness</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/disability.jpg" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Fourth Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/mindfulness">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Mindfulness</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image-2.jpeg " class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">A collection of affordable, easy to make recipes.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Fifth Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/healthy-eating">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Healthy Eating</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/recipe.jpg" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Sixth Card -->
    <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/personal-health">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Personal Health</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image.jpg " class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
        </div>
      </div>
    </a>
  </div>
</div>

  <div class="row mt-2 mb-2 mt-2" style="align-items: flex-start;">
  <div class="col-md-6">
      <div class="section">
        <div class="card playlist-card">
          <div class="card-body d-flex align-items-center">
            <!-- Font Awesome icon on the left -->
            <i class="fas fa-shoe-prints fa-2x" style="margin-right: 0.75rem;"></i>
            <div>
              <p class="card-text">Join Our Strava Group. So far our members have walked 2,8482 steps.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="section">
        <div class="card fitness-card">
          <div class="card-body d-flex align-items-center">
            <!-- Font Awesome icon on the left -->
            <i class="fas fa-shoe-prints fa-2x" style="margin-right: 0.75rem;"></i>
            <div>
              <p class="card-text">Join Our Strava Group. So far our members have walked 2,8482 steps.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


</div>
</div>

<?php get_footer(); ?>