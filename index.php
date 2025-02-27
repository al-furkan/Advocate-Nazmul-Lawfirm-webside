<?php

include('./header.php');

?>
<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center"
                data-background="assets/img/hero/header2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <p data-animation="fadeInUp" data-delay=".6s">Professional
                                    lawyers</p>
                                <h1 data-animation="fadeInUp" data-delay=".4s">We will fight<br>
                                    for you like a friend </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-bottom">
                    <div class="slider-bottom-cap" data-animation="fadeInLeft" data-delay=".6s">
                        <p>Schedule a Free Consultation</p>
                        <a href="https://api.whatsapp.com/send?phone=8801817516998" target="_blank">
                            <div class="d-flex-center-start">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
                                    alt="WhatsApp" class="whatsapp-icon" style=" width: 100px;
        height: 100px;
        background-color: white;
        border-radius: 50%;
        padding: 10px;">
                                <span>+880 1817-516998</span>
                            </div>
                        </a>
                    </div>
                    <div class="slider-video d-flex align-items-center" data-animation="fadeInRight" data-delay=".8s">
                        <a class="popup-video ani-btn" href="https://www.youtube.com/watch?v=1aP-TXUpNoU">
                            <img src="assets/img/icon/video_btn.png" alt>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center"
                data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <p data-animation="fadeInUp" data-delay=".6s">Professional
                                    lawyers</p>
                                <h1 data-animation="fadeInUp" data-delay=".4s">We will fight<br>
                                    for you like a friend </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-bottom">
                    <div class="slider-bottom-cap" data-animation="fadeInLeft" data-delay=".6s">
                        <p>Schedule a Free Consultation</p>
                        <a href="https://api.whatsapp.com/send?phone=8801817516998" target="_blank">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
                                class="whatsapp-icon">
                            <span>+880 1817-516998</span>
                        </a>
                    </div>
                    <div class="slider-video d-flex align-items-center" data-animation="fadeInRight" data-delay=".8s">
                        <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU">
                            <img src="assets/img/icon/video_btn.png" alt>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Legal Practice Area start -->
    <?php

include('./legal-practice-Area.php');

?>
    <!-- Legal Practice Area End-->

    <!-- About Law Start-->
    <?php

include('./about-justis.php');

?>
    <!-- About Law End-->

    <!-- Contact form Start -->
    <div class="contact-form bg-height pb-160" data-background="assets/img/about/contact_bg.jpg" id="contact">
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
                                        <button class="submit-btn2" type="submit">Submit
                                            Now</button>
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
    <?php

include('./team.php');

?>


</main>


<?php

include('./footer.php');

?>