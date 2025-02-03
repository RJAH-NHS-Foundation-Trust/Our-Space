<div class="col-md-4 mb-4">
    <?php 
      $title = get_the_title(); 
      $title = strtolower(str_replace(" ", "-",$title));
    ?> 
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/<?php echo urlencode($title); ?>">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill"><?php the_title(); ?></span>

        <?php  if (has_post_thumbnail($post->ID)) {

            $featured_image_url = get_the_post_thumbnail_url($post->ID);

            echo '<img class="img-fluid mb-2 card-img-top" alt="'. get_the_title() . '" src="'. $featured_image_url .'">';
            } else {
                echo 'No featured image found.';
            }

        ?>
        
        <div class="card-body">
          <p class="card-text"><?php the_content(); ?></p>
        </div>
      </div>
    </a>
  </div>