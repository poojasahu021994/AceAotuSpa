<?php $this->load->view('includes/header'); ?>

  <!--Page Header Start-->
        <section class="page-header">
           
            <div class="container-fluid">
                <div class="page-header__inner">
                   
                    <h3>Dashboard</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><span class="fas fa-angle-right"></span></li>
                            <li>My Booking</li>
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
                                    <h4 class="dashboard__user-name">User</h4>
                                    <p class="dashboard__user-email"><a
                                            href="mailto:annexiva@example.com">User@example.com</a></p>
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
                            </ul>                        </aside>
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
                                <div class="dashboard__my-booking-content-box">
                                    <h3 class="dashboard__my-booking-title">My Booking</h3>
                                    <form class="dashboard__my-booking-form" action="https://dreamlayout.mnsithub.com/html/servixa/main-html/assets/inc/sendemail.php"
                                        method="post">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="dashboard__my-booking-form-input-box">
                                                    <input type="search" placeholder="Search booking ID or customer">
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="dashboard__my-booking-form-input-box">
                                                    <div class="select-box">
                                                        <select class="selectmenu wide">
                                                            <option selected="selected">Status All</option>
                                                            <option>Pending</option>
                                                            <option>Completed</option>
                                                            <option>Confirmed</option>
                                                            <option>Cancelled</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="dashboard__my-booking-form-input-box">
                                                    <input type="text" placeholder="mm/dd/yyy" name="date"
                                                        id="datepicker">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="dashboard__my-booking-btn-box">
                                                    <button type="button" class="thm-btn">Filter</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="dashboard__my-booking-table">
                                        <div class="table-responsive-box">
                                            <table class="table align-middle common-table-box">
                                                <thead>
                                                    <tr>
                                                        <th>Booking ID</th>
                                                        <th>Service</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Customer</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#BK-10091</td>
                                                        <td>Car Wash</td>
                                                        <td>2025-09-01</td>
                                                        <td>10:30</td>
                                                        <td>Rahim</td>
                                                        <td><span class="dashboard__pending-style">Pending</span>
                                                        </td>
                                                        <td>
                                                            <button class="dashboard__my-booking-btns">View</button>
                                                            <button class="dashboard__my-booking-btns">Cancel</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#BK-10082</td>
                                                        <td>AC Service</td>
                                                        <td>2025-08-29</td>
                                                        <td>14:00</td>
                                                        <td>Karim</td>
                                                        <td>
                                                            <span class="dashboard__completed-style">Completed</span>
                                                        </td>
                                                        <td>
                                                            <button class="dashboard__my-booking-btns">View</button>
                                                            <button class="dashboard__my-booking-btns">Cancel</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#BK-10072</td>
                                                        <td>Oil Change</td>
                                                        <td>2025-08-27</td>
                                                        <td>11:15</td>
                                                        <td>Jui</td>
                                                        <td>
                                                            <span class="dashboard__confirmed-style">Confirmed</span>
                                                        </td>
                                                        <td>
                                                            <button class="dashboard__my-booking-btns">View</button>
                                                            <button class="dashboard__my-booking-btns">Cancel</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#BK-10091</td>
                                                        <td>Car Wash</td>
                                                        <td>2025-09-01</td>
                                                        <td>10:30</td>
                                                        <td>Rahim</td>
                                                        <td><span class="dashboard__pending-style">Pending</span>
                                                        </td>
                                                        <td>
                                                            <button class="dashboard__my-booking-btns">View</button>
                                                            <button class="dashboard__my-booking-btns">Cancel</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#BK-10082</td>
                                                        <td>AC Service</td>
                                                        <td>2025-08-29</td>
                                                        <td>14:00</td>
                                                        <td>Karim</td>
                                                        <td><span class="dashboard__completed-style">Completed</span>
                                                        </td>
                                                        <td>
                                                            <button class="dashboard__my-booking-btns">View</button>
                                                            <button class="dashboard__my-booking-btns">Cancel</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#BK-10072</td>
                                                        <td>Oil Change</td>
                                                        <td>2025-08-27</td>
                                                        <td>11:15</td>
                                                        <td>Jui</td>
                                                        <td>
                                                            <span class="dashboard__confirmed-style">Confirmed</span>
                                                        </td>
                                                        <td>
                                                            <button class="dashboard__my-booking-btns">View</button>
                                                            <button class="dashboard__my-booking-btns">Cancel</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#BK-10082</td>
                                                        <td>AC Service</td>
                                                        <td>2025-08-29</td>
                                                        <td>14:00</td>
                                                        <td>Karim</td>
                                                        <td><span class="dashboard__completed-style">Completed</span>
                                                        </td>
                                                        <td>
                                                            <button class="dashboard__my-booking-btns">View</button>
                                                            <button class="dashboard__my-booking-btns">Cancel</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#BK-10072</td>
                                                        <td>Oil Change</td>
                                                        <td>2025-08-27</td>
                                                        <td>11:15</td>
                                                        <td>Jui</td>
                                                        <td>
                                                            <span class="dashboard__confirmed-style">Confirmed</span>
                                                        </td>
                                                        <td>
                                                            <button class="dashboard__my-booking-btns">View</button>
                                                            <button class="dashboard__my-booking-btns">Cancel</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="blog-list__pagination dashboard-pagination">
                                        <ul class="pg-pagination list-unstyled">
                                            <li class="count active"><a href="#">1</a></li>
                                            <li class="count"><a href="#">2</a></li>
                                            <li class="count"><a href="#">3</a></li>
                                            <li class="next">
                                                <a href="#" aria-label="Next"><i class="fas fa-angle-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Dashboard End-->
 
 </div><!-- /.page-wrapper -->
<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>