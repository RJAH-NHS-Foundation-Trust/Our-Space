<?php get_header(); ?>

<section class="main-section mt-4">
    <div class="container">

        <div class="row">
            <?php if(!empty(get_field('group_location')))
            {?>
            <div class="col-6">
            <iframe src="<?php the_field('group_location'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <?php } ?>
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

                <?php if(!empty(get_field('group_contact_email')))
                { ?>
                    <h3 class="mt-2">Contact Address</h3>
                    <?php the_field('group_contact_email'); 
                } ?>

                <?php if(!empty(get_field('group_contact_number')))
                { ?>
                    <h3 class="mt-2">Contact Number</h3>
                    <?php the_field('group_contact_number'); 
                } ?>

                <?php if(!empty(get_field('group_url')))
                { ?>                    
                <div class="row">
                    <a class="btn btn-primary mt-2 mb-2" target="_blank" href="<?php the_field('group_url'); ?>">Visit Group Site</a>
                </div>
                <?php } ?>


            </div>
        </div>
    </div>
  </section>

  <?php get_footer(); ?>