<div class="col-4 content-card mb-2">
    <h2 class="blog-title"><a class="blog-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="blog-tags">
    <?php
        // Get the post ID
        $post_id = get_the_ID();
        
        $body_areas = wp_get_post_terms( $post_id, 'body_area' );
        $difficulties = wp_get_post_terms( $post_id, 'workout-difficulty' );

        // Check if any terms were found
        if ( ! empty( $body_areas  ) && ! is_wp_error( $body_areas  ) ) {

            // Loop through each term and display it as an option
            foreach ( $body_areas  as $body_area ) { ?>
                <span class="tag mb-1">
                    <?php echo '<a class="text-white" href="' . $body_area->name . '">' . $body_area->name . '</a>'; ?>
                </span>                
            <?php }
        }

        // Check if any terms were found
        if ( ! empty( $difficulties  ) && ! is_wp_error( $difficulties  ) ) {

            // Loop through each term and display it as an option
            foreach ( $difficulties  as $difficulty ) { ?>
                <span class="tag mb-1">
                    <?php echo '<a class="text-white" href="' . $difficulty->name . '">' . $difficulty->name . '</a>'; ?>
                </span>                
            <?php }
        }


    ?>
    </div>
    <div class="blog-excerpt">
        <?php if(has_post_thumbnail()) { ?>
        <img src="<?php the_post_thumbnail_url() ?>" alt="<? the_title(); ?>" class="thumbnail">
        <?php } ?>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-outline-success">Read More</a>
    </div>
    <?php
        $posttags = get_the_tags(); 
        if ($posttags) 
            {
    ?>
    <?php } ?>
</div>