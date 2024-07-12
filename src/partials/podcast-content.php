<div class="col-md-4 content-card mr-2">
    <h2 class="blog-title"><a class="blog-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part( 'meta-content') ?>
    <div class="blog-excerpt">
        <?php $podcast_art = get_field('podcast_art'); ?>
        <?php if(!empty($podcast_art)) { ?>
        <img src="<?php the_field('podcast_art'); ?>" alt="Thumbnail" class="thumbnail"> 
        <?php } ?>
        <p><?php the_excerpt(); ?></p>
        <div class="row mb-1">
            <?php $more_info_link = get_field('podcast_page_link'); ?>
            <?php if(!empty($more_info_link)) { ?>
            <a href="<?php the_field('podcast_page_link'); ?>" class="btn btn-outline-success">Find Out More</a>
            <?php } ?>
        </div>
        <div class="row mb-1">
            <?php $subscribe_link = get_field('podcast_subscribe_url'); ?>
            <?php if(!empty($podcast_art)) { ?>
            <a href="<?php echo get_field('podcast_subscribe_url'); ?>" class="btn btn-outline-success">Subscribe</a>
            <?php } ?>
        </div>
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