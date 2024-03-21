<div class="col-4 content-card mb-3">
    <h2 class="blog-title"><a class="blog-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part( 'meta-content') ?>
    <div class="blog-excerpt">
        <?php if(has_post_thumbnail()) { ?>
        <img src="<?php the_post_thumbnail_url() ?>" alt="Thumbnail" class="thumbnail">
        <?php } else { ?>
            <img class="img-fluid mb-2" src="<?php echo get_bloginfo('template_directory'); ?>/img/route-image-default.png" alt="Featured Image">
        <?php } ?>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-outline-success">Explore</a>
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