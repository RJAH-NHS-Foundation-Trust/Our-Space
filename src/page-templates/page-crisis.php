<?php 

    /** 
     * Template Name: Crisis Page Template
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

<h3>Mental Health Charities</h3>

<?php          
    $args = array (
        'post_status' => 'publish',
        'post_type' => 'charity',
        'orderby' => 'title',
        'order' => 'ASC',   
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;

if($totalPopularPosts > 0) { ?>

<section class="main-section mt-4">
    <div class="container">
        <div class="row g-grid gap-2 w-100 d-flex">
            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'partials/crisis-content', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
        ?>
      </div>
    </div>
  </section>

  <?php } ?>

</div>

  <?php get_footer(); ?>