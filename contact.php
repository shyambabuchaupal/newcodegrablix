<?php require('./include/header.php'); ?>
<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact section-bg ">
    <div class="section-contact mb-5">
        <div class="container">
        <h2>Contact Us</h2>
        </div>

    </div>
    <div class="container">



        <div class="row justify-content-center mb-4 mobs">

            <div class="col-lg-5 col-md-5 mb-5 mb-md-0">
                <div class="info">
                    <div class="address">
                        <i class="bx bx-map"></i>
                        <p>A108 Adam Street<br>New York, NY 535022</p>
                    </div>

                    <div class="email">
                        <i class="bx bx-envelope"></i>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bx bx-phone-call"></i>
                        <p>+1 5589 55488 55s</p>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>

            </div>

            <div class="col-lg-5 col-md-7">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

        <div class="col-12">
            <img src="./assets/img/contactimg.png" alt="img" class="w-100 ">
        </div>

    </div>
</section><!-- End Contact Us Section -->

<?php require('./include/footer.php'); ?>