<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'includes/head.php'; ?>
</head>
<body data-spy="scroll" data-target="#navbarResponsive">

    <?php include_once 'includes/navbar.php'; ?>
    
    <!-- Start Skills Section -->
	<div id="skills" class="offset">

        <!-- Start Jumbotron -->
        <div class="jumbotron m-0 py-5">
            <div class="container">

                <div class="col-12 os-animation" data-animation="fadeInUp">
                    <h3 class="heading">Our Skills</h3>
                    <div class="heading-underline"></div>
                </div>

                <div class="row justify-content-center text-center os-animation" data-animation="fadeInUp">
                    <div class="col-md-9 col-lg-12 col-xl-11">
                        <div class="row">

                            <div class="col-md-6 col-lg-3 skill">
                                <span class="fa-stack fa-3x">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-clock fa-stack-1x fa-inverse"></i>
                                </span>
                                <h1 class="text-nuno font-weight-bold py-1"><span class="counter">457</span></h1>
                                <h4 class="text-uppercase font-weight-bold">Class Minutes</h4>
                            </div>

                            <div class="col-md-6 col-lg-3 skill">
                                <span class="fa-stack fa-3x">
                                    <i class="fas fa-square fa-stack-2x"></i>
                                    <i class="fab fa-codepen fa-stack-1x fa-inverse"></i>
                                </span>
                                <h1 class="text-nuno font-weight-bold py-1"><span class="counter">199</span></h1>
                                <h4 class="text-uppercase font-weight-bold">Web Dev Files</h4>
                            </div>

                            <div class="col-md-6 col-lg-3 skill">
                                <span class="fa-stack fa-3x">
                                    <i class="fas fa-square fa-stack-2x"></i>
                                    <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                                </span>
                                <h1 class="text-nuno font-weight-bold py-1"><span class="counter">365</span></h1>
                                <h4 class="text-uppercase font-weight-bold">24/7 Support</h4>
                            </div>

                            <div class="col-md-6 col-lg-3 skill">
                                <span class="fa-stack fa-3x">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-cloud-download-alt fa-stack-1x fa-inverse" data-fa-transform="shrink-1 right-.4 up-1"></i>
                                </span>
                                <h1 class="text-nuno font-weight-bold py-1"><span class="counter">101</span></h1>
                                <h4 class="text-uppercase font-weight-bold">Resources</h4>
                            </div>

                        </div> <!-- End Row -->
                    </div> <!-- End Column -->
                </div> <!-- End Row Justify Content -->

                <div class="col-12 text-center os-animation" data-animation="fadeInUp">
                    <p class="lead">Want to learn more about our design and development skills?</p>
                    <a class="btn btn-nuno btn-sm" href="#contact">Contact Us</a>
                </div>

            </div> <!-- End Container -->
        </div> <!-- End Jumbotron -->

    </div>
    <!-- End of Skills Section -->

    <!-- Start Clients Section -->
    <div id="clients" class="offset">

        <div class="row py-5">

            <div class="col-12 os-animation" data-animation="fadeInUp">
                <h3 class="heading">Our Clients</h3>
                <div class="heading-underline"></div>
            </div>

            <div class="col-12 px-xl-5 os-animation" data-animation="fadeInUp">
                <div id="clients-carousel" class="owl-carousel owl-theme">

                    <div class="row clients px-3 px-md-4">
                        <div class="col-lg-4 my-auto">
                            <img src="img/clients/client1.jpg" alt="">
                        </div>
                        <div class="col-lg-8">
                            <blockquote class="text-justify">
                                <i class="fas fa-quote-left"></i>
                                I see Nuno support as more of a partner to my company than a resource. I can pick up the phone and talk to anyone at any time and the way that they interact with us as a business makes it really simple.
                                <hr class="clients-hr">
                                <cite>&#8212; Erick, Business Owner</cite>
                            </blockquote>
                        </div>
                    </div>

                    <div class="row clients px-3 px-md-4">
                        <div class="col-lg-4 my-auto">
                            <img src="img/clients/client2.jpg" alt="">
                        </div>
                        <div class="col-lg-8">
                            <blockquote class="text-justify">
                                <i class="fas fa-quote-left"></i>
                                The great thing about Nuno is it's not just a design, it's a responsive Bootstrap theme with animation. Nuno's layout is seamless the smooth parallax scrolling and a pop-up portfolio section for my images.
                                <hr class="clients-hr">
                                <cite>&#8212; Rachel, Professional Photographer</cite>
                            </blockquote>
                        </div>
                    </div>	

                    <div class="row clients px-3 px-md-4">
                        <div class="col-lg-4 my-auto">
                            <img src="img/clients/client3.jpg" alt="">
                        </div>
                        <div class="col-lg-8">
                            <blockquote class="text-justify">
                                <i class="fas fa-quote-left"></i>
                                This theme is fantastic!  It has all of the great website elements found throughout professional templates.  I've learned a lot through developing and designing it while adding my own touches to the design.
                                <hr class="clients-hr">
                                <cite>&#8212; Ricky, Aspiring Developer</cite>
                            </blockquote>
                        </div>
                    </div>

                </div> <!-- End Clients Carousel -->
            </div> <!-- End Column -->

        </div> <!-- End of Row -->

    </div>
    <!-- End of Clients Section -->

	<?php include_once 'includes/footer.php'; ?>

	<?php include_once 'includes/scripts.php'; ?>

</body>
</html>