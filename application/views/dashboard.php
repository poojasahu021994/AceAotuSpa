<?php $this->load->view('includes/header'); ?>

  <!--Page Header Start-->
        <section class="page-header">
            <div class="container-fluid">
                <div class="page-header__inner">
                    <h3>Dashboard</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li><span class="fas fa-angle-right"></span></li>
                            <li>Dashboard</li>
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
                                <div class="dashboard__widgets-box">
                                    <div class="row">
                                        <!-- Dashboard Card Start -->
                                        <div class="col-xl-4">
                                            <div class="dashboard__card">
                                                <div class="dashboard__card-content">
                                                    <h3 class="dashboard__stat-value">1,284</h3>
                                                    <h4 class="dashboard__stat-label">Total Booking</h4>
                                                </div>
                                                <div class="dashboard__card-icon">
                                                    <span class="far fa-shopping-bag"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Dashboard Card End -->
                                        <!-- Dashboard Card Start -->
                                        <div class="col-xl-4">
                                            <div class="dashboard__card">
                                                <div class="dashboard__card-content">
                                                    <h3 class="dashboard__stat-value">757</h3>
                                                    <h4 class="dashboard__stat-label">Pending Booking</h4>
                                                </div>
                                                <div class="dashboard__card-icon">
                                                    <span class="fal fa-hourglass"></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="dashboard__sales-chart-and-notification">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="dashboard__sales-chart">
                                                <div class="dashboard__sales-chart-title-box">
                                                    <h5>Sales Chart</h5>
                                                    <p>Last 12 months</p>
                                                </div>
                                                <canvas id="salesChart" height="180"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="dashboard__notification">
                                                <div class="dashboard__sales-chart-title-box">
                                                    <h5>Notifications</h5>
                                                    <p><a href="<?= base_url('notifications') ?>">View All</a></p>
                                                </div>
                                                <ul class="dashboard__notification-list">
                                                    <li>
                                                        <a href="#">
                                                            <div class="icon">
                                                                <span class="far fa-bell"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>New booking received</p>
                                                                <span>15 min ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="icon">
                                                                <span class="far fa-bell"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Payout processed for <span>#INV-88314</span></p>
                                                                <span>just now</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="icon">
                                                                <span class="far fa-bell"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Listing “Premium Wash” approved</p>
                                                                <span>50 min ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="icon">
                                                                <span class="far fa-bell"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>3 messages from David</p>
                                                                <span>2 months ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard__recent-booking">
                                    <div class="dashboard__sales-chart-title-box">
                                        <h5>Recent Bookings</h5>
                                        <p><a href="<?= base_url('myBooking.php') ?>">View All</a></p>
                                    </div>
                                    <div class="table-responsive-box">
                                        <table class="table align-middle common-table-box">
                                            <thead>
                                                <tr>
                                                    <th>Booking ID</th>
                                                    <th>Service</th>
                                                    <th>Date</th>
                                                    <th>Customer</th>
                                                    <th>Status</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#BK-10231</td>
                                                    <td>Full Car Wash</td>
                                                    <td>2025-08-14</td>
                                                    <td>David Lee</td>
                                                    <td>
                                                        <span class="dashboard__pending-style">Pending</span>
                                                    </td>
                                                    <td>$45</td>
                                                </tr>
                                                <tr>
                                                    <td>#BK-10218</td>
                                                    <td>Interior Detailing</td>
                                                    <td>2025-08-12</td>
                                                    <td>Sara Khan</td>
                                                    <td>
                                                        <span class="dashboard__completed-style">Completed</span>
                                                    </td>
                                                    <td>$120</td>
                                                </tr>
                                                <tr>
                                                    <td>#BK-10218</td>
                                                    <td>Interior Detailing</td>
                                                    <td>2025-08-12</td>
                                                    <td>Sara Khan</td>
                                                    <td>
                                                        <span class="dashboard__completed-style">Completed</span>
                                                    </td>
                                                    <td>$120</td>
                                                </tr>
                                                <tr>
                                                    <td>#BK-10218</td>
                                                    <td>Interior Detailing</td>
                                                    <td>2025-08-12</td>
                                                    <td>Sara Khan</td>
                                                    <td>
                                                        <span class="dashboard__completed-style">Completed</span>
                                                    </td>
                                                    <td>$120</td>
                                                </tr>
                                                <tr>
                                                    <td>#BK-10210</td>
                                                    <td>Oil Change</td>
                                                    <td>2025-08-11</td>
                                                    <td>Rafi Ahmed</td>
                                                    <td>
                                                        <span class="dashboard__cancelled-style">Cancelled</span>
                                                    </td>
                                                    <td>$0</td>
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
        </section>
        <!--Dashboard End-->

<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>