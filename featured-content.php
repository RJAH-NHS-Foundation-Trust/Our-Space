    <h2 class="blog-title"><a class="blog-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="blog-meta">        
        <span class="author"><strong>Author:</strong> <?php global $post; $author_id = $post -> post_author; $author_url = get_author_posts_url($author_id);$username = get_userdata($post->post_author); echo $username->user_nicename; ?></span>
        <span class="date"><strong>Published:</strong> <?php the_time('F j, Y'); ?></span>
        <div class="mb-2 mt-2">
            <span class="date"><strong>Category:</strong> 
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
        <a href="<?php the_permalink(); ?>" class="btn btn-outline-success mt-2">Read More</a>
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
