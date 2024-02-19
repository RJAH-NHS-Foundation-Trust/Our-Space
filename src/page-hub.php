<?php 

    /** 
     * Template Name: Hub Template
     * 
     * 
    */

    get_header(); 
  
?>

<?php 
    $pageTitle = get_the_title(); 
    $hubTitle = strtok($pageTitle, " ");
    $resourceTitle = 'resources';
?>

<div class="container mt-4">
    
    <div class="row mb-2">
        <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
    </div>
    
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?> 
</div>

<?php          
    $args = array (
        'post_status' => 'publish',
        'category_name' => "$hubTitle + $resourceTitle",
        'meta_key' => 'wpb_post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',   
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;

if($totalPopularPosts > 0) { ?>

<section class="main-section mt-4">
    <div class="container">


        <div class="row">    
            
            <h3>Popular <?php echo $hubTitle; ?> Resources </h3>
            
            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'content', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
        ?>
      </div>
    </div>
  </section>

  <?php } ?>

<?php          
    $args = array (
        'post_status' => 'publish',
        'category_name' => $hubTitle,
        'order'          => 'desc',
        'orderby'        => 'publish_date',    
    );

    $posts = new WP_Query( $args );
    $totalRecentPosts = $posts -> found_posts;

if($totalRecentPosts > 0) { ?>

  <section class="main-section mt-4">
    <div class="container">
        <div class="row">    
            
            <h3>Recent <?php echo $hubTitle; ?> Posts </h3>
      
            
            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'content', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
        ?>
      </div>      
    </div>
  </section>

<?php } ?>

  <?php get_footer(); ?>