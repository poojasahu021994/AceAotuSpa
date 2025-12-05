<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php $this->load->view ('includes/header-link'); ?>
<body class="custom-cursor">
<div class="page-wrapper">
        <header class="main-header">
            <div class="main-menu__top">
                <div class="main-menu__top-inner">
                    <ul class="list-unstyled main-menu__contact-list">
                        <li>
                            <div class="icon">
                                <i class="icon-phone-call"></i>
                            </div>
                            <div class="text">
                                <p><a href="tel:9561915333">+91 9561915333</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icon-email"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:info@aceautospa.com">info@aceautospa.com</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icon-pin"></i>
                            </div>
                            <div class="text">
                                <p> Nashik, Maharashtra</p>
                            </div>
                        </li>
                    </ul>
                    <p class="main-menu__top-welcome-text">Welcome to Our Ace Auto Spa Office</p>
                    <div class="main-menu__top-right">
                        <div class="main-menu__top-time">
                            <div class="main-menu__top-time-icon">
                                <span class="fas fa-clock"></span>
                            </div>
                            <p class="main-menu__top-text">Mon - Fri: 9:00 AM – 8:00 PM</p>
                        </div>
                        <div class="main-menu__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="<?= base_url('home') ?>"><img src="<?= base_url('assets/images/resources/ACE-logo-1.png') ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list one-page-scroll-menu">
                                <li class="megamenu scrollToLink">
                                    <a href="#home">Home </a>
                                </li>
                                <li class="scrollToLink">
                                    <a href="<?= base_url('about') ?>">About</a>
                                </li>
                                <li class="scrollToLink">
                                    <a href="<?= base_url('services') ?>">Services</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Dashboard</a>
                                    <ul class="shadow-box">
                                        <li><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                                        <li><a href="<?= base_url('myProfileInfo') ?>">My Profile</a></li>
                                        <li><a href="<?= base_url('myBooking') ?>">My Booking</a></li>
                                        <li><a href="<?= base_url('bookingHistory') ?>">Booking History</a></li>
                                        <li><a href="<?= base_url('transactionsHistory') ?>">My Transactions</a></li>
                                        <li><a href="<?= base_url('notifications') ?>">Notifications</a></li>
                                        <li><a href="<?= base_url('settings') ?>">Settings</a></li>
                                        <li><a href="<?= base_url('logout') ?>">Logout</a></li>
                                    </ul>
                                </li>
                                <li class="scrollToLink">
                                    <a href="#team">Team</a>
                                </li>
                               <li class="dropdown">
                                    <a href="#">Bookings</a>
                                        <ul class="shadow-box">
                                                <li><a href="<?= base_url('cart') ?>">Car</a></li>
                                                <li><a href="<?= base_url('checkout') ?>">Bike</a></li>
                                        </ul>  
                                </li>
                                <li class="scrollToLink">
                                    <a href="#blog">Blog</a>
                                </li>
                                <li class="scrollToLink">
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__call">
                                <div class="main-menu__call-icon">
                                    <i class="icon-phone-call"></i>
                                </div>
                                <div class="main-menu__call-content">
                                    <p class="main-menu__call-sub-title">Call Anytime</p>
                                    <h5 class="main-menu__call-number"><a href="tel:9288006780">+92 ( 8800 ) -
                                            6780</a></h5>
                                </div>
                            </div>
                               <div class="main-menu__search-cart-box">
                                <div class="main-menu__search-cart-box">
                                    <div class="main-menu__search-box" onclick="openPopup()">
                                        <a href="#" class="main-menu__search  fal fa-search"></a>
                                
                                    </div>
                                   
                                    <div class="main-menu__cart-box">
                                        <a href="" class="main-menu__cart">
                                            <span class="far fa-shopping-cart"></span>
                                            <span class="main-menu__cart-count">02</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu__nav-sidebar-icon">
                                <a class="navSidebar-button" href="#">
                                    <span class="icon-dots-menu-one"></span>
                                    <span class="icon-dots-menu-two"></span>
                                    <span class="icon-dots-menu-three"></span>
                                </a>
                            </div>
                            
                            <div class="main-menu__btn-box user-dropdown">
    <a href="#" class="thm-btn-1 user-btn">
        <i class="fa fa-user"></i>
    </a>

    <ul class="user-dropdown-menu">
        <li><a href="<?= base_url('login') ?>">Login</a></li>
        <li><a href="<?= base_url('signUp') ?>">Sign Up</a></li>
        <li><a href="<?= base_url('login') ?>">Help</a></li>
    </ul>
</div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div>
        <!-- /.stricky-header -->

<!-- Overlay -->
<div id="overlay" class="overlay hidden" onclick="closePopup()"></div>

<!-- Main Popup -->
<div id="locationPopup" class="popup hidden">

    <!-- HEADER -->
    <div class="popup-header">
        <div class="title">
            <i class="fa fa-map-marker"></i> Change Location
        </div>
        <span class="close-btn" onclick="closePopup()">✕</span>
    </div>

    <!-- STEP 1 : LOCATION -->
    <div id="step1">

        <button class="btn-primary" onclick="detectLocation()">DETECT MY LOCATION</button>

        <div class="or">OR</div>

        <input type="text" id="locationInput" class="input-box" placeholder="Enter your location">
<ul id="suggestionsList" class="suggestions hidden"></ul>
        <p class="error hidden" id="errorMsg">
            We cannot deliver to this location.
        </p>

        <label class="address-box hidden" id="addressBox">
            <i class="fa fa-home"></i>
            <span id="selectedAddress"></span>
            <i class="fa fa-trash remove" onclick="clearLocation()"></i>
        </label>

        <button class="btn-primary mt-3" onclick="goToStep2()">NEXT</button>
    </div>

    <!-- STEP 2 : VEHICLE TYPE -->
    <div id="step2" class="hidden">

        <div class="popup-header small">
            <span class="back-btn" onclick="backToStep1()">←</span>
            <h3>Select Vehicle</h3>
        </div>

        <div class="vehicle-options">
            <label class="vehicle-card">
                <input type="radio" name="vehicle" value="Car">
                🚗 Car
            </label>

            <label class="vehicle-card">
                <input type="radio" name="vehicle" value="Bike">
                🏍️ Bike
            </label>
        </div>
  <!-- NEW ERROR BOX -->
    <p class="error hidden" id="vehicleError">Please select a vehicle!</p>

        <button class="btn-primary mt-3" onclick="finishSelection()">SELECT & CLOSE</button>
    </div>

</div>

