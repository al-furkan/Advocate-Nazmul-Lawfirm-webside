<?php

include('./header.php');

?>

<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/law_hero2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <div class="slider-bottom-cap" data-animation="fadeInLeft" data-delay=".6s">
                            <p style="color:white; font-size: 64px; margin-bottom:30px;">Contact Us</p>
                            <a href="https://api.whatsapp.com/send?phone=8801817516998" target="_blank">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
                                    alt="WhatsApp" class="whatsapp-icon" style=" width: 100px;
        height: 100px;
        background-color: white;
        border-radius: 50%;
        padding: 10px;">
                                <span style="color:white; font-size: 64px;">+880 1817-516998</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<div class="container text-center mt-50 mb-100">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.9850925110923!2d90.40795577432479!3d23.71222639024277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9000555007b%3A0x952c608e34affa26!2z4Kau4KeH4Kaf4KeN4Kaw4KeL4Kaq4Kay4Ka_4Kaf4KaoIOCmrOCmvuCmsCDgpoXgp43gpq_gpr7gprjgp4vgprjgpr_gpq_gprzgp4fgprbgpqg!5e0!3m2!1sbn!2sbd!4v1739206875545!5m2!1sbn!2sbd"
        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="container text-center mt-50 mb-100">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3012.7087728938495!2d90.4967815!3d23.631947099999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b1cbbdfe4561%3A0xed9335931fb1b20d!2z4KaF4KeN4Kav4Ka-4Kah4Kat4KeL4KaV4KeH4KafIOCmqOCmvuCmnOCmruCngeCmsiAmIOCmheCnjeCmr-CmvuCmuOCni-CmuOCmv-Cmr-CmvOCnh-Cmn-CmuA!5e1!3m2!1sbn!2sbd!4v1740155295654!5m2!1sbn!2sbd"
        width="1320" height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

<!-- ================ contact section start ================= -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
            <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                novalidate="novalidate">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                placeholder=" Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="name" id="name" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="email" id="email" type="email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="subject" id="subject" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                placeholder="Enter Subject">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                    <h3>Dhaka Judge Court Chamber: Room No- 03, 6th Floor, Metropolitan Bar Association
                    </h3>
                    <p> Building, 23, 23/1, Court House Street, Kotwali, Dhaka-1000</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                    <h3>Narayanganj Judge Court Chamber: Room No- 03, Knit House Building (2nd Floor, 2nd Stair),</h3>
                    <p>Chanmari, Adarsha Chashara, Fatullah, Narayanganj - 1420
                    </p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                    <h3>Mobile- 01915549602, 01817516998</h3>
                    <p>Mon to Fri 9am to 6pm</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                    <h3>Email- info@advocatenazmul.com</h3>
                    <p>Send us your query anytime!</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ================ contact section end ================= -->

<!-- Want To Work Start -->
<div class="wantToWork-area w-padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-xl-7 col-lg-9 col-md-8">
                <div class="wantToWork-caption">
                    <h2>Get Your Answer In Just 5 Minutes</h2>
                    <p>Checking your loan options does not affect your
                        credit score!s</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-3 col-md-4">
                <div class="wantToWork-btn f-right">
                    <a href="#" class="btn btn-ans">Get started <i class="ti-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Want To Work End -->
<?php

include('./footer.php');

?>