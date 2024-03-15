<?php get_header(); ?>

<section class="main-section mt-4">
    <div class="container">
      <div class="row">        
        <div class="col-12 blog-posts text-center">
            <h2>You've landed on a page that doesn't exist</h2>
            <p>Take a deep breath and give it another go</p>

            <h4>Need urgent help</h4>

            <a class="btn crisis-help mb-2" href="<?php echo get_option('home'); ?>/crisis">Crisis Help</a>

            <h4>Ready to try again?</h4>

            <a class="btn btn-primary mb-2" href="<?php echo get_option('home'); ?>">Take Me Home</a>

        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>