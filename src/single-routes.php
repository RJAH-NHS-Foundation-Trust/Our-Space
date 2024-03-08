<?php get_header(); ?>

<section class="main-section mt-4">
    <div class="container">

        <div class="row mb-4">
            <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
        </div>

        <div class="row">
            <div class="col-6">
                {MAP GOES HERE}
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
                    
                <div class="mt-3 fst-italic">
                    <?php the_excerpt(); ?>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-4">
                        <h6>Total Length</h6>
                        <span><?php the_field('total_length'); ?></span>
                    </div>
                    <div class="col-4">
                        <h6>Difficulty</h6>
                        <span><?php the_field('difficulty'); ?></span>
                    </div>
                    <div class="col-4">
                        <h6>Estimated Completion Time</h6>
                        <span><?php the_field('estimated_completion_time'); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-12 col-12 col-12">
                <h3>Directions</h3>
                <?php the_field('directions'); ?>
            </div>
        </div>




      <!-- <div class="row">        
        <div class="col-lg-9 col-md-12 blog-posts">
            <div class="blog-meta">
                <span class="author">Author: <?php $username = get_userdata($post->post_author); ?><?php echo $username->user_nicename; ?></span>
                <span class="date">Published: <?php the_time('F j, Y'); ?></span>
                <span class="date">Category: 
                </span>
            </div>
            <?php the_content() ?>
            <?php
                $posttags = get_the_tags(); 
                if ($posttags) 
                {
            ?>
            <div class="blog-tags mb-4">
                
                <?php                              
                    foreach($posttags as $tag) 
                    { ?> 
                        <span class="tag">
                        <?php echo $tag->name . ' '; ?>
                        </span>
                   <?php }                            
                ?>
                
            </div>
        <?php } ?>
        </div>
        <?php get_sidebar() ?>
      </div> -->
    </div>
  </section>

  <?php get_footer(); ?>