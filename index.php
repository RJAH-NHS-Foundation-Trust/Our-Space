<?php get_header(); ?>

    <?php $array = ["One specific aspect of mindfulness is awareness.","One specific aspect of mindfulness is awareness.","Mindfulness is a deceptively simple way of relating to all experience that can reduce suffering and set the stage for positive personal transformation.","We can talk about mindfulness or write at length about it, but to truly understand mindfulness, we have to experience it directly.","Mindfulness is the capacity to perceive our world clearly, without adulteration or manipulation.","We are all mindful to one degree or another, moment by moment. It is an inherent human capacity.","It is only when the mind is open and receptive that learning and seeing and change can occur."];?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="jumbotron-title"><? echo $array[array_rand($array, 1)]; ?></h1>
        </div>
    </div>

  <section class="main-section mt-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="section">
            <h3 class="section-title">Playlists to work to</h3>
            <p class="section-content"><iframe style="border-radius:12px; background-color: red !important;" src="https://open.spotify.com/embed/playlist/0vvXsWCC9xrXsKd4FyS8kM?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></p>
            <a href="https://open.spotify.com/playlist/0vvXsWCC9xrXsKd4FyS8kM?si=15b83acfe4ef46c3" target="_blank" class="btn btn-primary section-button">Add to Spotify</a>
          </div>
          <div class="section mt-4">
            <h2 class="section-title">Video of the week</h2>
            <p class="section-content"><iframe width="100%" src="https://www.youtube-nocookie.com/embed/v7AYKMP6rOE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
            <a href="<?php echo get_option('home'); ?>/youtube-archive/"  class="btn btn-primary section-button">View the archives</a>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 blog-posts">
        <?php                
            $args = array (
                'post_status' => 'publish',
                'post_type' => 'post',
                'order'          => 'desc',
                'orderby'        => 'publish_date',
                'posts_per_page' => 4,
            );

            $posts = new WP_Query( $args );
            
            if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'blog-content', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
        ?>
        </div>
        <?php get_sidebar() ?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>