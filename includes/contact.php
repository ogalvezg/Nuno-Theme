<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'includes/head.php'; ?>
</head>
<body data-spy="scroll" data-target="#navbarResponsive">

	<?php include_once 'includes/navbar.php'; ?>

<!-- Start Contact Section -->
<div id="contact" class="offset">

    <div class="container-fluid footer px-0">
        <div class="row outer">

            <div class="container">
                <div class="row py-3">

                    <div class="col-md-5 px-0 pr-md-3">
                        <img src="img/nuno.png" alt="">
                        <p>At our core is a collection of design and development solutions that represent everything your business needs to compete in the modern marketplace.</p>
                        <strong>Our Location</strong>
                        <p>Alexanderstr.<br>Berlin, 10405</p>
                        <strong>Contact Info</strong>
                        <p><a href="tel:+4717622884150">(47) 176-22884150</a>
                            <br><a href="mailto:me@w3newbie.com">mynuno@mockups.com</a></p>
                        <ul class="social pt-3">
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://youtube.com/" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                            <li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div> <!-- End Column -->

                    <div class="col-md-7 px-0 pl-md-3">
                        <h3>Contact Us</h3>

                        <form id="contact-form" method="POST" action="contact/contact.php">

                            <div class="messages"></div>
                            <div class="controls">

                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your name." required="required">
                                </div>

                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email." required="required">
                                </div>

                                <div class="form-group">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Add your message." rows="4" required="required"></textarea>
                                </div>

                                <input type="submit" class="btn btn-outline-light btn-sm" value="Send message">

                            </div>

                        </form>

                    </div> <!-- End Column -->
                    
                </div> <!-- End Row -->
            </div> <!-- End Container -->

        </div> <!-- End of Row Outer -->
    </div> <!-- End Container Fluid Footer -->

</div> 
<!-- End Contact Section -->

<?php include_once 'includes/footer.php'; ?>

<?php include_once 'includes/scripts.php'; ?>