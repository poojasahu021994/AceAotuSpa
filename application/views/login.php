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
 
  <!--Start Login One-->
        <section class="login-one">
            <div class="container">
                <div class="login-one__form">
                    <div class="inner-title text-center">
                        <h2>Login Here</h2>
                    </div>
                    <form id="login-one__form" name="Login-one_form" action="<?= base_url('dashboard') ?>" method="post">
                        <div class="row">
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
                                        <input type="text" name="form_password" id="formPassword"
                                            placeholder="Password..." required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group text-center">
                                    <a href="<?= base_url('dashboard') ?>"> <button class="thm-btn py-3 " type="submit" data-loading-text="Please wait...">Login Here
                                        
                                    </button></a>
                                   
                                </div>
                            </div>
                            <div class="remember-forget">
                                <div class="checked-box1">
                                    <input type="checkbox" name="saveMyInfo" id="saveinfo" checked="">
                                    <label for="saveinfo">
                                        <span></span>
                                        Remember me
                                    </label>
                                </div>
                                <div class="forget">
                                    <a href="#">Forget password?</a>
                                </div>
                            </div>

                            <div class="create-account text-center">
                                <p>Not registered yet? <a href="sign-up.html">Create an Account</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--End Login One-->

  </div><!-- /.page-wrapper -->
  <?php $this->load->view('includes/footer-link'); ?>
   
</body>

</html>