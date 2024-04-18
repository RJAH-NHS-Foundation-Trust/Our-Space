<?php get_header(); ?>

<section class="main-section mt-4">
    <div class="container">

        <div class="row mb-4">
            <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
        </div>

      <div class="row">        
        <div class="col-lg-9 col-md-12 blog-posts">
            <h2><?php the_title(); ?></h2>
            <?php get_template_part( 'meta') ?>
            <div class="blog-tags mb-2">
            <?php
                // Get the post ID
                $post_id = get_the_ID();
                
                $body_areas = wp_get_post_terms( $post_id, 'body_area' );
                $difficulties = wp_get_post_terms( $post_id, 'workout-difficulty' );

                // Check if any terms were found
                if ( ! empty( $body_areas  ) && ! is_wp_error( $body_areas  ) ) {

                    // Loop through each term and display it as an option
                    foreach ( $body_areas  as $body_area ) { ?>
                        <span class="tag mb-1">
                            <?php echo '<a class="text-white" href="' . $body_area->name . '">' . $body_area->name . '</a>'; ?>
                        </span>                
                    <?php }
                }

                // Check if any terms were found
                if ( ! empty( $difficulties  ) && ! is_wp_error( $difficulties  ) ) {

                    // Loop through each term and display it as an option
                    foreach ( $difficulties  as $difficulty ) { ?>
                        <span class="tag mb-1">
                            <?php echo '<a class="text-white" href="' . $difficulty->name . '">' . $difficulty->name . '</a>'; ?>
                        </span>                
                    <?php }
                }


            ?>
            </div>
            <?php the_content() ?>
            <?php
                $posttags = get_the_tags(); 
                if ($posttags) 
                {
            ?>
        <?php } ?>
        </div>
        <?php get_sidebar() ?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>