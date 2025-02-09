<?php 

    /** 
     * Template Name: Self Help Hub Template
     * 
     * 
    */

    get_header(); 

?>  

<div class="container">

<h2 class="mt-4"><?php the_title(); ?></h2>

<p><?php the_content(); ?></p>

<div class="row mt-2">
    <div class="col-md-4 mb-4">
        <a class="custom-card-link" href="<?php echo get_option('home'); ?>/meditation">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Meditation</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/meditation.webp" class="card-img-top" alt="Meditation">
            <div class="card-body">
              <p class="card-text">Follow along with some guided meditations provided by our fellow NHS Staff member Alex Greenwood, if you have an interest in the benefits of meditation or just want to learn more, there is plenty here for everyone.</p>
            </div>
          </div>
        </a>
      </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/podcasts">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Podcasts</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/podcast.webp" class="card-img-top" alt="Podcasts">
          <div class="card-body">
            <p class="card-text">A collection of Podcasts covering lots of different topics from Depression to ADHD and everything inbetween.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/books">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Books</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/books.webp" class="card-img-top" alt="Books">
          <div class="card-body">
            <p class="card-text">Books can be a great tool to help us learn, here we have a collection of different books across different topics to help you learn more about yourself and others.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/groups">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Groups</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/groups.webp" class="card-img-top" alt="Groups">
        <div class="card-body">
          <p class="card-text">Local support groups, craft groups, walking groups and more. Find something that suits your interests in our group directory.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-md-4 mb-4">
  <a class="custom-card-link" href="<?php echo get_option('home'); ?>/therapy-dogs">
    <div class="card custom-card d-flex flex-column h-100">
      <span class="custom-pill">Therapy Dogs Nationwide</span>
      <img src="<?php echo get_bloginfo('template_directory'); ?>/img/therapy-dogs.webp" class="card-img-top" alt="Therapy Dogs Nationwide">
      <div class="card-body">
        <p class="card-text">Therapy Dogs Nationwide is a national charity where visiting volunteers take their own dogs into establishments to provide comfort, distraction, and stimulation.</p>
      </div>
    </div>
  </a>
</div>
  <div class="col-md-4 mb-4">
  <a class="custom-card-link" href="<?php echo get_option('home'); ?>/shropshire-telford-and-wrekin-staff-wellbeing-hub">
    <div class="card custom-card d-flex flex-column h-100">
      <span class="custom-pill">Shropshire, Telford and Wrekin Staff Wellbeing Hub</span>
      <img src="<?php echo get_bloginfo('template_directory'); ?>/img/wellbeing.webp" class="card-img-top" alt="Shropshire, Telford and Wrekin Staff Wellbeing Hub">
      <div class="card-body">
        <p class="card-text">Shropshire, Telford and Wrekin Staff Wellbeing Hub is available for NHS and Social Care staff who work in Shropshire, Telford and Wrekin. They are highly confidential and don’t routinely contact your workplace or GP and clients can self-refer.</p>
      </div>
    </div>
  </a>
</div> 
<div class="col-md-4 mb-4">
    <a class="custom-card-link" target="_blank" href="https://pomofocus.io/app">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Pomodoro Timer</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/pomodoro-timer.webp" class="card-img-top" alt="Pomodoro Timer">
          <div class="card-body">
            <p class="card-text">The Pomodoro Technique is created by Francesco Cirillo for a more productive way to work and study. The technique uses a timer to break down work into intervals, traditionally 25 minutes in length, separated by short breaks.</div>
        </div>
      </a>
    </div>
</div>

<?php     
    $args = array (
        'post_type' => 'link',  
        'post_status' => 'publish',
        'category_name' => "self-help",
        'orderby' => 'title',
        'order' => 'ASC',
        'paged' => $paged,
        'operator' => 'IN'
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;

if($totalPopularPosts > 0) { ?>

<section class="main-section mt-4">
    <div class="container">

        <div class="row g-grid gap-2 w-100 d-flex">
            <h3>Useful Links </h3>
            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'partials/link-content', get_post_format() );
                    endwhile; ?> </div>
                    <?php bootstrap_pagination($posts);
                endif; wp_reset_postdata();?>
      </div>
  </section>

  <?php } ?>


</div>
</div>
</div>

<?php get_footer(); ?>