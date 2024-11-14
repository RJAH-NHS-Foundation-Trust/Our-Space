<?php 

    /** 
     * Template Name: Top Level Hub Page
     * Template Post Type: post, page, hub
     * 
     * 
    */

    get_header(); 

?>  

<div class="container">

<h2 class="mt-4"><?php the_title(); ?></h2>

    <p><?php the_content(); ?></p>

    <div class="row mt-2">
        <?php
            $current_page_id = get_the_ID();
            $parent_page_id = wp_get_post_parent_id($current_page_id);
            $section_page_id = $parent_page_id ? $parent_page_id : $current_page_id;

            $args = array(
                'post_status' => 'publish',
                'post_parent' => $section_page_id, 
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'post_type' => 'page',
            );

            $posts = new WP_Query($args);
            $totalPosts = $posts->found_posts;

            if ($totalPosts > 0) { 
                if ($posts->have_posts()) :  
                    while ($posts->have_posts()) : $posts->the_post();
                        get_template_part('partials/child-hub-cards', get_post_format());
                    endwhile;
                endif;
                wp_reset_postdata();
            }
        ?>

    </div> <!-- ROW END -->
</div>
</div>
</div>

<?php get_footer(); ?>