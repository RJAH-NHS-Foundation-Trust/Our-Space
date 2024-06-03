<?php get_header(); ?>

<section class="main-section mt-4">
    <div class="container">

      <div class="row">        
        <div class="col-lg-9 col-md-12 blog-posts">
            <h2><?php the_title(); ?></h2>
            <?php get_template_part( 'meta') ?>
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