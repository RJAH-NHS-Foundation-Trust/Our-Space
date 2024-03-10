<div class="col-md-4 blog-post mr-2">
    <h2 class="blog-title"><a class="blog-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part( 'meta') ?>
    <div class="blog-excerpt">
        <img src="<?php the_field('podcast_art'); ?>" alt="Thumbnail" class="thumbnail">
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_field('podcast_page_link'); ?>" class="btn btn-outline-success">Find Out More</a>
        <a href="<?php the_field('podcast_subscribe_url'); ?>" class="btn btn-outline-success">Subscribe</a>
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