<?php get_header(); ?>

<section class="main-section mt-4">
  <div class="container">
    <div class="row">        
      
        <?php
          // Check if we are on a taxonomy archive page
          if ( is_tax( 'diet' ) ) {
            $term = get_queried_object();
            $args = array(
              'post_type' => 'recipe', // Your custom post type slug
              'tax_query' => array(
                array(
                  'taxonomy' => 'diet',
                  'field' => 'slug',
                  'terms' => $term->slug,
                ),
              ),
            );
            $query = new WP_Query( $args );

            // The Loop
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
                ?>
                <div class="blog-post">
                  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                  <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                  <div class="entry">
                    <?php the_excerpt(); ?>
                    <p class="postmetadata"></p>
                  </div>
                </div>
                <?php
              }
              wp_reset_postdata();
            } else {
              echo 'No posts found';
            }
          } else {
            // If not on taxonomy archive, display regular loop
            while ( have_posts() ) : the_post();
            ?>
              <div class="blog-post">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                <div class="entry">
                  <?php the_excerpt(); ?>
                  <p class="postmetadata"></p>
                </div>
              </div>
            <?php
            endwhile;
          }
        ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
