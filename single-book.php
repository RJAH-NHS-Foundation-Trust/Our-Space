<?php get_header(); ?>

<section class="main-section">
    <div class="container">

        <div class="row">
            <div class="col-6">
                <img class="img-fluid mb-2" src="<?php the_field('book_cover'); ?>" />
            </div>
            <div class="col-6">
                <h1><?php the_title(); ?></h1>
                <span><strong>Found a problem:</strong> <a href="<?php echo get_option('home'); ?>/suggest-an-edit/">Suggest an edit</a>
                <div class="mt-3">
                    <?php
                    $post_id = get_the_ID();
                    $categories = get_the_category($post_id);

                    foreach ($categories as $cat) {
                        $category_link = get_category_link($cat->cat_ID);
                        echo '<a  class="custom-category-pill" href="' . esc_url($category_link) . '" title="' . esc_attr($cat->name) . '">' . esc_html($cat->name) . '</a> ';
                    }
                    ?>
                </div>                    
                <div class="mt-3 fst-italic">
                    <?php the_content(); ?>
                </div>
                <a class="btn btn-primary mb-2" href="<?php the_field('purchase_link');?>" target="_blank">Purchase Book</a>
                <?php $catalogue_link = get_field('catalogue_url'); ?>
                <?php if(!empty($catalogue_link)) {?>
                <a class="btn btn-primary mb-2" href="<?php the_field('catalogue_url');?>" target="_blank">View in RJAH Library Catalogue</a>
                <? } ?>
            </div>
        </div>
    </div>
  </section>

  <?php get_footer(); ?>