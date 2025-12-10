<?php $this->load->view('includes/header'); ?>

<!--Page Header Start-->
<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
           
            <h3>Booking</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?= base_url('home') ?>">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>Bookings</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->
<div class="dashboard__content">
    <div class="dashboard__my-booking-history-content-box">
        <h3 class="dashboard__my-booking-title">Booking History</h3>
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
                            <td>#BK-21001</td>
                            <td>Premium Car Foam Wash</td>
                            <td>2025-12-12</td>
                            <td>10:30 AM</td>
                            <td>Rohit Sharma</td>
                            <td><span class="dashboard__pending-style">Pending</span></td>
                            <td>
                                <button class="dashboard__my-booking-btns">View</button>
                                <button class="dashboard__my-booking-btns">Cancel</button>
                            </td>
                        </tr>

                        <tr>
                            <td>#BK-20987</td>
                            <td>Bike Wash & Polishing</td>
                            <td>2025-12-10</td>
                            <td>02:00 PM</td>
                            <td>Amit Patil</td>
                            <td><span class="dashboard__confirmed-style">Confirmed</span></td>
                            <td>
                                <button class="dashboard__my-booking-btns">View</button>
                                <button class="dashboard__my-booking-btns">Cancel</button>
                            </td>
                        </tr>

                        <tr>
                            <td>#BK-20965</td>
                            <td>Interior Deep Cleaning</td>
                            <td>2025-12-09</td>
                            <td>11:15 AM</td>
                            <td>Sneha Kale</td>
                            <td><span class="dashboard__completed-style">Completed</span></td>
                            <td>
                                <button class="dashboard__my-booking-btns">View</button>
                                <button class="dashboard__my-booking-btns">Cancel</button>
                            </td>
                        </tr>

                        <tr>
                            <td>#BK-20940</td>
                            <td>Ceramic Coating – Car</td>
                            <td>2025-12-08</td>
                            <td>04:30 PM</td>
                            <td>Pravin More</td>
                            <td><span class="dashboard__pending-style">Pending</span></td>
                            <td>
                                <button class="dashboard__my-booking-btns">View</button>
                                <button class="dashboard__my-booking-btns">Cancel</button>
                            </td>
                        </tr>

                        <tr>
                            <td>#BK-20912</td>
                            <td>Car Wash & Wax</td>
                            <td>2025-12-07</td>
                            <td>09:45 AM</td>
                            <td>Deepak Joshi</td>
                            <td><span class="dashboard__completed-style">Completed</span></td>
                            <td>
                                <button class="dashboard__my-booking-btns">View</button>
                                <button class="dashboard__my-booking-btns">Cancel</button>
                            </td>
                        </tr>

                        <tr>
                            <td>#BK-20898</td>
                            <td>Bike Foam Wash</td>
                            <td>2025-12-06</td>
                            <td>12:20 PM</td>
                            <td>Komal Wani</td>
                            <td><span class="dashboard__confirmed-style">Confirmed</span></td>
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


<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>