<?php get_header(); ?>

<section class="main-section mt-4">
    <div class="container">
      <div class="row">        
        <div class="col-lg-9 col-md-12 blog-posts">
        <?php
          // The Loop
          while ( have_posts() ) : the_post(); ?>
          <div class="blog-post">
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
            
          <div class="entry">
          <?php the_excerpt(); ?>
            
            <p class="postmetadata"></p>
          </div>
          </div>
            
          <?php endwhile; ?>
        </div>
        <?php get_sidebar() ?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>