<?php 

    /** 
     * Template Name: Staff Network Page Template
     * 
     * 
    */

    get_header(); 
  
?>


<header class="mt-4 text-center text-md-left">
    <div class="container">    
        <div class="row neuro-header-content align-items-center">
            <div class="col-12">                
                <h1><?php the_title(); ?></h1>
                <h4>About The <?php the_field('network_name') ?></h4>
                <?php if(!empty(the_field('network_logo'))): ?>
                    <img class="img-responsive" style="max-width: 550px" src="<?php the_field('network_logo') ?>" alt="<?php the_title(); ?> Logo" />
                <?php endif; ?>

                <p class="text-dark mt-4">
                    <?php the_field('about_the_network') ?>
                </p>                
            </div>
        </div>
    </div>
</header>

<section class="team-section py-5">
    <div class="container">
        <h2 class="text-center">Meet Your Network Chairs</h2>
	    <div class="row justify-content-center mt-3">
		    <div class="col-12 col-md-6">
			    <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
				    <div class="card-body p-4">
					    <div class="member-profile position-absolute w-100 text-center">
					        <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
				        </div>
					    <div class="card-text pt-1">
						    <h5 class="member-name mb-0 text-center text-primary font-weight-bold"><?php the_field('chair_one') ?></h5>
						    <div class="mb-3 text-center"><?php the_field('chair_one_job_title') ?></div>
						    <div><?php the_field('chair_one_about_me') ?></div>
					    </div>
				    </div>
				    <div class="card-footer theme-bg-primary border-0 text-center">
                        <a href="mailto:<?php the_field('chair_one_email') ?>"><?php the_field('chair_one_email') ?></a>
				    </div>
			    </div>
		    </div>
		    
		    <div class="col-12 col-md-6">
			    <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
				    <div class="card-body p-4">
					    <div class="member-profile position-absolute w-100 text-center">
					        <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
				        </div>
					    <div class="card-text pt-1">
						    <h5 class="member-name mb-0 text-center text-primary font-weight-bold"><?php the_field('chair_two') ?></h5>
						    <div class="mb-3 text-center"><?php the_field('chair_two_job_title') ?></div>
						    <div><?php the_field('chair_two_about_me') ?></div>
					    </div>
				    </div>
				    <div class="card-footer theme-bg-primary border-0 text-center">
                        <a href="mailto:<?php the_field('chair_two_email') ?>"><?php the_field('chair_two_email') ?></a>
				    </div>
			    </div>
		    </div>
    </div>
</section>
    

<?php 
    $args = array(                
        'post_type'      => 'events',
        'posts_per_page' => 1,
        'order'          => 'ASC',
        'orderby'        => 'meta_value', // Order by a custom field
        'meta_key'       => 'date',       // The custom field to order by
        'meta_type'      => 'DATE',
        'meta_query'     => array(
            array(
                'key'     => 'date', // The custom field key
                'value'   => date('Ymd'), // Today's date in the format used in your custom field
                'compare' => '>=', // Only get posts with a date equal to or after today
                'type'    => 'DATE'
            )
        )
    ); 

$latest = new WP_Query( $args );

            if ( $latest->have_posts() ) :  ?>

<section id="dates" class="neuro-section">
    <div class="container text-center">
        <h2>Next Meeting</h2>
        

            
                <?php while ( $latest->have_posts() ) : 
                    $latest->the_post(); 
                    get_template_part( 'partials/event-content', get_post_format() );
                endwhile; ?>

    </div>
</section>

<?php endif; 

wp_reset_postdata(); 
?>

<?php 
$args = array(                
    'post_type'      => 'events',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'meta_value',
    'meta_key'       => 'date',
    'meta_type'      => 'DATE',
    'meta_query'     => array(
        array(
            'key'     => 'date',
            'value'   => date('Ymd'),
            'compare' => '>=',
            'type'    => 'DATE'
        )
    )
);

$latest = new WP_Query( $args );

if ( $latest->have_posts() ) : ?>
    <section id="dates" class="neuro-section">
        <div class="container text-center">
            <h2>Upcoming Meetings</h2>
            <div class="card-container">
                <?php  
                while ( $latest->have_posts() ) : 
                    $latest->the_post(); 
                    get_template_part( 'partials/event-content', get_post_format() );
                endwhile; 
                ?>
            </div>
        </div>
    </section>
<?php 
endif; 

wp_reset_postdata(); 
?>

<section class="neuro-section">
    <div class="container text-center"> 
        <h2>Featured Resources</h2>  
        <div class="row mt-2">
            <div class="col-md-6 mb-4">
                <div class="card neuro-card">
                    <div class="card-body text-white">
                        <h2 class="card-title">Team Lunch</h2>
                        <ul class="list-unstyled">
                        <li class="card-text">Arrange a lunch with your colleagues or friends.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card neuro-card">
                    <div class="card-body text-white">
                        <h2 class="card-title">Craft or cooking session</h2>
                        <ul class="list-unstyled">
                        <li class="card-text">If you like making things why not give that a try as a break from the screen?</li>
                        </ul>
                    </div>
                </div>
            </div>            
        </div>
        <div class="row mt-2">
            <div class="col-md-6 mb-4">
                <div class="card neuro-card">                    
                    <div class="card-body text-white">
                        <h2 class="card-title">Decorate the office for Christmas</h2>
                        <ul class="list-unstyled">
                        <li class="card-text">With Christmas fast approaching why not decorate your office for the festive season</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card neuro-card">                    
                    <div class="card-body text-white">
                        <h2 class="card-title">Longer walk round the path or even a kickabout</h2>
                        <ul class="list-unstyled">
                            <li class="card-text">Take a longer walk around the path of positivity or get your team together for a kickabout.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="neuro-section">
    <div class="container text-center"> 
        <h2>Events, Talks & Seminars</h2>  
        <div class="row mt-2">
            <div class="col-md-6 mb-4">
                <div class="card neuro-card">
                    <div class="card-body text-white">
                        <h2 class="card-title">Team Lunch</h2>
                        <ul class="list-unstyled">
                        <li class="card-text">Arrange a lunch with your colleagues or friends.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card neuro-card">
                    <div class="card-body text-white">
                        <h2 class="card-title">Craft or cooking session</h2>
                        <ul class="list-unstyled">
                        <li class="card-text">If you like making things why not give that a try as a break from the screen?</li>
                        </ul>
                    </div>
                </div>
            </div>            
        </div>
        <div class="row mt-2">
            <div class="col-md-6 mb-4">
                <div class="card neuro-card">                    
                    <div class="card-body text-white">
                        <h2 class="card-title">Decorate the office for Christmas</h2>
                        <ul class="list-unstyled">
                        <li class="card-text">With Christmas fast approaching why not decorate your office for the festive season</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card neuro-card">                    
                    <div class="card-body text-white">
                        <h2 class="card-title">Longer walk round the path or even a kickabout</h2>
                        <ul class="list-unstyled">
                            <li class="card-text">Take a longer walk around the path of positivity or get your team together for a kickabout.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>