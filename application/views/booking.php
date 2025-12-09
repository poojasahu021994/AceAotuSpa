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
            <h3>Dashboard</h3>
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
                            <th>Customer</th>
                            <th>Status</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#CW-00125</td>
                            <td>Basic Car Wash</td>
                            <td>2025-07-21</td>
                            <td>Rohit</td>
                            <td><span class="dashboard__completed-style">Completed</span></td>
                            <td>₹700</td>
                        </tr>

                        <tr>
                            <td>#CW-00118</td>
                            <td>Foam Wash</td>
                            <td>2025-07-19</td>
                            <td>Pooja</td>
                            <td><span class="dashboard__completed-style">Completed</span></td>
                            <td>₹850</td>
                        </tr>

                        <tr>
                            <td>#CW-00110</td>
                            <td>Bike Wash + Polish</td>
                            <td>2025-07-17</td>
                            <td>Akash</td>
                            <td><span class="dashboard__cancelled-style">Cancelled</span></td>
                            <td>₹0</td>
                        </tr>

                        <tr>
                            <td>#CW-00105</td>
                            <td>Interior Deep Cleaning</td>
                            <td>2025-07-14</td>
                            <td>Neha</td>
                            <td><span class="dashboard__completed-style">Completed</span></td>
                            <td>₹1500</td>
                        </tr>

                        <tr>
                            <td>#CW-00098</td>
                            <td>Engine Bay Cleaning</td>
                            <td>2025-07-10</td>
                            <td>Vikas</td>
                            <td><span class="dashboard__completed-style">Completed</span></td>
                            <td>₹500</td>
                        </tr>

                        <tr>
                            <td>#CW-00092</td>
                            <td>Premium Ceramic Wash</td>
                            <td>2025-07-08</td>
                            <td>Amit</td>
                            <td><span class="dashboard__completed-style">Completed</span></td>
                            <td>₹1500</td>
                        </tr>

                        <tr>
                            <td>#CW-00085</td>
                            <td>Bike Foam Wash</td>
                            <td>2025-07-07</td>
                            <td>Sonal</td>
                            <td><span class="dashboard__cancelled-style">Cancelled</span></td>
                            <td>₹0</td>
                        </tr>

                        <tr>
                            <td>#CW-00080</td>
                            <td>Full Car Detailing</td>
                            <td>2025-07-05</td>
                            <td>Kunal</td>
                            <td><span class="dashboard__completed-style">Completed</span></td>
                            <td>₹2500</td>
                        </tr>

                        <tr>
                            <td>#CW-00076</td>
                            <td>Vacuum & Interior Wipe</td>
                            <td>2025-07-03</td>
                            <td>Meera</td>
                            <td><span class="dashboard__completed-style">Completed</span></td>
                            <td>₹400</td>
                        </tr>

                        <tr>
                            <td>#CW-00070</td>
                            <td>Tyre Cleaning & Dressing</td>
                            <td>2025-07-01</td>
                            <td>Jay</td>
                            <td><span class="dashboard__completed-style">Completed</span></td>
                            <td>₹250</td>
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