<div class="breadcrumb">
    <p class="breadcrumb-here">You are here: </p>
    <a class="breadcrumb-first-item" href="/">Home</a>

    <?php if (is_category() || is_single()) : ?>
        <?php 
            $category = get_the_category();
            if (!empty($category)) :
        ?>
            <svg class="icon-keyboard-arrow">
                <use xlink:href="#icon-309a2299"></use>
            </svg>
            <a href="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>">
                <?php echo esc_html($category[0]->name); ?>
            </a>
        <?php endif; ?>
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