<div class="recipe-card d-flex flex-column">
    <div class="recipe-image">
        <img class="rounded" src="<?php echo get_bloginfo('template_directory'); ?>/img/food.webp" alt="Recipe Image">
    </div>

        <h3 class="recipe-title mt-2"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p class="recipe-description"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Recipe</a>        
</div>