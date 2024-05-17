<?php get_header(); ?>

<section class="main-section mt-4">
    <div class="container">

        <div class="row mb-4">
            <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
        </div>

        <div class="row">
        <div class="col-6">    
                <div class="card p-3 border-0">
                    <div class="ratio ratio-1x1">
                    <iframe src="<?php the_field('dayout_location'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
                    </div>
                </div>
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
                    
                <div class="mt-3">
                    <?php the_content(); ?>
                </div> 
                <a class="btn btn-primary mb-2" target="_blank" href="<?php the_field('dayout_website'); ?>">Visit Website</a>                  
            </div>
        </div>
    </div>
  </section>

  <?php get_footer(); ?>