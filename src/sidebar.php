<div class="col-lg-3 col-md-6 mb-4">
  <div class="section">
    <?php     
    $args = array (
        'post_type' => 'link',  
        'post_status' => 'publish',
        'orderby' => 'title',
        'posts_per_page' => 4,
        'order' => 'ASC',
        'tax_query' => array(
          'relation' => 'AND',
          array(
              'taxonomy' => 'category',
              'field' => 'slug',
              'terms' => 'charity',
          ),
          array(
              'taxonomy' => 'category',
              'field' => 'slug',
              'terms' => 'crisis',
          ),
      ),
    );

    $posts = new WP_Query( $args );
    $crisisCharity = $posts -> found_posts;

    if($crisisCharity > 0) { ?>

    <h3 class="section-title">I am in Crisis</h3>    
    <p class="section-content">If you feel you need immediate help, contact one of the below charities.</p> 
    
    <div class="app-icons">
      <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
    get_template_part( 'partials/sidebar-crisis', get_post_format() );
  endwhile; endif; wp_reset_postdata();?> 
    </div>        
    <?php } ?>
  </div> <!-- Charity App Section Ends Here -->
  <div class="section mt-4">

  <?php     
    $args = array (
        'post_type' => 'link',  
        'post_status' => 'publish',
        'orderby' => 'title',
        'posts_per_page' => 4,
        'category_name' => 'apps',
        'order' => 'ASC'        
    );

    $apps = new WP_Query( $args );
    $recommendedApps = $apps -> found_posts;

    if($recommendedApps > 0) { ?>

    <h3 class="section-title">Recommended Apps</h3>
    <p class="section-content">Below are a selection of the apps we recommend</p>
    <div class="app-icons">
    <?php if ( $apps->have_posts() ) :  while ( $apps->have_posts() ) : $apps->the_post(); 
        get_template_part( 'partials/sidebar-apps', get_post_format() );
      endwhile; endif; wp_reset_postdata();?> 
    </div>
    <?php } ?>
  </div>
</div>