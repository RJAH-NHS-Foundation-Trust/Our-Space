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

<section class="main-section">
    <div class="container">

        <div class="row mt-4">
            <p>Our Mental Health First Aiders can be a first point of contact and reassurance if staff are experiencing any kind of mental health related issue. They can listen, provide comfort, and guide towards the right support.</p>
        </div>

        <div class="row">
            <?php echo do_shortcode( '[tlpteam id="947" title="Mental Health First Aiders"]' ) ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>