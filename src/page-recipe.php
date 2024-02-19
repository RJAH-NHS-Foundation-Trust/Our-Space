<?php 

    /** 
     * Template Name: Recipe Template
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
    <p><?php the_content(); ?> 
</div>

<?php          
    $args = array (
        'post_status' => 'publish',
        'post_type' => 'recipe',
        // 'tax_query' => array(
        //   array(
        //     'taxonomy' => 'diet', // Your custom taxonomy slug
        //     'field' => 'slug',
        //     'terms' => 'vegetarian', // Slug of the diet you want to filter by
        //   ),
        // ),
        'orderby' => 'meta_value_num',
        'order' => 'DESC',   
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;

if($totalPopularPosts > 0) { ?>

<section class="main-section mt-4">
    <div class="container">
        <div class="row">
            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'recipe-content', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
        ?>
      </div>
    </div>
  </section>

  <?php } ?>

  <?php get_footer(); ?>