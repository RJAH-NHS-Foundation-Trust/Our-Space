<?php 

    /** 
     * Template Name: Exercises Page Template
     * 
     * 
    */

    get_header(); 
  
?>

<div class="container mt-4">
    
    <div class="row mb-4">
        <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
    </div>
    
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p> 
    <div class="alert alert-secondary">
      Workouts are provided as guidelines only, it is important to work within your own limits and consult your doctor before starting any new exercises.
    </div>

    <section class="main-section mt-4">
    <h3>Beginner</h3>
    <p>Select 5 of the workouts below</p>
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);         
    $args = array (
        'post_status' => 'publish',
        'post_type' => 'exercise',
        'tax_query' => array(
          array(
            'taxonomy' => 'workout-difficulty', // Your custom taxonomy slug
            'field' => 'slug',
            'terms' => array('beginner'), // Slug of the diet you want to filter by
          ),
        ),
        'orderby' => 'title',
        'order' => 'ASC',  
        'paged' => $paged,         
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;

if($totalPopularPosts > 0) { ?>

<section class="main-section mt-4">
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

    <section class="main-section mt-4">
    <div class="container">
      <div class="row g-grid gap-2 w-100 d-flex">
        <p>There are no exercises to display.</p>        
      </div>
    </div>
  </section>

  <?php } ?>
    </section>
    
    <section class="main-section mt-4">
    <h3>Intermediate</h3>
    <p>Select 5 of the workouts below</p>
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);         
    $args = array (
        'post_status' => 'publish',
        'post_type' => 'exercise',
        'tax_query' => array(
          array(
            'taxonomy' => 'workout-difficulty', // Your custom taxonomy slug
            'field' => 'slug',
            'terms' => array('intermediate'), // Slug of the diet you want to filter by
          ),
        ),
        'orderby' => 'title',
        'order' => 'ASC',  
        'paged' => $paged,         
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;

if($totalPopularPosts > 0) { ?>

<section class="main-section mt-4">
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

    <section class="main-section mt-4">
    <div class="container">
      <div class="row g-grid gap-2 w-100 d-flex">
        <p>There are no exercises to display.</p>        
      </div>
    </div>
  </section>

  <?php } ?>
    </section>
    
    <section class="main-section mt-4">
    <h3>Advanced</h3>
    <p>Select 5 of the workouts below</p>
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);         
    $args = array (
        'post_status' => 'publish',
        'post_type' => 'exercise',
        'tax_query' => array(
          array(
            'taxonomy' => 'workout-difficulty', // Your custom taxonomy slug
            'field' => 'slug',
            'terms' => array('advanced'), // Slug of the diet you want to filter by
          ),
        ),
        'orderby' => 'title',
        'order' => 'ASC',  
        'paged' => $paged,         
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;

if($totalPopularPosts > 0) { ?>

<section class="main-section mt-4">
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

    <section class="main-section mt-4">
    <div class="container">
      <div class="row g-grid gap-2 w-100 d-flex">
        <p>There are no exercises to display.</p>        
      </div>
    </div>
  </section>

  <?php } ?>
    </section>

</div>

  <?php get_footer(); ?>