<?php 

    /** 
     * Template Name: Finances Hub Template
     * 
     * 
    */

    get_header(); 

?>  

<div class="container">

<div class="row mb-2 mt-4">
  <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
</div>

<h2 class="mt-4"><?php the_title(); ?></h2>

<p><?php the_content(); ?></p>

<div class="row mt-2">
    <!-- First Card -->
    <div class="col-md-4 mb-4">
        <a class="custom-card-link" target="_blank" href="https://www.moneyhelper.org.uk/">
          <div class="card custom-card d-flex flex-column h-100">
            <span class="custom-pill">Money Helper</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/money-helper.png" class="card-img-top" alt="Image Alt">
            <div class="card-body">
              <p class="card-text">Use the MoneyHelper Service to provide free, independent and impartial advice – via telephone (0800 448 0826), WhatsApp (+44 7701 342 744).</p>
            </div>
          </div>
        </a>
      </div>

    <!-- Second Card -->
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/discount-codes">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Discount Codes</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/discount-codes.png" class="card-img-top" alt="Image Alt">
          <div class="card-body">
            <p class="card-text">Find discount codes that you can use in every day life to help make a few extra savings.</p>
          </div>
        </div>
      </a>
    </div>
</div>
</div>

<?php get_footer(); ?>