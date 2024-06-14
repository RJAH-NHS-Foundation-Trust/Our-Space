<div class="col-4 content-card mb-2">
    <h2 class="blog-title">
        <a class="blog-title" target="_blank" href="<?php echo get_field('article_link') ?>"><?php the_title();?></a>
    </h2>
    <div class="blog-excerpt">        
        <p>
            <?php the_excerpt(); ?>
        </p>        
    </div>
    <?php
        $posttags = get_the_tags(); 
        if ($posttags) 
            {
    ?>    
    <?php } ?>
</div>