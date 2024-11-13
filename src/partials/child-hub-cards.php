<div class="col-md-4 mb-4">
    <?php
    $externalLink = get_field('external_link');
    $defaultLink = get_permalink(); 
    $linkUrl = !empty($externalLink) ? $externalLink : $defaultLink;
    ?>

    <a class="custom-card-link" href="<?php echo esc_url($linkUrl); ?>">
    <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill"><?php the_title(); ?></span>

        <?php  if (has_post_thumbnail($post->ID)) {

        $featured_image_url = get_the_post_thumbnail_url($post->ID);

        echo '<img class="img-fluid mb-2 card-img-top" src="'. $featured_image_url .'">';
        } else {
            echo 'No featured image found.';
        }
        
        ?>
        
        <div class="card-body">
            <p class="card-text"><?php the_field('hub_description'); ?></p>
        </div>
    </div>
    </a>
</div>