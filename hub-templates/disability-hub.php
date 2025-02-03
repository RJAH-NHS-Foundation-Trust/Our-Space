<?php 

    /** 
     * Template Name: Disability Hub Template
     * 
     * 
    */

    get_header(); 

?>  

<div class="container">

<h2 class="mt-4"><?php the_title(); ?></h2>

<p><?php the_content(); ?></p>

<div class="row mt-2">
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/hidden-disabilities">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Hidden Disabilities</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/hidden-disability.webp" class="card-img-top" alt="Hidden Disabilities">
          <div class="card-body">
            <p class="card-text">Hidden disabilities are conditions that are not immediately apparent to others, often because they do not have visible physical signs. These disabilities can include chronic illnesses, mental health disorders, neurological conditions, and cognitive impairments, among others. </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="https://hdsunflower.com/uk/">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">The Sunflower</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/sunflower.webp" class="card-img-top" alt="The Sunflower Hidden Disabilities">
          <div class="card-body">
            <p class="card-text">The Hidden Disabilities Sunflower is a simple tool for you to voluntarily share that you have a disability or condition that may not be immediately apparent – and that you may need a helping hand, understanding, or more time in shops, at work, on transport, or in public spaces.</p>
          </div>
        </div>
      </a>
    </div>      
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/access-to-work">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Access To Work</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/access-to-work.webp" class="card-img-top" alt="Access To Work">
          <div class="card-body">
            <p class="card-text">The UK Government's Access to Work scheme is a vital support system designed to assist individuals with disabilities or health conditions in securing and maintaining employment. Through this initiative, eligible individuals receive personalized assistance tailored to their specific needs, ranging from specialized equipment and adaptations in the workplace to travel support and sign language interpreters.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="https://rnid.org.uk/">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Hearing Loss</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/hearing-loss.webp" class="card-img-top" alt="Hearing Loss">
          <div class="card-body">
            <p class="card-text">Hearing loss refers to a partial or total inability to hear sounds. It can occur due to various factors, including aging, exposure to loud noises, genetic predisposition, infections, or certain medical conditions. Hearing loss can range from mild to profound and may affect one or both ears.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="https://www.rnib.org.uk/">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Sight Loss</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/sight-loss.webp" class="card-img-top" alt="Sight Loss">
          <div class="card-body">
            <p class="card-text">Sight loss, also known as visual impairment or blindness, refers to a condition in which an individual experiences partial or complete loss of vision. This loss of vision can result from various factors, including eye diseases, injuries, congenital conditions, or age-related changes.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" target="_blank" href="https://crohnsandcolitis.org.uk/">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Crohns & Colitis</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/chrons.webp" class="card-img-top" alt="Crohns & Colitis">
          <div class="card-body">
            <p class="card-text">Crohn's disease, often referred to simply as Crohn's, is a chronic inflammatory bowel disease (IBD) that primarily affects the gastrointestinal tract.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
      <a class="custom-card-link" href="<?php echo get_option('home'); ?>/autism">
        <div class="card custom-card d-flex flex-column h-100">
          <span class="custom-pill">Autism</span>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/autism.webp" class="card-img-top" alt="Autism">
          <div class="card-body">
            <p class="card-text">Autism spectrum disorder (ASD) is a neurodevelopmental condition characterized by challenges in social communication and interaction, as well as restricted interests and repetitive behaviors. Symptoms of autism vary widely and can range from mild to severe, affecting individuals differently.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/ocd">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">OCD</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/ocd.webp" class="card-img-top" alt="OCD">
        <div class="card-body">
          <p class="card-text">Obsessive-compulsive disorder (OCD) is a mental health condition characterized by intrusive, unwanted thoughts (obsessions) and repetitive behaviors or mental rituals (compulsions) performed in response to these thoughts. These obsessions and compulsions can significantly interfere with daily activities, relationships, and overall quality of life.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/adhd">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">ADHD</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/adhd.webp" class="card-img-top" alt="ADHD">
        <div class="card-body">
          <p class="card-text">ADHD, or Attention-Deficit/Hyperactivity Disorder, is a neurodevelopmental condition characterized by persistent patterns of inattention, hyperactivity, and impulsivity that interfere with daily functioning and social interactions. Individuals with ADHD may struggle with maintaining focus, organizing tasks, managing time, and controlling impulsive behaviors.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-md-4 mb-4">
    <a class="custom-card-link" href="<?php echo get_option('home'); ?>/access-requirements">
      <div class="card custom-card d-flex flex-column h-100">
        <span class="custom-pill">Access Requirements</span>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/access-requirements.webp" class="card-img-top" alt="Access Requirements">
        <div class="card-body">
          <p class="card-text">An Access Requirement is a change that can be made to make it possible for you to access a building or service. It could be a ramp, or wider doorway to allow wheelchair access. It might be a portable induction loop for people with hearing aids, or providing a British Sign Language Interpreter.</p>
        </div>
      </div>
    </a>
  </div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>