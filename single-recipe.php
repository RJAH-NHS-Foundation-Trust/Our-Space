<?php get_header(); ?>

<section class="main-section">
    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-6 order-lg-1">
            <?php

            global $post;

            if (has_post_thumbnail($post->ID)) {

                $featured_image_url = get_the_post_thumbnail_url($post->ID);
                
                echo '<img class="img-fluid mb-2" src="' . $featured_image_url . '" alt="'. the_title()  .'" />';
            } else { ?>

                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/food-default.webp" alt="<?php get_the_title(); ?>" />
            <?php }
            ?>

            </div>
            <div class="col-12 col-lg-6 order-lg-2">
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
                    <?php $total_time = get_field('total_time');
                    if(!empty($total_time))
                    { ?>
                        <h6>Total Time</h6>
                        <span><?php the_field('total_time'); ?></span>
                    <?php } ?>
                    </div>
                    <div class="col-4">
                    <?php $prep_time = get_field('prep_time');
                    if(!empty($prep_time))
                    { ?>
                        <h6>Prep Time</h6>
                        <span><?php the_field('prep_time'); ?></span>
                        <?php } ?>
                    </div>
                    <div class="col-4">
                    <?php $cook_time = get_field('cook_time');
                    if(!empty($cook_time))
                    { ?>
                        <h6>Cook Time</h6>
                        <span><?php the_field('cook_time'); ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="ingredients-card mb-4 mt-4">
                    
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
            <div class="col-lg-6 col-6 col-12 mb-4 mt-4">
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

                <h3 class="mt-2">Storage</h3>

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