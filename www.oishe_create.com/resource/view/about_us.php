<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/AboutController.php");

$blog = new AboutController;
$eloquent = new Eloquent;

?>

<!-- YOUR PAGE DESIGN WILL GO BELOW -->

<!-- Slider Part Start-->

 <div class="breadcrumb-area breadcrumb-bg-4 bg-gray mt-175">
            <div class="container-fluid">
                <div class="breadcrumb-content breadcrumb-content-white text-center">
                    <div class="breadcrumb-title">
                        <h2>About Us</h2>
                    </div>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="about-us-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-us-img">
                            <img src="assets/images/banner/about-us.jpg" alt="banner">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="about-us-content">
                            <h2>Welcome to Mantis Fashion</h2>
                            <p>London is a real world city – with some of the most famous buildings, museums and galleries in the world and 2000 years of history to go with them.</p>
                            <p>But it’s not just looking backwards, there’s always a new bar, play or concert to see. London is also one of the most international cities, with people from all around the world making their home here, so it’s just as easy to get Indian street food as it is a roast dinne.</p>
                            <div class="about-us-list">
                                <ul>
                                    <li>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis conva.</li>
                                    <li>Cras porta posuere lectus, vitae consectetur dolor elementum id. Ut interdum, sem eget varius eleifend, ex risus gravida purus, sed</li>
                                </ul>
                            </div>
                            <p>Morbi aliquam hendrerit felis, eu cursus orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et ante a felis egestas varius quis eget urna. Mauris blandit, sem venenatis blandit vehicula, neque leo eleifend ant</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us-skill pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="skill-content">
                            <h2>Welcome to Mantis Fashion</h2>
                            <p>Morbi aliquam hendrerit felis, eu cursus orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et ante a felis egestas varius quis eget urna. Mauris blandit, sem venenatis blandit vehicula, neque leo eleifend ant</p>
                            <div class="skill-bar">
                                <div class="skill-bar-item">
                                    <span>Fashion Design </span>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft" data-progress="95%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                            <span class="text-top">95%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-bar-item">
                                    <span>Web Design </span>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft" data-progress="85%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                            <span class="text-top">85%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-bar-item">
                                    <span>Branding Design </span>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft" data-progress="80%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                            <span class="text-top">80%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-bar-item">
                                    <span>WordPress Development</span>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft" data-progress="99%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                            <span class="text-top">99%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="skill-img">
                            <img src="assets/images/banner/skill.jpg" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-area pb-95">
            <div class="container">
                <div class="section-title-7 text-center mb-40">
                    <h2>What Clients Say ?</h2>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-10 ml-auto mr-auto">
                        <div class="testimonial-active owl-carousel">
                            <div class="single-testimonial text-center">
                                <div class="client-img">
                                    <img src="assets/images/testimonial/client-2.jpg" alt="testimonial">
                                </div>
                                <p>"Phasellus ut felis odio. Fusce hendrerit, ex ac finibus pulvinar, tortor felis egestas turpis, id pellentesque ligula risus vel sem. Nullam ut nunc a magna varius varius."</p>
                                <div class="client-info">
                                    <h5>Ophelia Conner</h5>
                                    <span>Customer</span>
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <div class="client-img">
                                    <img src="assets/images/testimonial/client-1.jpg" alt="testimonial">
                                </div>
                                <p>"Phasellus ut felis odio. Fusce hendrerit, ex ac finibus pulvinar, tortor felis egestas turpis, id pellentesque ligula risus vel sem. Nullam ut nunc a magna varius varius."</p>
                                <div class="client-info">
                                    <h5>Ophelia Conner</h5>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="talk-us">
            <div class="talk-us-content">
                <a href="contact-us.html">LET'S TALK</a>
            </div>
        </div>