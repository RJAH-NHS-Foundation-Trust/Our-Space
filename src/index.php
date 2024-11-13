<?php get_header(); ?>    
  <div class="container mt-5">
    <div class="row mt-2">

    <?php          
        $args = array (
            'post_status' => 'publish',
            'post_type' => 'hub',
            'posts_per_page' => -1, 
            'orderby' => 'menu_order',
            'order' => 'ASC',   
        );

        $posts = new WP_Query( $args );
        $totalPosts = $posts -> found_posts;

    if($totalPosts > 0) { ?>

            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'partials/parent-hub-cards', get_post_format() );
                    endwhile; ?> 
                    <?php bootstrap_pagination($posts);
                endif; wp_reset_postdata();
      } ?>
    
    </div>
  </div>

<?php get_footer(); ?>