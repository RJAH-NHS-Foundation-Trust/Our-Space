<?php get_header(); ?>

<div class="jumbotron">
    <div class="container">
        <h1 class="jumbotron-title">Few of us ever live in the present. We are forever anticipating what is to come or remembering what has gone.</h1>
        <p class="jumbotron-description">Louis L'Amour</p>
    </div>
</div>


<section class="main-section mt-4">
    <div class="container">
      <div class="row">        
        <div class="col-lg-9 col-md-12 blog-posts">
    


            <?php
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>  

<div class="author-profile-card">
    <h2>About: <?php echo $curauth->nickname; ?></h2>
    <div class="author-photo">
    <?php echo get_avatar( $curauth->user_email , '90 '); ?>
    </div>
    <p><strong>Website:</strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a><br />
    <strong>Bio:</strong> <?php echo $curauth->user_description; ?></p>
</div>

<h2>Posts by <?php echo $curauth->nickname; ?>:</h2>

                <?php
 
 // The Loop
 while ( have_posts() ) : the_post(); ?>
 <div class="blog-post">
 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
 <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
  
 <div class="entry">
 <?php the_excerpt(); ?>
  
  <p class="postmetadata"></p>
 </div>
</div>
  
 <?php endwhile; ?>

               

            
        </div>
        <?php get_sidebar() ?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>