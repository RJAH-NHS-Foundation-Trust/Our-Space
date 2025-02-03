<?php 

    /** 
     * Template Name: Healthy Eating Hub Template
     * 
     * 
    */

    get_header(); 
  
?>

<div class="container mt-4">
    
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p> 

    <?php          
    $args = array (
        'post_status' => 'publish',
        'post_type' => 'recipe',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',   
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts; ?>

<section class="mt-4">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/img/nhs_chef1.webp" alt="NHS Chef">
      </div>
      <div class="col-4">
        <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/img/nhs_chef2.webp" alt="NHS Chef">
      </div>
      <div class="col-4">
        <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/img/nhs_chef3.webp" alt="NHS Chef">
      </div>
    </div>
  </div>
</section>

<?php if($totalPopularPosts > 0) { ?>

  <section class="mt-4">
  <div class="container">
    <h3>Filter Your Selection</h3>
    <div class="d-flex gap-2">
      <a class="btn btn-primary" href="<?php echo get_option('home'); ?>/diet/vegan/">Vegan</a>
      <a class="btn btn-primary" href="<?php echo get_option('home'); ?>/diet/vegetarian/">Vegetarian</a>
      <a class="btn btn-primary" href="<?php echo get_option('home'); ?>/diet/gluten-free/">Gluten Free</a>
    </div>
  </div>
</section>


<section class="main-section mt-4 mb-4">
    <div class="container">
        <div class="row g-grid gap-2 w-100 d-flex">
            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'partials/food-content', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
            ?>
        </div>
    </div>
  </section>

  <?php } else { ?>

    <p>There are no recipes to display.</p>

  <?php } ?> 

</div>

  <?php get_footer(); ?>