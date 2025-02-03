<h4 class="blog-title mt-4"><?php the_title(); ?></h4>
<div>
    <?php if(has_post_thumbnail()) { ?>
    <img src="<?php the_post_thumbnail_url() ?>" alt="<?php echo the_title(); ?> Logo" class="img-fluid" style="max-width: 300px;">
    <?php }  ?>
</div>
<p><?php the_content(); ?></p>
<span><strong>Network Chair:</strong> <?php the_field('network_chair') ?></span>
<span><strong>Email Address:</strong> <a href="mailto:<?php the_field('network_email_address') ?>"><?php the_field('network_email_address') ?></a></span> 