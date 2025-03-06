<div class="col-md-3 col-sm-12">
    <div class="card mb-2">
        <div class="card-header">
            <h5 class="card-title">
                <a class="blog-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                </a>
            </h5>
        </div>
        <div class="card-body">
            <?php get_template_part('meta-content'); ?>
            
            <div class="blog-excerpt">
                <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?php the_field('link_url'); ?>" class="btn btn-outline-success">Find Out More</a>
        </div>
    </div>
</div>
