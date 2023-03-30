<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<!--== Start Hero Area Wrapper ==-->
<section class="hero-slider-area position-relative">
    <div class="swiper hero-slider-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-slide-item">
                <div class="container">
                    <div class="row align-items-center position-relative">

                        <div >
                            <img src="assets/images/glavn.png">

                        </div>
                    </div>
                </div>
                <div class="hero-slide-text-shape"><img src="assets/images/slider/text1.webp" width="70" height="955" alt="Image"></div>
                <div class="hero-slide-social-shape"></div>
            </div>
        </div>
        <!--== Add Pagination ==-->
        <div class="hero-slider-pagination"></div>
    </div>
</section>
<!--== End Hero Area Wrapper ==-->

<!--== Start Product Category Area Wrapper ==-->
<section class="section-space pb-0">
    <div class="container">
        <div class="row g-3 g-sm-6">
            <div class="col-6 col-lg-4 col-lg-2 col-xl-2">
                <!--== Start Product Category Item ==-->
                <a href="product.html" class="product-category-item">
                    <img class="icon" src="assets/images/shop/category/motochicl.png" width="100" height="100" alt="Image-HasTech">
                    <h3 class="title">Мотоциклы</h3>
                    <span class="flag-new">new</span>
                </a>
                <!--== End Product Category Item ==-->
            </div>
            <div class="col-6 col-lg-4 col-lg-2 col-xl-2">
                <!--== Start Product Category Item ==-->
                <a href="product.html" class="product-category-item" data-bg-color="#FFEDB4">
                    <img class="icon" src="assets/images/shop/category/pit.png" width="100" height="100" alt="Image-HasTech">
                    <h3 class="title">Питбайки</h3>
                </a>
                <!--== End Product Category Item ==-->
            </div>
            <div class="col-6 col-lg-4 col-lg-2 col-xl-2 mt-lg-0 mt-sm-6 mt-4">
                <!--== Start Product Category Item ==-->
                <a href="product.html" class="product-category-item" data-bg-color="#DFE4FF">
                    <img class="icon" src="assets/images/shop/category/scuter.png" width="100" height="100" alt="Image-HasTech">
                    <h3 class="title">Скутеры</h3>
                </a>
                <!--== End Product Category Item ==-->
            </div>
            <div class="col-6 col-lg-4 col-lg-2 col-xl-2 mt-xl-0 mt-sm-6 mt-4">
                <!--== Start Product Category Item ==-->
                <a href="product.html" class="product-category-item" data-bg-color="#FFEACC">
                    <img class="icon" src="assets/images/shop/category/snegohod.png" width="100" height="100" alt="Image-HasTech">
                    <h3 class="title">Снегоходы</h3>
                    <span data-bg-color="#835BF4" class="flag-new">sale</span>
                </a>
                <!--== End Product Category Item ==-->
            </div>
            <div class="col-6 col-lg-4 col-lg-2 col-xl-2 mt-xl-0 mt-sm-6 mt-4">
                <!--== Start Product Category Item ==-->
                <a href="product.html" class="product-category-item" data-bg-color="#FFF3DA">
                    <img class="icon" src="assets/images/shop/category/moped.png" width="100" height="100" alt="Image-HasTech">
                    <h3 class="title">Мопеды</h3>
                </a>

            </div>
            <!--== End Product Category Item ==-->
            <div class="col-6 col-lg-4 col-lg-2 col-xl-2 mt-xl-0 mt-sm-6 mt-4">
                <!--== Start Product Category Item ==-->
                <a href="product.html" class="product-category-item" data-bg-color="#FFF3DA">
                    <img class="icon" src="assets/images/shop/category/cvadric.png" width="100" height="100" alt="Image-HasTech">
                    <h3 class="title">Квадроциклы</h3>
                </a>
                <!--== End Product Category Item ==-->
            </div>
        </div>
    </div>
</section>
<!--== End Product Category Area Wrapper ==-->

