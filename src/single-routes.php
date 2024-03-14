<?php get_header(); ?>

<section class="main-section mt-4">
    <div class="container">

        <div class="row mb-4">
            <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
        </div>

        <div class="row">
            <div class="col-6">
            <?php
            // Get the global $post object
            global $post;

            // Check if the current post has a featured image
            if (has_post_thumbnail($post->ID)) {
                // Get the featured image URL
                $featured_image_url = get_the_post_thumbnail_url($post->ID);
                
                // Display the featured image
                echo '<img class="img-fluid mb-2" src="' . $featured_image_url . '" alt="Featured Image">';
            } else {
                // If no featured image is found, you can display a default image or do something else
                echo 'No route map found.';
            }
            ?>
            </div>
            <div class="col-6">
                <h1><?php the_title(); ?></h1>
                <div class="mt-3">
                    <?php
                    $post_id = get_the_ID();
                    $categories = get_the_category($post_id);

                    foreach ($categories as $cat) {
                        $category_link = get_category_link($cat->cat_ID);
                        echo '<a  class="custom-category-pill" href="' . esc_url($category_link) . '" title="' . esc_attr($cat->name) . '">' . esc_html($cat->name) . '</a> ';
                    }
                    ?>
                </div>
                
                <div class="row text-center mt-4">
                    <div class="col-4">
                        <h6>Total Length</h6>
                        <span><?php
                        // Assuming you have a custom taxonomy called 'your_taxonomy_name'
                        $terms = get_the_terms( get_the_ID(), 'length' );

                        if ( $terms && ! is_wp_error( $terms ) ) {
                            $taxonomy_value = array();

                            foreach ( $terms as $term ) {
                                $taxonomy_value[] = $term->name;
                            }

                            // Output the values
                            echo implode( ', ', $taxonomy_value );
                        } else 
                        {
                            echo 'No length defined';
                        }
                        ?></span>
                    </div>
                    <div class="col-4">
                        <h6>Difficulty</h6>
                        <span><?php
                        // Assuming you have a custom taxonomy called 'your_taxonomy_name'
                        $terms = get_the_terms( get_the_ID(), 'difficulty' );

                        if ( $terms && ! is_wp_error( $terms ) ) {
                            $taxonomy_value = array();

                            foreach ( $terms as $term ) {
                                $taxonomy_value[] = $term->name;
                            }

                            // Output the values
                            echo implode( ', ', $taxonomy_value );
                        } else 
                        {
                            echo 'No difficulty defined';
                        }
                        ?></span>
                    </div>
                    <div class="col-4">
                        <h6>Estimated Completion Time</h6>
                        <?php $estimated_completion_time = get_field('estimated_completion_time');
                        if (!empty ($estimated_completion_time))
                        { ?>
                        <span><?php the_field('estimated_completion_time'); ?></span>
                        <?php } else {
                            echo 'No Estimated Completion Time Provided';
                        } 
                        ?>
                    </div>                    
                </div>
                <div class="mt-3 fst-italic">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>



            <?php 
                $route_directions = get_field('route_directions'); 
            ?>

            <div class="row mt-2 mb-2">
                <div class="col-lg-12 col-12 col-12">
                    <h3>Directions</h3>

                        <?php if(!empty($route_directions)) {
                            echo $route_directions;
                        } else {
                            echo 'No Directions Available';
                        } 
                        ?>
                
                </div>
            </div>
    </div>
  </section>

  <?php get_footer(); ?>