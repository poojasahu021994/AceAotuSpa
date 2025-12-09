<?php $this->load->view('includes/header-link'); ?>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <!--Start Preloader-->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--End Preloader-->
    <div class="page-wrapper">
        <!--Start Sign Up One-->
        <section class="sign-up-one">
            <div class="container">
                <div class="sign-up-one__form">
                    <div class="inner-title text-center">
                        <h2>Sing Up</h2>
                    </div>
                    <form id="sign-up-one__form" name="sign-up-one_form" action="<?= base_url('login') ?>" method="post">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_name" id="formName" placeholder="Name..."
                                            required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="email" name="form_email" id="formEmail" placeholder="Email..."
                                            required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_phone" id="formPhone" placeholder="Phone..."
                                            required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_password" id="formPassword"
                                            placeholder="Password..." required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <button class="thm-btn py-3" type="submit" data-loading-text="Please wait...">Sign UP
                                        </button>
                                </div>
                            </div>
                        </div>
                        <div class="google-facebook">
                            <a href="https://www.google.com/">
                                <div class="icon">
                                    <img src="assets/images/icon/icon-google-2.png" alt="Google">
                                </div>
                                Continue with Google
                            </a>
                            <a href="https://www.facebook.com/">
                                <div class="icon">
                                    <img src="assets/images/icon/icon-facebook.png" alt="Google">
                                </div>
                                Continue with Facebook
                            </a>
                        </div>
                        <div class="create-account text-center">
                            <p>Already have an account? <a href="login.html">Login Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--End Sign Up One-->
        
    </div><!-- /.page-wrapper -->

    <?php $this->load->view('includes/footer-link'); ?>
   
</body>

</html>