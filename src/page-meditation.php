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
        <div class="col-lg-8 col-md-8 col-12">
            <?php the_content(); ?>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img class="page-profile-pic mb-3" src="<?php echo get_bloginfo('template_directory'); ?>/img/profile-pic/profile-pic.jpg" />
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" style="width: 100%" src="https://www.youtube.com/embed/z0GtmPnqAd8?si=jrKIWd9NBiM66SAT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" style="width: 100%" src="https://www.youtube.com/embed/8zfQvchPkqQ?si=tbNOXiI7zfDcHx-S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="mt-3 mb-3 text-center">
                <h4>"Brilliant things happen in calm minds. Be calm. You're brilliant."</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" style="width: 100%"src="https://www.youtube.com/embed/mF726pfBINI?si=DDl6ptqeTF5UVNni" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" style="width: 100%" src="https://www.youtube.com/embed/0bpYcXx7qTs?si=3pfeRn7J7oJVz97i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

  </section>

  <?php get_footer(); ?>