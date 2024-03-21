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
                echo 'No featured image found.';
            }
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
                    
                <div class="mt-3 fst-italic">
                    <?php the_excerpt(); ?>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-4">
                        <h6>Total Time</h6>
                        <span><?php the_field('total_time'); ?></span>
                    </div>
                    <div class="col-4">
                        <h6>Prep Time</h6>
                        <span><?php the_field('prep_time'); ?></span>
                    </div>
                    <div class="col-4">
                        <h6>Cook Time</h6>
                        <span><?php the_field('cook_time'); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="ingredients-card mb-2 mt-2">
                    
                    <h3 class="mt-2">Ingredients</h3>                    
                    
                    <?php 
                    $direction = get_field('ingredients');

                    if(!empty($direction))
                    {
                        the_field('ingredients');
                    } else 
                    {
                        echo 'No Ingredients Provided';
                    } ?>

                </div>
            </div>
            <div class="col-lg-6 col-6 col-12">
                <h3>Directions</h3>
                <?php 
                    $direction = get_field('directions');

                    if(!empty($direction))
                    {
                        the_field('directions');
                    } else 
                    {
                        echo 'No Directions Provided';
                    } ?>

                <h3>Notes</h3>

                <?php 
                    $direction = get_field('notes');

                    if(!empty($direction))
                    {
                        the_field('notes');
                    } else 
                    {
                        echo 'No Notes Provided';
                    } ?>

                <h3>Storage</h3>

                <?php 
                    $direction = get_field('storage');

                    if(!empty($direction))
                    {
                        the_field('storage');
                    } else 
                    {
                        echo 'No Storage Instructions Provided';
                    } ?>
            </div>
        </div>      
    </div>
  </section>

  <?php get_footer(); ?>