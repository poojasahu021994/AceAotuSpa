<?php $this->load->view('includes/header'); ?>

<!--Page Header Start-->
<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
            <h3>Dashboard</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Product Start-->
<section class="product">
    <div class="container">
        <div class="row">


            <div class="col-xl-9 col-lg-12">
                <div class="product__items">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="product__showing-result">
                                <div class="product__showing-text-box">
                                    <p class="product__showing-text">Showing 1–12/14 of 14 results</p>
                                </div>
                                <div class="product__showing-sort">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Sort by popular">Sort by popular</option>
                                            <option value="1">Sort by popular</option>
                                            <option value="2">Sort by Price</option>
                                            <option value="3">Sort by Ratings</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product__all">
                        <div class="product__all-tab">
                            <div class="product__all-tab-button">
                                <ul class="tabs-button-box clearfix">
                                    <li data-tab="#grid" class="tab-btn-item active-btn-item">
                                        <div class="product__all-tab-button-icon one">
                                            <i class="fa fa-solid fa-bars"></i>
                                        </div>
                                    </li>
                                    <li data-tab="#list" class="tab-btn-item">
                                        <div class="product__all-tab-button-icon">
                                            <i class="fa fa-solid fa-list-ul"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!--Start Tabs Content Box-->
                            <div class="tabs-content-box">
                                <!--Start Tab-->
                                <div class="tab-content-box-item tab-content-box-item-active" id="grid">
                                    <div class="product__all-tab-content-box-item">
                                        <div class="product__all-tab-single">

                                            <div class="row">

                                                <!-- Basic Wash -->
                                                <div class="col-xl-4 col-lg-6 col-md-6">
                                                    <div class="single-product-style1">
                                                        <div class="single-product-style1__img">
                                                            <img src="<?php echo base_url('assets/images/wash/basic-wash.png'); ?>" alt="">
                                                            <img src="assets/images/wash/basic-wash.png" alt="">
                                                            <ul class="single-product-style1__overlay">
                                                                <li>
                                                                    <p>Popular</p>
                                                                </li>
                                                            </ul>
                                                            <ul class="single-product-style1__info">
                                                                <li><a href="#"><i class="fa fa-regular fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-solid fa-cart-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-regular fa-eye"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-solid fa-repeat"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="single-product-style1__content">

                                                            <!-- 🔹 Existing TOP section (same as your UI) -->
                                                            <div class="single-product-style1__content-left">
                                                                <h4><a href="<?php echo base_url('servicesDetails'); ?>">Basic Wash</a></h4>
                                                                <p>₹700</p>
                                                            </div>

                                                            <div class="single-product-style1__content-right">
                                                                <div class="single-product-style1__review">
                                                                    <i class="fa fa-star"></i>
                                                                    <p>4.9</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- NEW CONTENT: Features + Details -->
                                                        <div class="service-details-box">

                                                            <ul class="service-features">
                                                                <li><strong>Wash & Wax</strong></li>
                                                                <li>Engine Bay Cleaning</li>
                                                            </ul>

                                                            <div class="more-details-row">
                                                                <a href="<?php echo base_url('servicesDetails'); ?>" class="more-btn">+ 5 more ➜</a>
                                                                <a href="<?php echo base_url('servicesDetails'); ?>" class="view-details">View Details</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pro Foam Wash -->
                                                <div class="col-xl-4 col-lg-6 col-md-6">
                                                    <div class="single-product-style1">
                                                        <div class="single-product-style1__img">
                                                            <img src="assets/images/wash/premium-wash.png" alt="">
                                                            <img src="assets/images/wash/premium-wash.png" alt="">
                                                            <ul class="single-product-style1__overlay">
                                                                <li>
                                                                    <p>Best Seller</p>
                                                                </li>
                                                            </ul>
                                                            <ul class="single-product-style1__info">
                                                                <li><a href="#"><i class="fa fa-regular fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-solid fa-cart-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-regular fa-eye"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-solid fa-repeat"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="single-product-style1__content">
                                                            <div class="single-product-style1__content-left">
                                                                <h4><a href="#">Pro Foam Wash</a></h4>
                                                                <p>₹1200</p>
                                                            </div>
                                                            <div class="single-product-style1__content-right">
                                                                <div class="single-product-style1__review">
                                                                    <i class="fa fa-star"></i>
                                                                    <p>5.0</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="service-details-box">

                                                            <ul class="service-features">
                                                                <li><strong>Wash & Wax</strong></li>
                                                                <li>Engine Bay Cleaning</li>
                                                            </ul>

                                                            <div class="more-details-row">
                                                                <a href="<?php echo base_url('servicesDetails'); ?>" class="more-btn">+ 5 more ➜</a>
                                                                <a href="<?php echo base_url('servicesDetails'); ?>" class="view-details">View Details</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Ceramic Wash -->
                                                <div class="col-xl-4 col-lg-6 col-md-6">
                                                    <div class="single-product-style1">
                                                        <div class="single-product-style1__img">
                                                            <img src="assets/images/wash/ceramic-wash.png" alt="">
                                                            <img src="assets/images/wash/ceramic-wash.png" alt="">
                                                            <ul class="single-product-style1__overlay">
                                                                <li>
                                                                    <p>10% Off</p>
                                                                </li>
                                                            </ul>
                                                            <ul class="single-product-style1__info">
                                                                <li><a href="#"><i class="fa fa-regular fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-solid fa-cart-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-regular fa-eye"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-solid fa-repeat"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="single-product-style1__content">
                                                            <div class="single-product-style1__content-left">
                                                                <h4><a href="#">Ceramic Wash</a></h4>
                                                                <p><del>₹1500</del> ₹1350</p>
                                                            </div>
                                                            <div class="single-product-style1__content-right">
                                                                <div class="single-product-style1__review">
                                                                    <i class="fa fa-star"></i>
                                                                    <p>4.8</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="service-details-box">

                                                            <ul class="service-features">
                                                                <li><strong>Wash & Wax</strong></li>
                                                                <li>Engine Bay Cleaning</li>
                                                            </ul>

                                                            <div class="more-details-row">
                                                                <a href="<?php echo base_url('servicesDetails'); ?>" class="more-btn">+ 5 more ➜</a>
                                                                <a href="<?php echo base_url('servicesDetails'); ?>" class="view-details">View Details</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Bike Wash -->
                                                <div class="col-xl-4 col-lg-6 col-md-6">
                                                    <div class="single-product-style1">
                                                        <div class="single-product-style1__img">
                                                            <img src="assets/images/wash/bike-foam.png" alt="">
                                                            <img src="assets/images/wash/bike-foam.png" alt="">
                                                            <ul class="single-product-style1__info">
                                                                <li><a href="#"><i class="fa fa-regular fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-solid fa-cart-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-regular fa-eye"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-solid fa-repeat"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="single-product-style1__content">
                                                            <div class="single-product-style1__content-left">
                                                                <h4><a href="#">Bike Foam Wash</a></h4>
                                                                <p>₹300</p>
                                                            </div>
                                                            <div class="single-product-style1__content-right">
                                                                <div class="single-product-style1__review">
                                                                    <i class="fa fa-star"></i>
                                                                    <p>4.7</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="service-details-box">

                                                            <ul class="service-features">
                                                                <li><strong>Wash & Wax</strong></li>
                                                                <li>Engine Bay Cleaning</li>
                                                            </ul>

                                                            <div class="more-details-row">
                                                                <a href="<?php echo base_url('servicesDetails'); ?>" class="more-btn">+ 5 more ➜</a>
                                                                <a href="<?php echo base_url('servicesDetails'); ?>" class="view-details">View Details</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Interior Deep Cleaning -->
                                                <div class="col-xl-4 col-lg-6 col-md-6">
                                                    <div class="single-product-style1">
                                                        <div class="single-product-style1__img">
                                                            <img src="assets/images/wash/interior-cleaning.png" alt="">
                                                            <img src="assets/images/wash/interior-cleaning.png" alt="">
                                                            <ul class="single-product-style1__overlay">
                                                                <li>
                                                                    <p>5% Off</p>
                                                                </li>
                                                            </ul>
                                                            <ul class="single-product-style1__info">
                                                                <li><a href="#"><i class="fa fa-regular fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-solid fa-cart-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-regular fa-eye"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-solid fa-repeat"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="single-product-style1__content">
                                                            <div class="single-product-style1__content-left">
                                                                <h4><a href="#">Interior Deep Cleaning</a></h4>
                                                                <p><del>₹2000</del> ₹1900</p>
                                                            </div>
                                                            <div class="single-product-style1__content-right">
                                                                <div class="single-product-style1__review">
                                                                    <i class="fa fa-star"></i>
                                                                    <p>4.9</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="service-details-box">

                                                            <ul class="service-features">
                                                                <li><strong>Wash & Wax</strong></li>
                                                                <li>Engine Bay Cleaning</li>
                                                            </ul>

                                                            <div class="more-details-row">
                                                                <a href="<?php echo base_url('servicesDetails'); ?>" class="more-btn">+ 5 more ➜</a>
                                                                <a href="<?php echo base_url('servicesDetails'); ?>" class="view-details">View Details</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Full Body Detailing -->
                                                <div class="col-xl-4 col-lg-6 col-md-6">
                                                    <div class="single-product-style1">
                                                        <div class="single-product-style1__img">
                                                            <img src="assets/images/wash/detailing.png" alt="">
                                                            <img src="assets/images/wash/detailing.png" alt="">
                                                            <ul class="single-product-style1__info">
                                                                <li><a href="#"><i class="fa fa-regular fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-solid fa-cart-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-regular fa-eye"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-solid fa-repeat"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="single-product-style1__content">
                                                            <div class="single-product-style1__content-left">
                                                                <h4><a href="#">Full Body Detailing</a></h4>
                                                                <p>₹3500</p>
                                                            </div>
                                                            <div class="single-product-style1__content-right">
                                                                <div class="single-product-style1__review">
                                                                    <i class="fa fa-star"></i>
                                                                    <p>5.0</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="service-details-box">

                                                            <ul class="service-features">
                                                                <li><strong>Wash & Wax</strong></li>
                                                                <li>Engine Bay Cleaning</li>
                                                            </ul>

                                                            <div class="more-details-row">
                                                                <a href="<?php echo base_url('servicesDetails'); ?>" class="more-btn">+ 5 more ➜</a>
                                                                <a href="<?php echo base_url('servicesDetails'); ?>" class="view-details">View Details</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Tab-->
                                <!--Start Tab-->
                                <div class="tab-content-box-item" id="list">
                                    <div class="product__all-tab-content-box-item">
                                        <div class="product__all-tab-single">
                                            <div class="row">

                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-1.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-1.jpg"
                                                                        alt="">
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>New</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Gree Air Conditioner
                                                                            </a>
                                                                        </h4>
                                                                        <p>$33.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-2.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-2.jpg"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Pliers | Cutting, Gripping
                                                                            </a>
                                                                        </h4>
                                                                        <p>$50.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-3.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-3.jpg"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Gear and wrench
                                                                            </a>
                                                                        </h4>
                                                                        <p>$40.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-4.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-4.jpg"
                                                                        alt="">
                                                                </div>
                                                                <ul class="single-product-style1__overlay">
                                                                    <li>
                                                                        <p>5% Off</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Nut Driver
                                                                            </a>
                                                                        </h4>
                                                                        <p><del>$33.00</del>$28.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-5.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-5.jpg"
                                                                        alt="">
                                                                </div>
                                                                <ul class="single-product-style1__overlay">
                                                                    <li>
                                                                        <p>5% Off</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Screwdriver and wrench
                                                                            </a>
                                                                        </h4>
                                                                        <p><del>$25.00</del>$20.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-6.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-6.jpg"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Monitor Cable
                                                                            </a>
                                                                        </h4>
                                                                        <p>$35.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-7.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-7.jpg"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Fiber Optical Cable
                                                                            </a>
                                                                        </h4>
                                                                        <p>$44.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-8.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-8.jpg"
                                                                        alt="">
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>New</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Electrical Wire
                                                                            </a>
                                                                        </h4>
                                                                        <p>$27.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-9.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-9.jpg"
                                                                        alt="">
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>3% Off</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Computer power supply
                                                                            </a>
                                                                        </h4>
                                                                        <p><del>$49.00</del>$52.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-10.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-10.jpg"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Fite ON AC_DC Adapter
                                                                            </a>
                                                                        </h4>
                                                                        <p><del>$33.00</del>$28.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-11.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-11.jpg"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Wireless Mouse Keyboard
                                                                            </a>
                                                                        </h4>
                                                                        <p>$40.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-12.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-12.jpg"
                                                                        alt="">
                                                                </div>
                                                                <ul class="single-product-style1__overlay">
                                                                    <li>
                                                                        <p>New</p>
                                                                    </li>
                                                                    <li>
                                                                        <p>7% Off</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Gaming Headset
                                                                            </a>
                                                                        </h4>
                                                                        <p><del>$36.00</del>$43.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-1.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-1.jpg"
                                                                        alt="">
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>New</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Gree Air Conditioner
                                                                            </a>
                                                                        </h4>
                                                                        <p>$55.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->
                                                <!--Product All Single Start-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-product-style2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__img">
                                                                    <img src="assets/images/shop/shop-product-2-2.jpg"
                                                                        alt="">
                                                                    <img src="assets/images/shop/shop-product-2-2.jpg"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="single-product-style2__content">
                                                                    <div class="single-product-style2__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="single-product-style2__text">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Pliers | Cutting, Gripping
                                                                            </a>
                                                                        </h4>
                                                                        <p>$80.00</p>
                                                                    </div>
                                                                    <ul class="single-product-style2__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i
                                                                                    class="fa fa-regular fa-heart">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i
                                                                                    class="fa fa-solid fa-cart-plus">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i
                                                                                    class="fa fa-solid fa-repeat">
                                                                                </i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Product All Single Start-->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Tab-->
                            </div>
                            <!--End Tabs Content Box-->
                        </div>
                        <ul class="styled-pagination text-center clearfix list-unstyled">
                            <li class="arrow prev active">
                                <a href="#">
                                    <span class="fas fa-angle-left"></span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="arrow next">
                                <a href="#">
                                    <span class="fas fa-angle-right"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-12">
                <div class="product__sidebar">
                    <div class="shop-search product__sidebar-single">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="product__price-ranger product__sidebar-single">
                        <h3 class="product__sidebar-title">Price</h3>
                        <div class="price-ranger">
                            <div id="slider-range"></div>
                            <div class="ranger-min-max-block">
                                <input type="text" readonly class="min">
                                <span>-</span>
                                <input type="text" readonly class="max">
                                <input type="submit" value="Filter">
                            </div>
                        </div>
                    </div>

                    <div class="shop-category product__sidebar-single">
                        <h3 class="product__sidebar-title">Categories</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Car wash</a></li>
                            <li class="active"><a href="#">Monthly Packages </a></li>
                            <li><a href="#">Deep Clean</a></li>
                            <li><a href="#">Special Car Care</a></li>
                            <li><a href="#">Bike & Scooty</a></li>
                        </ul>
                    </div>

                </div>
            </div>



        </div>
    </div>
</section>
<!--Product End-->


<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>

