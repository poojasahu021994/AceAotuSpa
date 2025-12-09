<?php $this->load->view('includes/header'); ?>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h3>My Transactions</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span class="fas fa-angle-right"></span></li>
                            <li>My Transactions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Dashboard Start-->
        <section class="dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <aside class="dashboard__sidebar">
                            <div class="dashboard__user">
                                <div class="dashboard__user-avatar">
                                    <img src="assets/images/resources/dashboard-user-avatar-1.jpg" alt="">
                                    <button type="button" class="dashboard__user-avatar-btn">
                                        <i class="far fa-camera"></i>
                                    </button>
                                    <input type="file" class="dashboard__user-avatar-file">
                                </div>
                                <div class="dashboard__user-info">
                                    <h4 class="dashboard__user-name">Anne Xiva</h4>
                                    <p class="dashboard__user-email"><a
                                            href="mailto:annexiva@example.com">annexiva@example.com</a></p>
                                </div>
                            </div>
                            <ul class="dashboard__menu">
                                <li class="dashboard__menu-item">
                                    <a class="dashboard__menu-link" href="<?= base_url('dashboard') ?>"><i
                                            class="far fa-tachometer-alt-fast"></i>My
                                        Dashboard</a>
                                </li>
                                <li class="dashboard__menu-item"><a class="dashboard__menu-link"
                                        href="<?= base_url('myProfileInfo') ?>"><i class="fal fa-user"></i>My
                                        Profile</a>
                                </li>
                                <li class="dashboard__menu-item"><a class="dashboard__menu-link"
                                        href="<?= base_url('myBooking') ?>"><i class="fal fa-shopping-bag"></i>My
                                        Booking</a></li>
                                <li class="dashboard__menu-item"><a class="dashboard__menu-link"
                                        href="<?= base_url('bookingHistory') ?>"><i
                                            class="far fa-clipboard-list-check"></i>Booking
                                        History</a>
                                </li>
                                <li class="dashboard__menu-item"><a class="dashboard__menu-link"
                                        href="<?= base_url('transactionsHistory') ?>"><i class="far fa-wallet"></i>My
                                        Transactions</a></li>
                                <li class="dashboard__menu-item"><a class="dashboard__menu-link"
                                        href="<?= base_url('notifications') ?>"><i class="far fa-bell"></i>Notifications
                                        <span class="dashboard__badge">8</span></a></li>
                                <li class="dashboard__menu-item"><a class="dashboard__menu-link"
                                        href="<?= base_url('settings') ?>"><i class="far fa-cog"></i>Settings</a></li>
                                <li class="dashboard__menu-item"><a class="dashboard__menu-link"
                                        href="<?= base_url('logout') ?>"><i class="far fa-sign-out-alt"></i>Logout</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="dashboard__main-content">
                            <div class="dashboard__topbar">
                                <div class="dashboard__search">
                                    <form action="#" class="dashboard__search-form">
                                        <input type="search" placeholder="Search...">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="dashboard__actions-and-user-menu-wrapper">
                                    <div class="dashboard__actions">
                                        <button class="dashboard__icon-btn"><i class="far fa-bell"></i></button>
                                        <button class="dashboard__icon-btn"><i class="fab fa-rocketchat"></i></button>
                                    </div>
                                    <div class="dashboard__user-menu-wrapper">
                                        <img src="assets/images/resources/dashboard-user-img.jpg" alt="User Image"
                                            class="dashboard__user-image" />
                                        <div class="dashboard__user-menu">
                                            <div class="dashboard__user-header">
                                                <img src="assets/images/resources/dashboard-user-img.jpg" alt="User"
                                                    class="dashboard__user-thumb">
                                                <div class="dashboard__user-info">
                                                    <h5>Nowak Helme</h5>
                                                    <p>Welcome Back!</p>
                                                </div>
                                            </div>
                                           <ul class="dashboard__user-actions">
                                                
                                                <li><a href="<?= base_url('settings') ?>"><i class="far fa-cog"></i>
                                                        Settings</a></li>
                                                <li><a href="#"><i
                                                            class="fal fa-question-circle"></i> Support</a>
                                                </li>
                                               
                                                <li><a href="<?= base_url('logout') ?>"><i class="far fa-sign-out-alt"></i>
                                                        Sign
                                                        Out</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dashboard__content">
                                <div class="dashboard__my-wallet-content-box">    
                                    <div class="dashboard__my-booking-table dashboard__transactions-table">
                                        <h6>Transactions</h6>
                                        <div class="table-responsive-box">
                                            <table class="table align-middle common-table-box">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Type</th>
                                                        <th>Ref</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2025-08-28</td>
                                                        <td>Booking Payout</td>
                                                        <td>#INV-88314</td>
                                                        <td>+$120.00</td>
                                                        <td>
                                                            <span class="dashboard__completed-style">Completed</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2025-08-22</td>
                                                        <td>Withdrawal</td>
                                                        <td>#WD-00921</td>
                                                        <td>-$300.00</td>
                                                        <td>
                                                            <span class="dashboard__pending-style">Pending</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2025-08-28</td>
                                                        <td>Booking Payout</td>
                                                        <td>#INV-88314</td>
                                                        <td>+$120.00</td>
                                                        <td>
                                                            <span class="dashboard__completed-style">Completed</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2025-08-22</td>
                                                        <td>Withdrawal</td>
                                                        <td>#WD-00921</td>
                                                        <td>-$300.00</td>
                                                        <td>
                                                            <span class="dashboard__pending-style">Pending</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2025-08-28</td>
                                                        <td>Booking Payout</td>
                                                        <td>#INV-88314</td>
                                                        <td>+$120.00</td>
                                                        <td>
                                                            <span class="dashboard__cancelled-style">Cancelled</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2025-08-22</td>
                                                        <td>Withdrawal</td>
                                                        <td>#WD-00921</td>
                                                        <td>-$300.00</td>
                                                        <td>
                                                            <span class="dashboard__completed-style">Completed</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Dashboard End-->

<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>