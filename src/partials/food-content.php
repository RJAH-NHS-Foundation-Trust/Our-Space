<div class="col-4 content-card mb-2 banner-card">
    <?php $posttags = get_the_tags();
    if($posttags) { ?>
    <div class="banner-text">
    <?php 
        if ($posttags) {
            foreach ($posttags as $tag) { 
                echo $tag->name; 
            } 
        } ?>
    </div> <?php } ?>
    <?php if(has_post_thumbnail()) { ?>
        <img src="<?php the_post_thumbnail_url() ?>" alt="Thumbnail" class="thumbnail">
        <?php } else { ?>
            <img class="img-fluid mb-2" src="<?php echo get_bloginfo('template_directory'); ?>/img/food-default.webp" alt="Featured Image">
        <?php } ?>   
    <h2 class="food-title"><a class="food-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="blog-tags">        
        <?php 
            // Retrieve terms for the custom taxonomy 'diet'
            $diet_terms = get_the_terms(get_the_ID(), 'diet');

            // Check if there are any terms
            if ($diet_terms && !is_wp_error($diet_terms)) {
                foreach($diet_terms as $term) { ?>
                    <span class="tag">
                    <?php echo '<a class="tag-link" href="' . get_term_link($term->term_id, 'diet') . '">' . $term->name . '</a>'; ?>
                    </span>
                <?php }
            }
        ?>
    </div>
    <?php get_template_part('meta-content') ?>
    <div class="blog-excerpt">
        <?php if (has_post_thumbnail()) { ?>
            <img src="<?php the_post_thumbnail_url() ?>" alt="Thumbnail" class="thumbnail">
        <?php } ?>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-outline-success">Let's Cook</a>
    </div>   
</div>
