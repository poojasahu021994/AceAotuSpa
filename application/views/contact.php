<?php $this->load->view('includes/header'); ?>

  <!--Page Header Start-->
        <section class="page-header">
            <!-- <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div> -->
            <div class="container-fluid">
                <div class="page-header__inner">
                    <!-- <div class="page-header__img-1">
                        <img src="assets/images/resources/page-header-img-1.png" alt="">
                    </div> -->
                    <h3>Contact</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li><span class="fas fa-angle-right"></span></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
      
        <div class="contact-page__middle">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__middle-left">
                        <h3 class="contact-page__middle-title">Get in Touch</h3>
                        <p class="contact-page__middle-text">
                            Have questions about our car or bike wash services? We’re here to help!<br>
                            Whether you want to book a wash, know about pricing, or need service details,<br>
                            feel free to reach out to us anytime.
                        </p>
                        <div class="contact-page__contact-info">
                            <h3 class="contact-page__contact-info-title">Contact Info</h3>
                            <ul class="contact-page__contact-list list-unstyled">
                                <li>
                                    <h4 class="contact-page__contact-list-title">Address</h4>
                                    <p>Nashik, Maharashtra 422001</p>
                                </li>
                                <li>
                                    <h4 class="contact-page__contact-list-title">Phone</h4>
                                    <p><a href="tel:9561915333">+91 9561915333</a></p>
                                </li>
                                <li>
                                    <h4 class="contact-page__contact-list-title">Email</h4>
                                    <p><a href="mailto:info@aceautospa.com">info@aceautospa.com</a></p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__middle-right">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                            class="contact-page__google-map" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-page__bottom">
            <div class="contact-page__form-box">
                <h3 class="comment-one__title">Let’s Get in Touch</h3>
                <p class="comment-one__text">
                    Your email address will not be published. Required fields are
                    marked *
                </p>
                <form action="https://dreamlayout.mnsithub.com/html/servixa/main-html/assets/inc/sendemail.php" method="POST"
                    class="contact-page__form contact-form-validated">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <input type="text" placeholder="Your Name*" name="name" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <input type="email" placeholder="Your Email*" name="email" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <input type="text" placeholder="Phone*" name="phone" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <input type="text" placeholder="Subject*" name="subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="contact-page__input-box text-message-box">
                                <textarea required name="message" placeholder="Your Message*"></textarea>
                            </div>
                            <div class="contact-page__btn-box">
                                <button type="submit" class="thm-btn contact-page__btn"
                                    data-loading-text="Please wait...">
                                    Send Meassage<span><i class="icon-next"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="result"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->
<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>