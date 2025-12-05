<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
                                                    <img src="assets/images/shop/product-details-img-1.jpg" alt="">
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="product-details__img">
                                                    <img src="assets/images/shop/product-details-img-2.jpg" alt="">
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="product-details__img">
                                                    <img src="assets/images/shop/product-details-img-3.jpg" alt="">
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
                                                    <img src="assets/images/shop/product-details-thumb-img-1.jpg"
                                                        alt="">
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="product-details__thumb-img">
                                                    <img src="assets/images/shop/product-details-thumb-img-2.jpg"
                                                        alt="">
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="product-details__thumb-img">
                                                    <img src="assets/images/shop/product-details-thumb-img-3.jpg"
                                                        alt="">
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__right">
                            <div class="product-details__top">
                                <h3 class="product-details__title">
                                    Gree Air Conditioner <span>$86.00</span>
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
                                <p class="product-details__content-text1">The power to be found between the pages of a
                                    book
                                    is formidable, indeed. And these 80 inspiring quotes about books and importance of
                                    reading are here to remind you of that. From beloved bestsellers to iconic
                                    celebrities,
                                    these quotes exemplify the benefits of reading and of a good books to comfort,
                                    challenge, and inspire you.</p>
                                <p class="product-details__content-text2">REF. 4231/406 <br>
                                    Available in store</p>
                            </div>
                            <div class="product-details__select">
                                <div class="product-details__select-size">
                                    <h3>Size:</h3>
                                    <ul class="list-unstyled">
                                        <li>
                                            <input type="radio" id="size1" name="rating" checked="checked">
                                            <label for="size1">
                                                <i></i>
                                                <span>XXL</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="size2" name="rating">
                                            <label for="size2">
                                                <i></i>
                                                <span>XL</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="size3" name="rating">
                                            <label for="size3">
                                                <i></i>
                                                <span>XS</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="size4" name="rating">
                                            <label for="size4">
                                                <i></i>
                                                <span>M</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="size5" name="rating">
                                            <label for="size5">
                                                <i></i>
                                                <span>L</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="size6" name="rating">
                                            <label for="size6">
                                                <i></i>
                                                <span>S</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
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
                                    <div class="product-details__buttons-1">
                                        <a href="#" class="thm-btn">Add to
                                            Wishlist <span><i class="icon-next"></i></span>
                                        </a>
                                    </div>
                                    <div class="product-details__buttons-2">
                                        <a href="<?php echo base_url('cart'); ?>" class="thm-btn">Add to
                                            Cart <span><i class="icon-next"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-details__social">
                                <div class="title">
                                    <h3>Share with friends:</h3>
                                </div>
                                <div class="product-details__social-link">
                                    <a href="#"><span class="icon-facebook-app-symbol"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                    <a href="#"><span class="icon-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Product Details-->
   
   <?php $this->load->view('includes/footer-link'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>