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

    <h3>Introduction to meditation</h3>
    <p>The two videos within this section should be watched in order, the first, an introduction and the second being instructive with a meditation included</p>

    <div class="row mb-2">
        <div class="col-lg-6 col-md-6">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" style="width: 100%" src="https://www.youtube.com/embed/ikdAVAiwlEQ?si=EYs-xO0SGAR_om2k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" style="width: 100%" src="https://www.youtube.com/embed/yuK70qfnGdk?si=fpYdyeFYMnzmZhQW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <h3>Single 30 or longer Minute Meditation Sessions</h3>
    <p>A collection of longer guided meditation sessions which can be used to release stresses and anxiety</p>

    <div class="row mb-2">
        <div class="col-lg-6 col-md-6">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" style="width: 100%"src="https://www.youtube.com/embed/I1E0CPzvSnc?si=-kORs8TaYipW_FBT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <h3>Single 15 Minute Meditation Sessions</h3>
    <p>A collection of shorter meditation videos that you could follow during a break</p>

    <div class="row mb-2">
        <div class="col-lg-6 col-md-6">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" style="width: 100%"src="https://www.youtube.com/embed/z0GtmPnqAd8?si=hYMtYLOi8gEnRHXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" style="width: 100%"src="https://www.youtube.com/embed/xv-ejEOogaA?si=imKaF161P_a-5Mms" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>        
    </div>

    <h3>App For Your Device</h3>

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12 text-center">
            <p>Embrace the endless benevolence of the ‘Absolute Existence’ with Amrit Varsha App! Explore abundant audio tracks, array of chants, kirtans, meditation and relaxation techniques. Amirt Varsha connects you with the experience of attaining the realm of inner quietude!</p>
            <a href="https://www.gurumaa.com/store/amrit-varsha-app" target="_blank" class="btn btn-primary">Download The App (Select the free version)</a>
        </div>
    </div>
</div>

  </section>

  <?php get_footer(); ?>