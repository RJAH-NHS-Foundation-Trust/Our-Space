<?php get_header(); ?>

    <?php $array = ["One specific aspect of mindfulness is awareness.","One specific aspect of mindfulness is awareness.","Mindfulness is a deceptively simple way of relating to all experience that can reduce suffering and set the stage for positive personal transformation.","We can talk about mindfulness or write at length about it, but to truly understand mindfulness, we have to experience it directly.","Mindfulness is the capacity to perceive our world clearly, without adulteration or manipulation.","We are all mindful to one degree or another, moment by moment. It is an inherent human capacity.","It is only when the mind is open and receptive that learning and seeing and change can occur."];?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="jumbotron-title"><? echo $array[array_rand($array, 1)]; ?></h1>
        </div>
    </div>

  <div class="container mt-5">
    <div class="row">
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
        <h5 class="card-title">Featured Heading</h5>
        <p class="card-text">Small description of the post goes here.</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
</div>
</div>

  <div class="row mt-2">
    <!-- First Card -->
    <div class="col-md-4 mb-4">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Anxiety</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image.jpg" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
        </div>
      </div>
    </div>

    <!-- Second Card -->
    <div class="col-md-4 mb-4">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Depression</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image-2.jpeg" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
        </div>
      </div>
    </div>

    <!-- Third Card -->
    <div class="col-md-4 mb-4">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Mindfulness</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/mindfullness.png" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
        </div>
      </div>
    </div>

    <!-- Fourth Card -->
    <div class="col-md-4 mb-4">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Yoga</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image-3.jpg" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
        </div>
      </div>
    </div>

    <!-- Fifth Card -->
    <div class="col-md-4 mb-4">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Meditation</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image-2.jpeg" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
        </div>
      </div>
    </div>

    <!-- Sixth Card -->
    <div class="col-md-4 mb-4">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Personal Health</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/card-image-3.jpg" class="card-img-top" alt="Image Alt">
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit ut.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-2 mb-2 mt-2" style="align-items: flex-start;">
    <div class="col-md-6">
      <div class="section">
          <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/1r4hnyOWexSvylLokn2hUa?utm_source=generator" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
      </div>
    </div>
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
</div>


</div>
</div>

<?php get_footer(); ?>