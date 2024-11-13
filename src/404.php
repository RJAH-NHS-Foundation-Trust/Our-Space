<?php get_header(); ?>

<section class="main-section">
  <div class="container">
    <div class="row text-center">        
      <div class="col-12 blog-posts">
          <img class="img-responsive" width="400px" src="<?php echo get_bloginfo('template_directory'); ?>/img/404-meditation.webp">
          <h2 class="mt-2">You've landed on a page that doesn't exist</h2>
          <p>Take a deep breath and give it another go</p>
      </div> <!-- COL -->
      <div class="col-6">
        <h4>Need urgent help</h4>
        <p>If you feel like you need urgent immediate help, reach out to one of the resources in the Crisis Section</p>
        <a class="btn btn-primary mb-2" href="<?php echo get_option('home'); ?>/crisis">Crisis Help</a>
      </div> <!-- COL -->
      <div class="col-6">
        <h4 class="mb-3">Ready to try again?</h4>
        <p>Once you have found your zen, click the link below to be taken back to the home page.</p>
        <a class="btn btn-primary mb-4" href="<?php echo get_option('home'); ?>">Take Me Home</a>
      </div> <!-- COL -->
    </div> <!-- ROW -->
  </div> <!-- CONTAINER -->
</section> <!-- SECTION -->

<?php get_footer(); ?>