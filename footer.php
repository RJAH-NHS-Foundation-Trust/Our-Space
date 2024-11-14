<footer>
    <div class="container">
        <div class="row">
            <p>OurSpace Copyright <?php echo date("Y"); ?> 
            <a class="footer-link" href="https://www.rjah.nhs.uk">The Robert Jones & Agnes Hunt NHS Foundation Trust</a></p>
            <p>Linked content copyright of it's respective owner unless otherwise stated</p>
        </div>
        <div class="row">
          <div class="col-12">
            <a href="https://www.friendsrjah.org.uk/" target="_blank">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/lof-logo.webp" alt="LOF Logo"  class="footer-image"/>
            </a>
          </div>
        </div>
    </div>
</footer>

  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.bundle.min.js"></script>
  
  <?php
    include(get_template_directory() . '/utilities/icons.php');
  ?>

  <?php wp_footer();?>
</body>
</html>