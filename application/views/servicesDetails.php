<?php $this->load->view('includes/header'); ?>
<!--Page Header Start-->
<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
            <h3>Services Details</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?= base_url('home') ?>">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>Services Details</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Start Product Details-->
<section class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="product-details__left">
                    <div class="product-details__left-inner">
                        <div class="product-details__content-box">
                            <div class="swiper-container" id="shop-details-one__carousel">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-details__img">
                                            <img src="<?php echo base_url('assets/images/wash/wash-details.png'); ?>" alt="">
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="product-details__img">
                                            <img src="<?php echo base_url('assets/images/wash/wash-details-1.png'); ?>" alt="">
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="product-details__img">
                                            <img src="<?php echo base_url('assets/images/wash/wash-details-2.png'); ?>" alt="">
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                </div>
                            </div>
                            <div class="product-details__nav">
                                <div class="swiper-button-next" id="product-details__swiper-button-prev">
                                    <i class="fal fa-long-arrow-left"></i>
                                </div>
                                <div class="swiper-button-prev" id="product-details__swiper-button-next">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-details__thumb-box">
                            <div class="swiper-container" id="shop-details-one__thumb">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-details__thumb-img">
                                            <img src="<?php echo base_url('assets/images/wash/wash-details-3.png'); ?>" alt="">

                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="product-details__thumb-img">
                                            <img src="<?php echo base_url('assets/images/wash/wash-details-4.png'); ?>" alt="">

                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="product-details__thumb-img">
                                            <img src="<?php echo base_url('assets/images/wash/premium-wash.png'); ?>" alt="">
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="product-addons-list">

                        <div class="addon-item no-image">
                            <div class="addon-info">
                                <h4>Dustbin</h4>
                                <p>₹ 30</p>
                            </div>
                            <span class="addon-arrow">›</span>
                            <button class="addon-btn">ADD</button>
                        </div>

                        <div class="addon-item no-image">
                            <div class="addon-info">
                                <h4>Underbody Cleaning</h4>
                                <p>₹ 42</p>
                            </div>
                            <span class="addon-arrow">›</span>
                            <button class="addon-btn">ADD</button>
                        </div>

                        <div class="addon-item no-image">
                            <div class="addon-info">
                                <h4>Air Freshener</h4>
                                <p>₹ 45</p>
                            </div>
                            <span class="addon-arrow">›</span>
                            <button class="addon-btn">ADD</button>
                        </div>

                        <div class="addon-item no-image">
                            <div class="addon-info">
                                <h4>Hybrid Ceramic Coat</h4>
                                <p>₹ 141</p>
                            </div>
                            <span class="addon-arrow">›</span>
                            <button class="addon-btn">ADD</button>
                        </div>

                        <div class="addon-item no-image">
                            <div class="addon-info">
                                <h4>Tissue Box</h4>
                                <p>₹ 45</p>
                            </div>
                            <span class="addon-arrow">›</span>
                            <button class="addon-btn">ADD</button>
                        </div>

                    </div>

            </div>

            <div class="col-lg-6 col-xl-6">
                <div class="product-details__right">
                    <div class="product-details__top">
                        <h3 class="product-details__title">
                            Basic Wash <span>₹700</span>
                        </h3>
                    </div>
                    <div class="product-details__reveiw">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>55 customer reviews</span>
                    </div>
                    <div class="product-details__content">
                        <ul class="product-details-features">
                            <li>Engine Bay Cleaning</li>
                            <li>Door Jambs Cleaning</li>
                            <li>Wheel Cleaning</li>
                            <li>Floor Mat Cleaning</li>
                            <li>Tyre Dressing</li>
                            <li>Interior Air Blowing</li>
                            <li>Interior Wet Wipe</li>
                        </ul>
                    </div>
                   
                    <div class="product-details__inner">
                        <div class="product-details__quantity">
                            <h3 class="product-details__quantity-title">Quantity</h3>
                            <div class="quantity-box">
                                <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                <input type="number" id="1" value="1" />
                                <button type="button" class="add"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="product-details__buttons-boxes">
                            <div class="product-details__buttons-2">
                                <a href="<?php echo base_url('cart'); ?>" class="thm-btn">Add to
                                    Cart <span><i class="icon-next"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Product Details-->

<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>