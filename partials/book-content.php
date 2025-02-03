<div class="col-md-3 col-sm-12 card mb-2">
    <?php $book_cover = get_field('book_cover');
    if(!empty($book_cover))
    { ?>
        <img class="card-img-top" src="<?php the_field('book_cover'); ?>" alt="<?php get_the_title(); ?>">
    <? } else { ?>
        <img class="card-img-top" src="<?php echo get_bloginfo('template_directory'); ?>/img/no-book-cover.webp" alt="No Book Cover Found">
        <?php } ?>
        
    <div class="card-body">
        <h5 class="card-title"><a class="blog-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
        <?php get_template_part( 'meta-content') ?>
        
        <div class="blog-excerpt">
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

        </div> <!-- Blog Tags -->
        <?php } ?>
    </div>
</div> 