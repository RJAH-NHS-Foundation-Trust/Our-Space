<div class="col-4 content-card mb-2">
    <h2 class="blog-title"><a class="blog-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part( 'meta-content') ?>
    <div class="blog-excerpt">
        <?php $book_cover = get_field('book_cover');
        if(!empty($book_cover))
        { ?>
            <img src="<?php the_field('book_cover'); ?>" alt="Thumbnail" class="thumbnail">
        <? } ?>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_field('purchase_link'); ?>" class="btn btn-outline-success">Find Out More</a>
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