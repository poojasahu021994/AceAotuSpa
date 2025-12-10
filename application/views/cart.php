<?php $this->load->view('includes/header'); ?>

  <!--Page Header Start-->
        <section class="page-header">
            <div class="container-fluid">
                <div class="page-header__inner">
                    <h3>Add to Cart</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li><span class="fas fa-angle-right"></span></li>
                            <li>Add to Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->


  <!--Start Cart Page-->
        <section class="cart-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cart-page__left">
                            <div class="table-responsive">
                                <table class="table cart-table">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="product-box">
                                                    <div class="img-box">
                                                        <img src="<?php echo base_url('assets/images/wash/premium-wash-cart.png'); ?>" alt="">
                                                    </div>
                                                    <h3><a href="product-details.html">Premium Wash</a></h3>
                                                </div>
                                            </td>
                                            <td>₹ 700</td>
                                            <td>
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i
                                                            class="fa fa-minus"></i></button>
                                                    <input type="number" id="product-1" value="1" />
                                                    <button type="button" class="add"><i
                                                            class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                ₹ 700
                                            </td>
                                            <td>
                                                <div class="cross-icon">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="product-box">
                                                    <div class="img-box">
                                                        <img src="<?php echo base_url('assets/images/wash/wash-details-cart.png'); ?>" alt="">
                                                    </div>
                                                    <h3><a href="product-details.html">Basic wash</a>
                                                    </h3>
                                                </div>
                                            </td>
                                            <td>₹ 700</td>
                                            <td>
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i
                                                            class="fa fa-minus"></i></button>
                                                    <input type="number" id="product-2" value="1" />
                                                    <button type="button" class="add"><i
                                                            class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                ₹ 700
                                            </td>
                                            <td>
                                                <div class="cross-icon">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="product-box">
                                                    <div class="img-box">
                                                        <img src="<?php echo base_url('assets/images/wash/bike-wash-cart.png'); ?>" alt="">
                                                    </div>
                                                    <h3><a href="product-details.html">Bike Foam Wash</a></h3>
                                                </div>
                                            </td>
                                            <td>₹ 700</td>
                                            <td>
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i
                                                            class="fa fa-minus"></i></button>
                                                    <input type="number" id="product-3" value="1" />
                                                    <button type="button" class="add"><i
                                                            class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                ₹ 700
                                            </td>
                                            <td>
                                                <div class="cross-icon">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="product-box">
                                                    <div class="img-box">
                                                        <img src="<?php echo base_url('assets/images/wash/ceramic-wash-cart.png'); ?>" alt="">
                                                    </div>
                                                    <h3><a href="product-details.html">Ceramic Wash</a></h3>
                                                </div>
                                            </td>
                                            <td>₹ 700</td>
                                            <td>
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i
                                                            class="fa fa-minus"></i></button>
                                                    <input type="number" id="product-4" value="1" />
                                                    <button type="button" class="add"><i
                                                            class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                ₹ 700
                                            </td>
                                            <td>
                                                <div class="cross-icon">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cart-page__right">
                            <div class="cart-page__sidebar">
                                <div class="cart-page__shipping">
                                    <h3 class="cart-page__shipping-title">Calculated Shipping</h3>
                                    <form action="#" class="cart-page__shipping-form">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="cart-page__shipping-input-box">
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Country">Country</option>
                                                            <option value="1">Ban</option>
                                                            <option value="2">Ind</option>
                                                            <option value="3">Pak</option>
                                                            <option value="3">USA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="cart-page__shipping-input-box">
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="State/City">State/City</option>
                                                            <option value="1">Ban</option>
                                                            <option value="2">Ind</option>
                                                            <option value="3">Pak</option>
                                                            <option value="3">USA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="cart-page__shipping-input-box">
                                                    <input type="text" placeholder="Zip Code">
                                                </div>
                                            </div>
                                            <div class="cart-page__btn-box">
                                                <button type="submit" class="thm-btn">
                                                    Update <span><i class="icon-next"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="cart-page__coupon-code">
                                    <h3 class="cart-page__coupon-code-title">Coupon Code</h3>
                                    <p class="cart-page__coupon-code-text">I must explain to you how all this mistaken
                                        idea of denouncing pleasure and praising pain was born</p>
                                    <form action="#" class="default-form cart-page__coupon-code-form">
                                        <input type="text" placeholder="Enter Coupon Code">
                                        <button class="thm-btn" type="submit">
                                            Apply Coupon <span><i class="icon-next"></i></span>
                                        </button>
                                    </form>
                                </div>
                                <div class="cart-page__cart-total">
                                    <ul class="cart-total list-unstyled">
                                        <li>
                                            <span>Cart Subtotal</span>
                                            <span>₹ 2100</span>
                                        </li>
                                        <li>
                                            <span>Shipping Cost</span>
                                            <span>₹ 100</span>
                                        </li>
                                        <li>
                                            <span>Discount</span>
                                            <span>₹ 00</span>
                                        </li>
                                        <li>
                                            <span>Cart Total</span>
                                            <span class="cart-total-amount">₹ 2200</span>
                                        </li>
                                    </ul>
                                    <div class="cart-page__buttons">
                                        <div class="cart-page__buttons-1">
                                            <a class="thm-btn" href="<?php echo base_url('checkout'); ?>">Update <span><i
                                                        class="icon-next"></i></span> </a>
                                        </div>
                                        <div class="cart-page__buttons-2">
                                            <a href="<?php echo base_url('checkout'); ?>" class="thm-btn">
                                                Checkout <span><i class="icon-next"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cart Page-->

        </div><!-- /.page-wrapper -->
 <?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>