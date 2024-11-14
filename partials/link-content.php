<div class="col-4 content-card mb-2">
    <h2 class="blog-title">
        <a class="blog-title" target="_blank" href="<?php echo get_field('link_url') ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </h2>
    <div class="blog-excerpt">        
        <p>
            <?php the_content(); ?>
        </p>        
    </div>
    <?php
        $posttags = get_the_tags(); 
        if ($posttags) 
            {
    ?>    
    <?php } ?>
</div>