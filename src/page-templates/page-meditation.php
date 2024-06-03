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

    <h2 class="mt-4"><?php the_title(); ?></h2>

    <div class="row">
        <div class="col-12">
            <?php the_content(); ?>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 col-md-6 col-6">
            <h3>Introduction To Meditation</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe style="min-width:280px; min-height:157px;" width="560px" height="315px" src="https://www.youtube.com/embed/KM6S6pi7NSs?si=GlFP4i1nf0IHxrGS" title="YouTube video player" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <h3>Body Scan</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe style="min-width:280px; min-height:157px;" width="560px" height="315px"  src="https://www.youtube.com/embed/9XQhkJ3JZFo?si=CcQsR5Wx_zstKDgS" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 col-md-6">
            <h3>Mindful self compassion</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe style="min-width:280px; min-height:157px;" width="560px" height="315px" src="https://www.youtube.com/embed/2aJ7N0eWnBE?si=14FB_rv6cLsR2hr7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <h3>Mindfulness of breathing</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe style="min-width:280px; min-height:157px;" width="560px" height="315px" src="https://www.youtube.com/embed/hbdpluw5d98?si=aArZksjJhc0nd4qS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>       
    </div>
</div>

  </section>

  <?php get_footer(); ?>