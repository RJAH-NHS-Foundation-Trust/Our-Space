<div class="col-md-4 blog-post mr-2">
    <h2 class="blog-title"><a class="blog-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="blog-meta">        
        <div class="mb-2 mt-2">
            <?php
                $post_id = get_the_ID();
                $categories = get_the_category($post_id);

                foreach ($categories as $cat) {
                    $category_link = get_category_link($cat->cat_ID);
                    echo '<a  class="custom-category-pill" href="' . esc_url($category_link) . '" title="' . esc_attr($cat->name) . '">' . esc_html($cat->name) . '</a> ';
                }
                ?>
            </span>
        </div>
    </div>
    <div class="blog-excerpt">
        <img src="<?php the_field('book_cover'); ?>" alt="Thumbnail" class="thumbnail">
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