<?php 

    /** 
     * Template Name: Gym Page Template
     * 
     * 
    */

    get_header(); 
  
?>

<div class="container mt-4">
    
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p> 

    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);          
    $args = array (
        'post_status' => 'publish',
        'post_type' => 'gym',
        'posts_per_page' => 8, 
        'paged' => $paged,
        'orderby' => 'title',
        'order' => 'ASC',   
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;

if($totalPopularPosts > 0) { ?>

<section class="main-section">
    <div class="row g-grid gap-2 w-100 d-flex">
        <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
            get_template_part( 'partials/gym-content', get_post_format() );
                endwhile; ?> </div>
                <?php bootstrap_pagination($posts);
            endif; wp_reset_postdata();       ?>
  </section>

  <?php } ?>

</div>

  <?php get_footer(); ?>