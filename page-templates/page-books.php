<?php 

    /** 
     * Template Name: Books Page Template
     * 
     * 
    */

    get_header(); 
  
?>

<div class="container mt-4">
    
    <h2><?php the_title(); ?></h2>

</div>

    <section>
        <div class="container">
            <p><?php the_content(); ?></p> 
        </div>
    </section>

    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);      
    $args = array (
        'post_status' => 'publish',
        'post_type' => 'book',
        'orderby' => 'date',
        'posts_per_page' => 8,
        'order' => 'DESC',  
        'paged' => $paged,
        'orderby' => 'title',
        'order' => 'ASC',   
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;?>


    <section>
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body neuro-card d-flex align-items-center">
                                <img style="width:100px" class="me-3" src="<?php echo get_bloginfo('template_directory'); ?>/img/library-logo.webp">
                                <div>
                                    <p class="card-text text-white">The RJAH Library has a large collection of books covering a large range of topics, you can view all of the books they have in their own catalogue which can be found by clicking the link below.</p>
                                    <a class="btn btn-primary" target="_blank" href="https://rjah.koha-ptfs.co.uk/cgi-bin/koha/opac-shelves.pl?op=view&shelfnumber=1541&sortfield=title">RJAH Wellbeing Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </section>

    <?php if($totalPopularPosts > 0) { ?>

    <section class="main-section">
        <div class="container">
            <div class="row gap-2 w-100 d-flex justify-content-center">
                <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                    get_template_part( 'partials/book-content', get_post_format() );
                endwhile; ?> 
            </div>
            <?php bootstrap_pagination($posts);
            endif; wp_reset_postdata(); ?>
        </div>
    </section>

    <?php } ?>

  <?php get_footer(); ?>