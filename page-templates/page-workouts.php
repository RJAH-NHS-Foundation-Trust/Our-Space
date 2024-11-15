<?php 

    /** 
     * Template Name: Workout Page Template
     * 
     * 
    */

    get_header(); 
  
?>

<div class="container mt-4">

    
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p> 
    <div class="alert alert-secondary">
      Workouts are provided as guidelines only, it is important to work within your own limits and consult your doctor before starting any new exercises.
    </div>

    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);         
    $args = array (
        'post_status' => 'publish',
        'post_type' => 'workout',
        'orderby' => 'title',
        'order' => 'ASC',  
        'paged' => $paged,         
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;

if($totalPopularPosts > 0) { ?>

<section class="main-section">
    <div class="container">
      <div class="row g-grid gap-2 w-100 d-flex">
            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'partials/exercise-content', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
        ?>
      </div>
    </div>
  </section>

  <?php } else { ?>

    <section class="main-section">
    <div class="container">
      <div class="row g-grid gap-2 w-100 d-flex">
        <p>There are no workouts to display.</p>        
      </div>
    </div>
  </section>

  <?php } ?>

</div>

  <?php get_footer(); ?>