<!--== Start Product Area Wrapper ==-->
<section class="section-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title">Топ продаж</h2>
                    <p>Товары наиболее набирающие популярность</p>
                </div>
            </div>
        </div>
        <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
            <div class="col-6 col-lg-4 mb-4 mb-sm-9">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <div class="product-thumb">
                        <a class="d-block" href="product-details.html">
                            <img src="./assets/images/moto photo/Wels Impulse 250сс.jpg" width="370" height="450" alt="Image-HasTech">
                        </a>
                        <span class="flag-new">new</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                <span>Add to cart</span>
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4 class="title"><a href="product-details.html">Wels Impulse 250сс</a></h4>
                        <div class="prices">
                            <span class="price">144 880 ₽</span>
                        </div>
                    </div>
                    <div class="product-action-bottom">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <span>Add to cart</span>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-6 col-lg-4 mb-4 mb-sm-9">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <div class="product-thumb">
                        <a class="d-block" href="product-details.html">
                            <img src="assets/images/moto photo/yral.jpg" width="370" height="450" alt="Image-HasTech">
                        </a>
                        <span class="flag-new">new</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                <span>Add to cart</span>
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">

                        <h4 class="title"><a href="product-details.html">Урал Gear Up</a></h4>
                        <div class="prices">
                            <span class="price"> 1 189 000 ₽</span>
                        </div>
                    </div>
                    <div class="product-action-bottom">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <span>Add to cart</span>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-6 col-lg-4 mb-4 mb-sm-9">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <div class="product-thumb">
                        <a class="d-block" href="product-details.html">
                            <img src="./assets/images/moto photo/Wels CBR 300.jpg" width="370" height="450" alt="Image-HasTech">
                        </a>
                        <span class="flag-new">new</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                <span>Add to cart</span>
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-rating">

                        </div>
                        <h4 class="title"><a href="product-details.html">Wels CBR 300</a></h4>
                        <div class="prices">
                            <span class="price"> 75 300 ₽</span>

                        </div>
                    </div>
                    <div class="product-action-bottom">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <span>Add to cart</span>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-6 col-lg-4 mb-4 mb-sm-9">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <div class="product-thumb">
                        <a class="d-block" href="product-details.html">
                            <img src="./assets/images/moto photo/BMW HP4 RACE.jpg" width="370" height="450" alt="Image-HasTech">
                        </a>
                        <span class="flag-new">new</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                <span>Add to cart</span>
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-rating">

                        </div>
                        <h4 class="title"><a href="product-details.html">BMW HP4 RACE</a></h4>
                        <div class="prices">
                            <span class="price"> 5 492 000 ₽</span>

                        </div>
                    </div>
                    <div class="product-action-bottom">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <span>Add to cart</span>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-6 col-lg-4 mb-4 mb-sm-9">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <div class="product-thumb">
                        <a class="d-block" href="product-details.html">
                            <img src="./assets/images/moto photo/Yamaha YZF-R3.jpg" width="370" height="450" alt="Image-HasTech">
                        </a>
                        <span class="flag-new">new</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                <span>Add to cart</span>
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-rating">

                        </div>
                        <h4 class="title"><a href="product-details.html">Yamaha YZF-R3</a></h4>
                        <div class="prices">
                            <span class="price">519 000 ₽</span>

                        </div>
                    </div>
                    <div class="product-action-bottom">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <span>Add to cart</span>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-6 col-lg-4 mb-4 mb-sm-9">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <div class="product-thumb">
                        <a class="d-block" href="product-details.html">
                            <img src="./assets/images/moto photo/Kawasaki NINJA H2R.jpg" width="370" height="450" alt="Image-HasTech">
                        </a>
                        <span class="flag-new">new</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                <span>Add to cart</span>
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-rating">

                        </div>
                        <h4 class="title"><a href="product-details.html">Kawasaki NINJA H2R</a></h4>
                        <div class="prices">
                            <span class="price">5 100 000 ₽</span>

                        </div>
                    </div>
                    <div class="product-action-bottom">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <span>Add to cart</span>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
        </div>
    </div>
</section>
<!--== End Product Area Wrapper ==-->



<!--== Start Product Area Wrapper ==-->
<section class="section-space pb-0">
    <div class="container">
        <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
            <div class="col-6 col-lg-4 mb-4 mb-sm-8">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <div class="product-thumb">
                        <a class="d-block" href="product-details.html">
                            <img src="./assets/images/moto photo/Minsk x250.jpeg" width="370" height="450" alt="Image-HasTech">
                        </a>
                        <span class="flag-new">new</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                <span>Add to cart</span>
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-rating">

                        </div>
                        <h4 class="title"><a href="product-details.html">Minsk x250</a></h4>
                        <div class="prices">
                            <span class="price"> 99 320 ₽</span>
                        </div>
                    </div>
                    <div class="product-action-bottom">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <span>Add to cart</span>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-6 col-lg-4 mb-4 mb-sm-8">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <div class="product-thumb">
                        <a class="d-block" href="product-details.html">
                            <img src="./assets/images/moto photo/Bajaj Avenger 220 Cruise.jpg" width="370" height="450" alt="Image-HasTech">
                        </a>
                        <span class="flag-new">new</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                <span>Add to cart</span>
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-rating">

                        </div>
                        <h4 class="title"><a href="product-details.html">Bajaj Avenger 220 Cruise</a></h4>
                        <div class="prices">
                            <span class="price">251 000 ₽</span>

                        </div>
                    </div>
                    <div class="product-action-bottom">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <span>Add to cart</span>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-6 col-lg-4 mb-4 mb-sm-8">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <div class="product-thumb">
                        <a class="d-block" href="product-details.html">
                            <img src="./assets/images/moto photo/Wels Superior.jpg" width="370" height="450" alt="Image-HasTech">
                        </a>
                        <span class="flag-new">new</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                <span>Add to cart</span>
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-rating">

                        </div>
                        <h4 class="title"><a href="product-details.html">Wels Superior</a></h4>
                        <div class="prices">
                            <span class="price">104 200 ₽</span>
                        </div>
                    </div>
                    <div class="product-action-bottom">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <span>Add to cart</span>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
        </div>
    </div>
</section>
<!--== End Product Area Wrapper ==-->