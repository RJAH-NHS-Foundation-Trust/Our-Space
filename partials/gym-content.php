<div class="col-4 content-card mb-2">
    <h2 class="blog-title"><a class="blog-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="blog-tags">        
        <?php 
            // Retrieve terms for the custom taxonomy 'location'
            $location_terms = get_the_terms(get_the_ID(), 'location');

            // Check if there are any terms
            if ($location_terms && !is_wp_error($location_terms)) {
                foreach($location_terms as $term) { ?>
                    <span class="tag">
                    <?php echo '<a class="tag-link" href="' . get_term_link($term->term_id, 'location') . '">' . $term->name . '</a>'; ?>
                    </span>
                <?php }
            }
        ?>
    </div>
    <?php get_template_part( 'meta-content') ?>
    <div class="blog-excerpt">
        <?php if(has_post_thumbnail()) { ?>
        <img src="<?php the_post_thumbnail_url() ?>" alt="<?php get_the_title(); ?>" class="thumbnail">
        <?php } ?>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-outline-success">Read More</a>
    </div>
    <?php
        $posttags = get_the_tags(); 
        if ($posttags) 
            {
    ?>
    <div class="blog-tags">        
    <?php                              
        foreach($posttags as $tag) 
        { ?>
            <span class="tag">
            <?php echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>'; ?>
            </span>

    <?php } ?>

    </div>
    <?php } ?>
</div>