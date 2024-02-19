<?php get_header(); ?>

<section class="main-section mt-4">
    <div class="container">

        <div class="row mb-4">
            <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
        </div>

      <div class="row">        
        <div class="col-lg-9 col-md-12 blog-posts">
            <h2><?php the_title(); ?></h2>
            <div class="blog-meta">
                <span class="author">Author: <?php $username = get_userdata($post->post_author); ?><?php echo $username->user_nicename; ?></span>
                <span class="date">Published: <?php the_time('F j, Y'); ?></span>
                <span class="date">Category: 
                <?php $categories = get_categories();
                    foreach ($categories as $cat) {
                    $category_link = get_category_link($cat->cat_ID);
                    echo '<a class="cat-link" href="' . esc_url($category_link) . '" title="' . esc_attr($cat->name) . '">' . esc_html($cat->name) . '</a> ';
                    } 
                ?>
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
      </div>
    </div>
  </section>

  <?php get_footer(); ?>