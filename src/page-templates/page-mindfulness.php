<?php 

    /** 
     * Template Name: Mindfulness Page Template
     * 
     * 
    */

get_header(); 

?>

<section class="main-section">
    <div class="container">

      <div class="row">        
        <div class="col-lg-9 col-md-12 blog-posts">
            
        <?php 
    $pageTitle = get_the_title(); 
    $hubTitle = strtok($pageTitle, " ");
    $resourceTitle = 'resources';
?>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);         
    $args = array (
        'post_status' => 'publish',
        'category_name' => "$hubTitle + $resourceTitle",
        'meta_key' => 'wpb_post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC', 
        'posts_per_page' => 8, 
        'paged' => $paged  
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;

if($totalPopularPosts > 0) { ?>

<section class="main-section">
    <div class="container">
      <div class="row g-grid gap-2 w-100 d-flex">
            <h3>Popular <?php echo $hubTitle; ?> Resources </h3>
            
            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'content', get_post_format() );
                    endwhile;?> </div>
                    <?php bootstrap_pagination($posts);
                endif; wp_reset_postdata(); ?>
    </div>
  </section>

  <?php } ?>

<?php          
    $args = array (
        'post_status' => 'publish',
        'category_name' => $hubTitle,
        'order'          => 'desc',
        'orderby'        => 'publish_date',    
    );

    $posts = new WP_Query( $args );
    $totalRecentPosts = $posts -> found_posts;

if($totalRecentPosts > 0) { ?>

  <section class="main-section">
    <div class="container">
        <div class="row">    
            
            <h3>Recent <?php echo $hubTitle; ?> Posts </h3>      
            
            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'content', get_post_format() );
                    endwhile; endif; wp_reset_postdata();?>
      </div>      
    </div>
  </section>

<?php } ?>

        </div>

        <?php get_sidebar() ?>
        
      </div>
    </div>
  </section>

  <?php get_footer(); ?>