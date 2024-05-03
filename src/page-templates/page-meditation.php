<?php 

    /** 
     * Template Name: Meditation Page Template
     * 
     * 
    */

get_header(); 

?>

<section class="main-section mt-4">

<div class="container">

    <div class="row mb-4">
        <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
    </div>

    <h2 class="mt-4"><?php the_title(); ?></h2>

    <div class="row">
        <div class="col-12">
            <?php the_content(); ?>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 col-md-6 col-6">
            <h3>Meditation Tips</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe style="min-width:280px; min-height:157px;" width="560px" height="315px" src="https://www.youtube.com/embed/StDpKqK2k6s?si=oL765giFX5GqmIyh" title="YouTube video player" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <h3>Body Scan</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe style="min-width:280px; min-height:157px;" width="560px" height="315px"  src="https://www.youtube.com/embed/8gfvE8-N3Gg?si=2OGE5aPci-axUK28" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 col-md-6">
            <h3>Mindful self compassion</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe style="min-width:280px; min-height:157px;" width="560px" height="315px" src="https://www.youtube.com/embed/fPjQDuRoAFc?si=c8SQIHFRCVQ7GZ6q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <h3>Mindfulness of breathing</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe style="min-width:280px; min-height:157px;" width="560px" height="315px" src="https://www.youtube.com/embed/JOSq4yaxyYc?si=PKF2DdtflnDwu8c-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>       
    </div>
</div>

  </section>

  <?php get_footer(); ?>