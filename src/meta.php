<div class="blog-meta">
    <span class="author"><strong>Author:</strong> <?php $username = get_userdata($post->post_author); ?><?php echo $username->user_nicename; ?></span>
    <span class="date"><strong>Published:</strong> <?php the_time('F j, Y'); ?></span>
    <div class="row mt-3 mb-3">
    <?php
        $post_id = get_the_ID();
        $categories = get_the_category($post_id);
        if(!empty($categories)) { ?>
            <?php foreach ($categories as $cat) { ?>
                <span class="date"> 
                <?php $category_link = get_category_link($cat->cat_ID);
                echo '<a  class="custom-category-pill" href="' . esc_url($category_link) . '" title="' . esc_attr($cat->name) . '">' . esc_html($cat->name) . '</a> ';
            } ?>
            </span>
        <?php } ?>
        </div>
    </div>