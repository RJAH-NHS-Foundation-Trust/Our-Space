<?php 

    /** 
     * Template Name: Discount Codes Page Template
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

    <section class="main-section mt-4">
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);         
    $args = array (
        'post_status' => 'publish',
        'post_type' => 'discount-codes',
        'orderby' => 'title',
        'order' => 'ASC',  
        'paged' => $paged,         
    );

    $posts = new WP_Query( $args );
    $totalDiscountCodes = $posts -> found_posts;

if($totalDiscountCodes > 0) { ?>

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
        <p>There are no discount codes to display.</p>        
      </div>
    </div>
  </section>

  <?php } ?>
    </section>
</div>
  <?php get_footer(); ?>