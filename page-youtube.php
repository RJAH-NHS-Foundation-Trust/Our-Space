<?php 

    /** 
     * Template Name: YouTube Archive
     * 
     * 
    */ 

get_header(); ?>

<section class="main-section mt-4">
    <div class="container">
      <div class="row">        
        <div class="col-lg-9 col-md-12 blog-posts">
            <h2><?php the_title(); ?></h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">                
                    <?php           
                    $args = array (
                        'post_status' => 'publish',
                        'post_type' => 'youtube',
                        'order'          => 'desc',
                        'orderby'        => 'publish_date',
                        'posts_per_page' => 10,               
                    );

                    $posts = new WP_Query( $args );
                    
                    if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                        get_template_part( 'youtube-page-content', get_post_format() );
                            endwhile; endif; wp_reset_postdata(); 
                    ?>

                </div>
        </div>
        <?php get_sidebar() ?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>