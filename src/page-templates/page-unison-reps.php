<?php 

    /** 
     * Template Name: Unison Rep Template
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
            <p>The details of the RJAH Branch Unison reps can be found below.</p>
        </div>

        <div class="row">
            <?php echo do_shortcode( '[tlpteam id="2045" title="Unison Reps"]' ) ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>