<?php 

    /** 
     * Template Name: Recipe Template
     * 
     * 
    */

    get_header(); 
  
?>

<section class="main-section mt-4">
    <div class="container">
      <div class="row">        
        <div class="col-lg-9 col-md-12 blog-posts">
        <?php          
            $args = array (
                'post_status' => 'publish',
                'post_type' => 'recipe',
                'order'          => 'desc',
                'orderby'        => 'publish_date',    
            );

            $posts = new WP_Query( $args );
            
            if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'blog-content', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
        ?>
            
            
        </div>
        <?php get_sidebar() ?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>