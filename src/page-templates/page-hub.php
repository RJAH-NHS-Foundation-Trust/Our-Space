<?php 

    /** 
     * Template Name: Hub Page Template
     * 
     * 
    */

    get_header();
    $excluded_category_id = get_cat_ID('Resources');  

?>

<section class="main-section mt-4">
    <div class="container">

        <div class="row mb-4">
            <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
        </div>

      <div class="row">        
        <div class="col-lg-9 col-md-12 blog-posts">
            
        <?php 
    $pageTitle = get_the_title(); 
    $hubTitle = $pageTitle;
    $resourceTitle = 'resources';
    $linkTitle = 'link';
?>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);         
    $args = array (
        'post_status' => 'publish',
        'category_name' => "$hubTitle + $resourceTitle",
        'meta_key' => 'wpb_post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'paged' => $paged,
        'operator' => 'IN',  
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;

if($totalPopularPosts > 0) { ?>

<section class="main-section mt-4">
    <div class="container">
      <div class="row g-grid gap-2 w-100 d-flex">    
            <h3>Popular <?php echo $hubTitle; ?> Resources </h3>
            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'partials/content', get_post_format() );
                    endwhile; ?> </div>
                    <?php bootstrap_pagination($posts);
                endif; wp_reset_postdata();       
            ?>
      </div>
  </section>

  <?php } ?>

<?php             
    $args = array (
        'post_status' => 'publish',
        'category_name' => $hubTitle,
        'order'          => 'desc',
        'orderby'        => 'publish_date', 
        'operator' => 'IN',  
    );

    $posts = new WP_Query( $args );
    $totalRecentPosts = $posts -> found_posts;

if($totalRecentPosts > 0) { ?>

  <section class="main-section mt-4">
    <div class="container">
      <div class="row g-grid gap-2 w-100 d-flex">    
            
            <h3>Recent <?php echo $hubTitle; ?> Posts </h3>
      
            
            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'partials/content', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
        ?>

        <a class="btn btn-primary mb-2" href="<?php echo get_option('home'); ?>/category/<?php echo strtolower($hubTitle); ?>">View All Posts</a>

      </div>      
    </div>
  </section>

<?php } else { echo '<p>No posts found in ' . $pageTitle . ' category.</p>'; }  ?>

<?php     
    $args = array (
        'post_type' => 'link',  
        'post_status' => 'publish',
        'category_name' => "$hubTitle",
        'orderby' => 'title',
        'order' => 'ASC',
        'paged' => $paged,
        'operator' => 'IN',  
        'category__not_in' => array($excluded_category_id), 
    );

    $posts = new WP_Query( $args );
    $totalPopularPosts = $posts -> found_posts;

if($totalPopularPosts > 0) { ?>

<section class="main-section mt-4">
    <div class="container">

        <div class="row g-grid gap-2 w-100 d-flex">
            <h3><?php echo $hubTitle; ?> Links </h3>
            <?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                get_template_part( 'partials/link-content', get_post_format() );
                    endwhile; ?> </div>
                    <?php bootstrap_pagination($posts);
                endif; wp_reset_postdata();?>
      </div>
  </section>

  <?php } ?>


        </div>

        <?php get_sidebar() ?>

      </div>
    </div>
  </section>

  <?php get_footer(); ?>