<?php

include('./header.php');

?>

<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center"
            data-background="assets/img/hero/law_hero2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- About Law Start-->
    <?php

include('./about-justis.php');

?>
    <!-- About Law End-->

    <!-- Contact form Start -->
    <div class="contact-form bg-height pb-160" data-background="assets/img/about/contact_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                    <div class="form-wrapper">
                        <!--Section Tittle  -->
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="section-tittle section-tittle-f text-center mb-70">
                                    <h2>Free Consultation</h2>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                        <form id="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="email" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="select-itms">
                                        <select name="select" id="select2">
                                            <option value>Criminal Law</option>
                                            <option value>Civil Law</option>
                                            <option value>Corporate and Commercial Law</option>
                                            <option value>Tax Law</option>
                                            <option value>Intellectual Property Law</option>
                                            <option value>Immigration and Visa Law</option>
                                            <option value>Environmental Law</option>
                                            <option value>Labor and Employment Law</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="Email" name="subject" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-30">
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="submit-info">
                                        <button class="submit-btn2" type="submit">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact form End -->

    <!-- Testimonial Start -->
    <?php

include('./client.php');

?>
    <!-- Testimonial End -->

    <!-- Team Mates Start -->
    <?php

include('./team.php');

?>
    <!-- Team Mates End-->

    <!-- Want To Work Start -->
    <!-- Want To Work End -->

</main>
<?php

include('./footer.php');

?>