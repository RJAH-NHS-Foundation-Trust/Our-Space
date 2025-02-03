<?php 

    /** 
     * Template Name: Therapy Dogs Page Template
     * 
     * 
    */

    get_header(); 
  
?>

<header class="dog-header text-center text-md-left">
    <div class="container-fluid">
        <div class="row dog-header-content align-items-center">
            <div class="col-12 col-md-6 order-1 order-md-1 dog-header-text">
                <h1>Therapy Dogs Nationwide</h1>
                <h3>Say Hi To Therapy Dogs Nationwide</h3>
                <p class="text-dark">Therapy Dogs Nationwide is a national charity where visiting volunteers take their own dogs into establishments to provide comfort, distraction, and stimulation.</p>
            </div>
            <div class="col-12 col-md-6 order-2 order-md-2 dog-header-image">
                <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/img/dogs-team.webp" alt="Runners">
            </div>
        </div>
    </div>
</header>

<div class="dog-logo-bar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="https://www.friendsrjah.org.uk/" target="_blank">
                    <img class="fade-image" src="<?php echo get_bloginfo('template_directory'); ?>/img/lof-logo.webp" alt="League Of Friends Logo">
                </a>
            </div>
            <div class="col-auto">
                <a href="https://tdn.org.uk/" target="_blank">
                    <img class="fade-image" src="<?php echo get_bloginfo('template_directory'); ?>/img/therapy-dogs-logo.webp" alt="Therapy Dogs Nationwide Logo">
                </a>
            </div>            
        </div>
    </div>
</div>

<section class="dogs-section">
    <div class="container text-center">
        <h2>ABOUT THERAPY DOGS NATIONWIDE</h2>
        <div class="row mt-4">
            <div class="col-md-12 mb-2">
                <div class="card dog-card">
                    <div class="card-body text-white">                        
                        <p class="card-text">
                        Our volunteers have the unique privilege of volunteering with their own temperament tested Therapy Dogs;  some with over 10 years of experience and always focused on benefiting people in the community.</p>
                        
                        <p class="card-text">Information on our longer-term objectives can be found here.</p>

                        <p class="card-text">Using animals especially Dogs as therapy is not a new idea, they have been used for over 40 years in experience in the care sector and a lot of our volunteers have roots with Lesley Scott-Ordish who was a pioneer in visiting with taking your own pet dog to nursing homes.</p>

                        <p class="card-text">The benefits of Animal Assisted Therapies (AAT) have been extensively studied and results range from improvement in general health and wellbeing, increased confidence levels, improved and controlled movement to improved communication skills.</p>

                        <p class="card-text">Volunteers and Therapy Dogs work with a wide group of people within the community.  Our work in residential care homes had improved communication in residents and patients by evoking memories and stimulating conversation.</p>

                        <p class="card-text">Our dogs have also shown to help with special needs and autistic children and adults by giving focus and providing a calming environment.</p>

                        <p class="card-text">We regularly visit local hospitals and hospices where patients and staff interact with our dogs and look forward to their visits.</p>

                        <p class="card-text">We are proud to be part of the Kennel Club Bark and Read Programme.  We have many dogs that visit schools to help children develop their reading skills and build confidence.</p>
                        <a href="https://tdn.org.uk/establishments/" target="_blank" class="btn btn-primary">FIND OUT MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dogs-section">
    <div class="container text-center">
        <h2>MEET THE DOGS</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card dog-card">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/dogs-issie-milo.webp" class="card-img-top fade-image" alt="Issie & Milo">
                    <div class="card-body text-white">
                        <h5 class="card-title">Issie & Milo</h5>
                        <p class="card-text">
                            <i class="bi bi-geo-alt-fill"></i>Breed: Bolognese<br>
                            <i class="bi bi-calendar-event-fill"></i>Age: 7<br>
                            <i class="bi bi-clock-fill"></i>Fact: Bolognese dogs originate from the 11th century, where they were frequently gifted to noble families and royalty.<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card dog-card">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/dogs-jo-raphy.webp" class="card-img-top fade-image" alt="Jo & Raphie">
                    <div class="card-body text-white">
                        <h5 class="card-title">Jo & Raphie</h5>
                        <p class="card-text">
                        <i class="bi bi-geo-alt-fill"></i>Breed: Chihuahua<br>
                        <i class="bi bi-calendar-event-fill"></i>Age: 3<br>
                        <i class="bi bi-clock-fill"></i>Fact: Raphie was previously a show dog who won his class at Crufts in 2022<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card dog-card">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/dogs-julie-luna.webp" class="card-img-top fade-image" alt="Julie & Luna">
                    <div class="card-body text-white">
                        <h5 class="card-title">Julie & Luna</h5>
                        <p class="card-text">
                            <i class="bi bi-geo-alt-fill"></i>Breed: Golden Retriever<br>
                            <i class="bi bi-calendar-event-fill"></i>Age: 5<br>
                            <i class="bi bi-clock-fill"></i>Fact: Luna loves treats, playing with her toys, interesting walks, rolling in muddy leaves and swimming - even in winter!<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dogs-section">
    <div class="container text-center">
        <h2>HOW TO BOOK A VISIT</h2>
        <div class="row mt-4">
            <div class="col-md-12 mb-2">
                <div class="card dog-card">
                    <div class="card-body text-white">                        
                        <p class="card-text">
                            Booking a visit is really easy, pop along to Switchboard where you will find the Record & Request log, here you can make a request for a visit from one of the therapy dogs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>