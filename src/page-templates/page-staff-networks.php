<?php 

    /** 
     * Template Name: Staff Networks Page Template
     * 
     * 
    */

    get_header(); 
  
?>

<div class="container mt-4">
    
    <div class="row mb-4">
        <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
    </div>
    
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p> 

    <div class="row">
        <h4>LGBTQIA+ Staff network Group</h4>
        <span><strong>Network Chair:</strong> Martine Williams</span>
        <span><strong>Email Address:</strong> <a href="mailto:Martine.williams@nhs.net">Martine.williams@nhs.net</a></span>
        <p></p>

        <h4>Menopause Network and Champions</h4>
        <span><strong>Network Chair:</strong> Vacant</span>
        <span><strong>Email Address:</strong> <a href="mailto:rjah.edi.od@nhs.net">rjah.edi.od@nhs.net</a></span>
        <p></p>

        <h4>Ethnic Diverse Staff Network group </h4>
        <span><strong>Network Chair:</strong> Shashank Chitgopkar</span>
        <span><strong>Email Address:</strong> <a href="mailto:shashank.chitgopkar1@nhs.net">shashank.chitgopkar1@nhs.net</a></span>
        <p></p>

        <h4>Disability and Neuro-Diverse Group </h4>
        <span><strong>Network Chair:</strong> Ellie Baldwin</span>
        <span><strong>Email Address:</strong> <a href="mailto:ellie.baldwin1@nhs.net">ellie.baldwin1@nhs.net</a></span>
        <p></p>
    
    </div>

</div>

  <?php get_footer(); ?>