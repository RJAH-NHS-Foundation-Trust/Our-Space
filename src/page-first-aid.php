<?php 

    /** 
     * Template Name: First Aid Template
     * 
     * 
    */

    get_header(); 
  
?>

<div class="container mt-4">
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?> 
</div>

<section class="main-section mt-4">
    <div class="container">
        <div class="row">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim lobortis scelerisque fermentum dui. Fringilla est ullamcorper eget nulla facilisi. Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Sodales ut eu sem integer vitae justo. Cras adipiscing enim eu turpis egestas pretium aenean pharetra magna. Urna duis convallis convallis tellus id. Velit laoreet id donec ultrices tincidunt arcu. Est pellentesque elit ullamcorper dignissim. Convallis aenean et tortor at risus viverra.</p>
        </div>

        <div class="row">
            <?php echo do_shortcode( '[tlpteam id="947" title="Mental Health First Aiders"]' ) ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>