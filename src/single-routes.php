<?php 
    get_header(); 
    $is_all_trails = get_field('all_trails_route');
    $route_directions = get_field('route_directions'); 
    $route_directions_url = get_field('route_direction_url'); 
?>

<section class="main-section mt-4">
    <div class="container">

        <div class="row mb-4">
            <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
        </div>

        <?php if($is_all_trails == TRUE) { ?>
            
            <div class="alert alert-secondary">
                This route was provided by All Trails and is hosted here for information purposes only.
            </div>
        <?php } ?>

        <div class="row">
            <div class="col-6">
            <?php

            global $post;

            if (has_post_thumbnail($post->ID)) {

                $featured_image_url = get_the_post_thumbnail_url($post->ID);
                
                echo '<img class="img-fluid mb-2" src="' . $featured_image_url . '" alt="Featured Image">';
            } else { ?>                
                <img class="img-fluid mb-2" src="<?php echo get_bloginfo('template_directory'); ?>/img/route-image-default.png" alt="Featured Image">                
            <?php }
            ?>
            </div>
            <div class="col-6">
                <h1><?php the_title(); ?></h1>                
                <span><strong>Found a problem:</strong> <a href="<?php echo get_option('home'); ?>/suggest-an-edit/">Suggest an edit</a>
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

                        $terms = get_the_terms( get_the_ID(), 'length' );

                        if ( $terms && ! is_wp_error( $terms ) ) {
                            $taxonomy_value = array();

                            foreach ( $terms as $term ) {
                                $taxonomy_value[] = $term->name;
                            }

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

                        $terms = get_the_terms( get_the_ID(), 'difficulty' );

                        if ( $terms && ! is_wp_error( $terms ) ) {
                            $taxonomy_value = array();

                            foreach ( $terms as $term ) {
                                $taxonomy_value[] = $term->name;
                            }

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

                    <?php $route_external_site = get_field('route_external_site'); ?>
                    
                    <?php 
                    if(!empty($route_external_site))
                    { ?>
                        <a class="btn btn-primary" target="_blank" href="<?php the_field('route_external_site') ?>">Find Out More</a>
                    <?php } ?>

                </div>
            </div>
        </div>

            <div class="row mt-2 mb-2">
                <div class="col-lg-12 col-12 col-12">
                    <h3>Directions</h3>

                        <?php if(!empty($route_directions)) {
                            echo $route_directions;
                        } ?>

                        <?php if(!empty($route_directions_url))
                        { ?>                            
                            <iframe class="alltrails" src="<?php the_field('route_direction_url'); ?>" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="AllTrails: Trail Guides and Maps for Hiking, Camping, and Running"></iframe>
                         <?php } ?>                      
                
                </div>
            </div>
    </div>
  </section>

  <?php get_footer(); ?>