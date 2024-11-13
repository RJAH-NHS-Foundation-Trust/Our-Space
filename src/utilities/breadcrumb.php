<?php  
    $pagename = str_replace('/','',str_replace(get_option('home'), '', get_pagenum_link()));
    if(!is_home() && $pagename != "events") {
?>

<div class="container">
    <div class="breadcrumb">
        <p class="breadcrumb-here">You are here: </p>
        <a class="breadcrumb-first-item" href="/">Home</a>

        <?php if (is_category() || is_single()) : ?>
    <?php 
        $categories = get_the_category();
        if (!empty($categories)) :
            // Sort categories to place parent before child
            usort($categories, function($a, $b) {
                return $a->parent - $b->parent;
            });

            foreach ($categories as $category) :
                echo '<svg class="icon-keyboard-arrow"><use xlink:href="#icon-309a2299"></use></svg>';
                echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
            endforeach;
        endif;
    ?>
<?php endif; ?>

        <?php if (is_single()) : ?>
            <svg class="icon-keyboard-arrow">
                <use xlink:href="#icon-309a2299"></use>
            </svg>
            <p class="breadcrumb-landing-page"><?php the_title(); ?></p>
        <?php endif; ?>

        <?php if (is_page()) : ?>
            <?php 
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) :
                    echo '<svg class="icon-keyboard-arrow"><use xlink:href="#icon-309a2299"></use></svg>';
                    echo '<a href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a>';
                endforeach;
            ?>
            <svg class="icon-keyboard-arrow">
                <use xlink:href="#icon-309a2299"></use>
            </svg>
            <p class="breadcrumb-landing-page"><?php the_title(); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php } ?>