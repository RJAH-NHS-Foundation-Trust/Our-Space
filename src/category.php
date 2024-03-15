<?php 

    /** 
     * Category Page
     * 
     * 
    */

    get_header(); 
  
?>

<div class="container mt-4">
    
    <div class="row mb-4">
        <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
    </div>
    
    <h2>Category: <?php single_cat_title('' , true ) ?></h2>    

<section class="main-section mt-4">
    <div class="container">
        <div class="row g-grid gap-2 w-100 d-flex">
        <?php
          // The Loop
          while ( have_posts() ) : the_post(); ?>
          <div class="blog-post">
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
            
          <div class="entry">
          <?php the_excerpt(); ?>
          </div>
          </div>
            
          <?php endwhile; ?>
      </div>
    </div>
  </section>
</div>

  <?php get_footer(); ?>