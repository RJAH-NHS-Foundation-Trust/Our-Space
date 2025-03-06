<?php 

    /** 
     * Template Name: Apps Page Template
     * 
     * 
    */

    get_header(); 
  
?>

<div class="container mt-4">
    
    <h2><?php the_title(); ?></h2>

</div>

    <section>
        <div class="container">
            <p><?php the_content(); ?></p> 
        </div>
    </section>

    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);      
    $args = array (
        'post_status' => 'publish',
        'post_type' => 'link',
        'category_name' => 'apps',
        'orderby' => 'date',
        'posts_per_page' => 8,
        'order' => 'DESC',  
        'paged' => $paged,
        'orderby' => 'title',
        'order' => 'ASC',   
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;?>

    <?php if($totalPopularPosts > 0) { ?>

    <section class="main-section">
        <div class="container">
            <div class="row gap-2 justify-content-center">
                <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                    get_template_part( 'partials/app-content', get_post_format() );
                endwhile; ?> 
            </div>
            <?php bootstrap_pagination($posts);
            endif; wp_reset_postdata(); ?>

    </div>
    </section>

    <section class="main-section mb-3">
        <div class="container">
            <div class="row gap-2 justify-content-center">
                <a target="_blank" href="https://www.england.nhs.uk/supporting-our-nhs-people/support-now/wellbeing-apps/" class="btn btn-primary">Find Out More</a>
            </div>
        </div>
    </section>

    <?php } ?>

  <?php get_footer(); ?>