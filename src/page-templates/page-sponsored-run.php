<?php 

    /** 
     * Template Name: Sponsored Run Page Template
     * 
     * 
    */

    get_header(); 
  
?>

<style>
        .header {
            background-color: #00A9A2; /* Background color of the header */
            color: white;
            padding: 60px 0;
        }
        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header-text {
            max-width: 50%;
        }
        .header-text h1 {
            font-size: 48px;
            font-weight: bold;
        }
        .header-text p {
            font-size: 18px;
        }
        .header-image img {
            max-width: 500px;
            border-radius: 15px;
        }
        .logo-bar {
            background-color: #F3A71D; /* Adjust this to match the background color of the logo bar */
            padding: 20px 0;
            text-align: center;
        }
        .logo-bar img {
            max-height: 40px; /* Adjust this to change the logo size */
            margin: 0 15px;
        }
        .features-section {
            background-color: #FFFFFF; /* Adjust this to match the background color in your image */
            padding: 60px 0;
        }
        .features-section .feature {
            padding: 20px;
        }
        .features-section .feature img {
            max-width: 100%;
        }
        .events-section {
            background-color: #00A9A2; /* Adjust this to match the background color in your image */
            padding: 60px 0;
            color: white;
        }
        .event-card {
            background-color: #0072BC; /* Adjust this to match the card background color in your image */
            border: none;
            padding: 20px;
            color: black; /* Adjust this to match the text color in your image */
        }
        .event-card img {
            border-radius: 15px;
        }
        .event-card .btn {
            background-color: #FFAA00; /* Button color */
            color: white;
        }
    </style>

<header class="header text-center">
    <div class="container-fluid">
        <div class="row header-content">
            <div class="col-md-6 text-left header-text">
                <h1>Sponsored 5K Fun Run & Walk</h1>
                <p>Help us secure the future of OurSpace by taking part in our Sponsored 5K Fun Run & Walk.</p>
            </div>
            <div class="col-md-6 header-image">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/runners-head.jpg" alt="Runners"> <!-- Replace with the path to your image -->
            </div>
        </div>
    </div>
</header>

<div class="logo-bar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/lof-logo.png" alt="Logo 1">
            </div>
            <div class="col-auto">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/lof-logo.png" alt="Logo 2">
            </div>
            <div class="col-auto">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/lof-logo.png" alt="Logo 3">
            </div>
            <div class="col-auto">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/lof-logo.png" alt="Logo 4">
            </div>
            <div class="col-auto">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/lof-logo.png" alt="Logo 5">
            </div>
            <div class="col-auto">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/lof-logo.png" alt="Logo 6">
            </div>
        </div>
    </div>
</div>

<section class="features-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="feature">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/runners-head.jpg" alt="Running Image" class="img-fluid">
                </div>
            </div>
            <div class="col-md-8">
                <div class="feature text-left">
                    <h2>ELEVATE YOUR RUNS WITH THE ULTIMATE COMMUNITY</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Aenean commodo ligula eget dolor aenean massa cum sociis.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill"></i> Affordable Price</li>
                        <li><i class="bi bi-check-circle-fill"></i> Professional Team</li>
                        <li><i class="bi bi-check-circle-fill"></i> Do it online</li>
                        <li><i class="bi bi-check-circle-fill"></i> Flexible Time</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="events-section">
    <div class="container text-center">
        <h2 class="text-white">RUNNING EVENTS COMING UP INCLUDE</h2>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card event-card">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/runners-head.jpg" class="card-img-top" alt="Event 1">
                    <div class="card-body text-white">
                        <h5 class="card-title">ARLEY MARATHON 2023</h5>
                        <p class="card-text">
                            <i class="bi bi-geo-alt-fill"></i> Green Park Boston, USA<br>
                            <i class="bi bi-calendar-event-fill"></i> Sunday, October 8 2023<br>
                            <i class="bi bi-clock-fill"></i> Start 08:00 AM - Until Finish<br>
                            £15 per entry
                        </p>
                        <a href="#" class="btn">SIGN UP</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card event-card">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/runners-head.jpg" class="card-img-top" alt="Event 2">
                    <div class="card-body text-white">
                        <h5 class="card-title">FUN RUN EVENT 10K 2023</h5>
                        <p class="card-text">
                            <i class="bi bi-geo-alt-fill"></i> New York, USA<br>
                            <i class="bi bi-calendar-event-fill"></i> Sunday, September 19 2023<br>
                            <i class="bi bi-clock-fill"></i> Start 08:00 AM - Until Finish<br>
                            £15 per entry
                        </p>
                        <a href="#" class="btn">SIGN UP</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card event-card">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/runners-head.jpg" class="card-img-top" alt="Event 3">
                    <div class="card-body text-white">
                        <h5 class="card-title">RUN NYC MARATHON 2023</h5>
                        <p class="card-text">
                            <i class="bi bi-geo-alt-fill"></i> New York, USA<br>
                            <i class="bi bi-calendar-event-fill"></i> Saturday, August 17 2023<br>
                            <i class="bi bi-clock-fill"></i> Start 08:00 AM - Until Finish<br>
                            £15 per entry
                        </p>
                        <a href="#" class="btn">SIGN UP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>