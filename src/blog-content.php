<div class="blog-post">
    <h2 class="blog-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="blog-meta">        
        <span class="author"><strong>Author:</strong> <?php global $post; $author_id = $post -> post_author; $author_url = get_author_posts_url($author_id);$username = get_userdata($post->post_author); echo $username->user_nicename; ?></span>
        <span class="date"><strong>Published:</strong> <?php the_time('F j, Y'); ?></span>
        <span class="date"><strong>Category:</strong> 
            <?php $categories = get_categories();
                foreach ($categories as $cat) {
                $category_link = get_category_link($cat->cat_ID);
                echo '<a href="' . esc_url($category_link) . '" title="' . esc_attr($cat->name) . '">' . esc_html($cat->name) . '</a> ';
                } 
            ?>
        </span>
    </div>
    <div class="blog-excerpt">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/blog-post-1.jpg" alt="Thumbnail" class="thumbnail">
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
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