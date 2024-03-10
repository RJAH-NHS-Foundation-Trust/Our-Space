<?php get_header(); ?>

<section class="main-section mt-4">
    <div class="container">

        <div class="row mb-4">
            <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
        </div>

        <div class="row">
            <div class="col-6">
                <img class="img-fluid mb-2" src="<?php the_field('podcast_art'); ?>" />
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
                    <?php the_content(); ?>
                </div>
                <a href="<?php the_field('podcast_page_link'); ?>" class="btn btn-outline-success">Find Out More</a>
                <a href="<?php the_field('podcast_subscribe_url'); ?>" class="btn btn-outline-success">Subscribe</a>                
            </div>
        </div>
    </div>
  </section>

  <?php get_footer(); ?>