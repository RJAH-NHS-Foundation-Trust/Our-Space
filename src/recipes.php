<?php 

    /** 
     * Template Name: YouTube Archive
     * 
     * 
    */ 

get_header(); ?>

<div class="jumbotron">
    <div class="container">
        <h1 class="jumbotron-title">Few of us ever live in the present. We are forever anticipating what is to come or remembering what has gone.</h1>
        <p class="jumbotron-description">Louis L'Amour</p>
    </div>
</div>


<section class="main-section mt-4">
    <div class="container">
      <div class="row">        
        <div class="col-lg-9 col-md-12 blog-posts">
            <h2><?php the_title(); ?></h2>
            

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                
                <div class="mb-2">
                <?php                
                    $args = array (
                        'post_status' => 'publish',
                        'category_name' => 'recipes',
                        'post_type' => 'post',
                        'order'          => 'desc',
                        'orderby'        => 'publish_date',
                        'posts_per_page' => 4,
            );

            $posts = new WP_Query( $args );
            
            if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'blog-content', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
        ?>
                </div>
                </div>
            
        </div>
        <?php get_sidebar() ?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>