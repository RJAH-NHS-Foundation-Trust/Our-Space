<?php get_header(); ?>

<div class="jumbotron">
    <div class="container">
        <h1 class="jumbotron-title">Few of us ever live in the present. We are forever anticipating what is to come or remembering what has gone.</h1>
        <p class="jumbotron-description">Louis L'Amour</p>
    </div>
</div>


<section class="main-section mt-4">
    <div class="container">
      <div class="row">        
        <div class="col-lg-9 col-md-12 blog-posts">
            <h2><?php single_cat_title(); ?></h2>



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