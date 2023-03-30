<?php
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Motosale- магазин мототехники</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="Brancy - Cosmetic & Beauty Salon Website Template">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="bootstrap, ecommerce, ecommerce html, beauty, cosmetic shop, beauty products, cosmetic, beauty shop, cosmetic store, shop, beauty store, spa, cosmetic, cosmetics, beauty salon" />
        <meta name="author" content="Рубан В.А" />
        <?php $this->head() ?>
    </head>
    <?php $this->beginBody() ?>
    <body>

    <!--== Wrapper Start ==-->
    <div class="wrapper">

        <!--== Start Header Wrapper ==-->
        <header class="header-area sticky-header header-transparent">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5 col-lg-2 col-xl-1">
                        <div class="header-logo">
                            <a href="index.html">
                                <img class="logo-main" src="assets/images/logo.png" width="95" height="68" alt="Logo" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-7 d-none d-lg-block">
                        <div class="header-navigation ps-7">
                            <ul class="main-nav justify-content-start">
                                <li class="has-submenu"><a href="/product">Магазин</a>

                                </li>
                                <li><a href="about-us.html">Контакты</a></li>
                                <li class="has-submenu position-static"><a href="product.html">О нас</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-7 col-lg-3 col-xl-4">
                        <div class="header-action justify-content-end">
                            <button class="header-action-btn ms-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch">
                                <span class="icon">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect class="icon-rect" width="30" height="30" fill="url(#pattern1)"/>
                    <defs>
                      <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_504:11" transform="scale(0.0333333)"/>
                      </pattern>
                      <image id="image0_504:11" width="30" height="30" xlink:href="assets/images/icons/poisk.png"/>
                    </defs>
                  </svg>
                </span>
                            </button>

                            <button class="header-action-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                                <span class="icon">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect class="icon-rect" width="30" height="30" fill="url(#pattern2)"/>
                    <defs>
                      <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_504:9" transform="scale(0.0333333)"/>
                      </pattern>
                      <image id="image0_504:9" width="30" height="30" xlink:href="assets/images/icons/korzina.png"/> </defs>
                  </svg>
                </span>
                            </button>

                            <a class="header-action-btn" href="account-login.html">
                                <span class="icon">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect class="icon-rect" width="30" height="30" fill="url(#pattern3)"/>
                    <defs>
                      <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_504:10" transform="scale(0.0333333)"/>
                      </pattern>
                      <image id="image0_504:10" width="30" height="30" xlink:href="assets/images/icons/profil.png"/> </defs>
                  </svg>
                </span>
                            </a>

                            <button class="header-menu-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->

        <main class="main-content">

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
                <div class="hero-slide-social-media">
                    <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i class="fa fa-pinterest-p"></i></a>
                    <a href="https://twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
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
                                        <img src="assets/images/shop/1.webp" width="370" height="450" alt="Image-HasTech">
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
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="reviews">150 reviews</div>
                                    </div>
                                    <h4 class="title"><a href="product-details.html">Readable content DX22</a></h4>
                                    <div class="prices">
                                        <span class="price">$210.00</span>
                                        <span class="price-old">300.00</span>
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
                                        <img src="assets/images/shop/2.webp" width="370" height="450" alt="Image-HasTech">
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
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="reviews">150 reviews</div>
                                    </div>
                                    <h4 class="title"><a href="product-details.html">Modern Eye Brush</a></h4>
                                    <div class="prices">
                                        <span class="price">$210.00</span>
                                        <span class="price-old">300.00</span>
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
                                        <img src="assets/images/shop/3.webp" width="370" height="450" alt="Image-HasTech">
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
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="reviews">150 reviews</div>
                                    </div>
                                    <h4 class="title"><a href="product-details.html">Voyage face cleaner</a></h4>
                                    <div class="prices">
                                        <span class="price">$210.00</span>
                                        <span class="price-old">300.00</span>
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
                                        <img src="assets/images/shop/4.webp" width="370" height="450" alt="Image-HasTech">
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
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="reviews">150 reviews</div>
                                    </div>
                                    <h4 class="title"><a href="product-details.html">Impulse Duffle</a></h4>
                                    <div class="prices">
                                        <span class="price">$210.00</span>
                                        <span class="price-old">300.00</span>
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
                                        <img src="assets/images/shop/5.webp" width="370" height="450" alt="Image-HasTech">
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
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="reviews">150 reviews</div>
                                    </div>
                                    <h4 class="title"><a href="product-details.html">Sprite Yoga Straps1</a></h4>
                                    <div class="prices">
                                        <span class="price">$210.00</span>
                                        <span class="price-old">300.00</span>
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
                                        <img src="assets/images/shop/6.webp" width="370" height="450" alt="Image-HasTech">
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
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="reviews">150 reviews</div>
                                    </div>
                                    <h4 class="title"><a href="product-details.html">Fusion facial cream</a></h4>
                                    <div class="prices">
                                        <span class="price">$210.00</span>
                                        <span class="price-old">300.00</span>
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

            <!--== Start Product Banner Area Wrapper ==-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <!--== Start Product Category Item ==-->
                            <a href="product.html" class="product-banner-item">
                                <img src="assets/images/shop/banner/1.webp" width="370" height="370" alt="Image-HasTech">
                            </a>
                            <!--== End Product Category Item ==-->
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-sm-0 mt-6">
                            <!--== Start Product Category Item ==-->
                            <a href="product.html" class="product-banner-item">
                                <img src="assets/images/shop/banner/2.webp" width="370" height="370" alt="Image-HasTech">
                            </a>
                            <!--== End Product Category Item ==-->
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-lg-0 mt-6">
                            <!--== Start Product Category Item ==-->
                            <a href="product.html" class="product-banner-item">
                                <img src="assets/images/shop/banner/3.webp" width="370" height="370" alt="Image-HasTech">
                            </a>
                            <!--== End Product Category Item ==-->
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Banner Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="section-space pb-0">
                <div class="container">
                    <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                        <div class="col-6 col-lg-4 mb-4 mb-sm-8">
                            <!--== Start Product Item ==-->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/shop/4.webp" width="370" height="450" alt="Image-HasTech">
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
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="reviews">150 reviews</div>
                                    </div>
                                    <h4 class="title"><a href="product-details.html">Readable content DX22</a></h4>
                                    <div class="prices">
                                        <span class="price">$210.00</span>
                                        <span class="price-old">300.00</span>
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
                                        <img src="assets/images/shop/5.webp" width="370" height="450" alt="Image-HasTech">
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
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="reviews">150 reviews</div>
                                    </div>
                                    <h4 class="title"><a href="product-details.html">Voyage face cleaner</a></h4>
                                    <div class="prices">
                                        <span class="price">$210.00</span>
                                        <span class="price-old">300.00</span>
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
                                        <img src="assets/images/shop/6.webp" width="370" height="450" alt="Image-HasTech">
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
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="reviews">150 reviews</div>
                                    </div>
                                    <h4 class="title"><a href="product-details.html">Impulse Duffle</a></h4>
                                    <div class="prices">
                                        <span class="price">$210.00</span>
                                        <span class="price-old">300.00</span>
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




        </main>

        <!--== Start Footer Area Wrapper ==-->
        <footer class="footer-area">
            <!--== Start Footer Main ==-->
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="widget-item">
                                <div class="widget-about">
                                    <a class="widget-logo" href="index.html">
                                        <img src="assets/images/logo.png" width="95" height="68" alt="Logo">
                                    </a>
                                    <p class="desc">Мы верим, что каждая компания, как и человек, обязана иметь свою твёрдую жизненную позицию. Если мы берёмся делать что-то, то вкладываем в это дело всю нашу душу.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 mt-md-0 mt-9">
                            <div class="widget-item">
                                <h4 class="widget-title">Информация</h4>
                                <ul class="widget-nav">
                                    <li><a href="about-us.html">Магазин</a></li>
                                    <li><a href="contact.html">Контакты</a></li>
                                    <li><a href="faq.html">О нас</a></li>
                                    <li><a href="account-login.html">Личный кабинет</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mt-lg-0 mt-6">
                            <div class="widget-item">
                                <h4 class="widget-title">Мы в социальных сетях</h4>
                                <div class="widget-social">
                                    <a href="https://vk.com/r.viktor0" target="_blank" rel="noopener"><img src="assets/images/icons/vk.png" width="35" height="35"</a>
                                    <a href="https://vk.com/r.viktor0" target="_blank" rel="noopener"><img src="assets/images/icons/tg.png" width="35" height="35"</a>
                                    <a href="https://vk.com/r.viktor0" target="_blank" rel="noopener"><img src="assets/images/icons/watsap.png" width="35" height="35"</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Footer Main ==-->

            <!--== Start Footer Bottom ==-->
            <div class="footer-bottom">
                <div class="container pt-0 pb-0">
                    <div class="footer-bottom-content">
                        <p class="copyright">© 2023 Motosale<i class="fa fa-heart"></i> by <a target="_blank" href="https://vk.com/r.viktor0">Ruban B.A.</a></p>
                    </div>
                </div>
            </div>
            <!--== End Footer Bottom ==-->
        </footer>
        <!--== End Footer Area Wrapper ==-->

        <!--== Scroll Top Button ==-->
        <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

        <!--== Start Product Quick Wishlist Modal ==-->
        <aside class="product-action-modal modal fade" id="action-WishlistModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-action-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="fa fa-times"></i>
                            </button>
                            <div class="modal-action-messages">
                                <i class="fa fa-check-square-o"></i> Added to wishlist successfully!
                            </div>
                            <div class="modal-action-product">
                                <div class="thumb">
                                    <img src="assets/images/shop/modal1.webp" alt="Organic Food Juice" width="466" height="320">
                                </div>
                                <h4 class="product-name"><a href="product-details.html">Readable content DX22</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick Wishlist Modal ==-->

        <!--== Start Product Quick Add Cart Modal ==-->
        <aside class="product-action-modal modal fade" id="action-CartAddModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-action-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="fa fa-times"></i>
                            </button>
                            <div class="modal-action-messages">
                                <i class="fa fa-check-square-o"></i> Added to cart successfully!
                            </div>
                            <div class="modal-action-product">
                                <div class="thumb">
                                    <img src="assets/images/shop/modal1.webp" alt="Organic Food Juice" width="466" height="320">
                                </div>
                                <h4 class="product-name"><a href="product-details.html">Readable content DX22</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick Add Cart Modal ==-->



        <!--== Start Product Quick View Modal ==-->
        <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-quick-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <span class="fa fa-close"></span>
                            </button>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!--== Start Product Thumbnail Area ==-->
                                        <div class="product-single-thumb">
                                            <img src="assets/images/shop/quick-view1.webp" width="544" height="560" alt="Image-HasTech">
                                        </div>
                                        <!--== End Product Thumbnail Area ==-->
                                    </div>
                                    <div class="col-lg-6">
                                        <!--== Start Product Info Area ==-->
                                        <div class="product-details-content">
                                            <h5 class="product-details-collection">Premioum collection</h5>
                                            <h3 class="product-details-title">Offbline Instant Age Rewind Eraser.</h3>
                                            <div class="product-details-review mb-5">
                                                <div class="product-review-icon">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <button type="button" class="product-review-show">150 reviews</button>
                                            </div>
                                            <p class="mb-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus, repellendus. Nam voluptate illo ut quia non sapiente provident alias quos laborum incidunt, earum accusamus, natus. Vero pariatur ut veniam sequi amet consectetur.</p>
                                            <div class="product-details-pro-qty">
                                                <div class="pro-qty">
                                                    <input type="text" title="Quantity" value="01">
                                                </div>
                                            </div>
                                            <div class="product-details-action">
                                                <h4 class="price">$254.22</h4>
                                                <div class="product-details-cart-wishlist">
                                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Product Info Area ==-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick View Modal ==-->

        <!--== Start Aside Cart ==-->
        <aside class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h1 class="d-none" id="offcanvasRightLabel">Shopping Cart</h1>
                <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Shopping Cart <i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="offcanvas-body">
                <ul class="aside-cart-product-list">
                    <li class="aside-product-list-item">
                        <a href="#/" class="remove">×</a>
                        <a href="product-details.html">
                            <img src="assets/images/shop/cart1.webp" width="68" height="84" alt="Image">
                            <span class="product-title">Leather Mens Slipper</span>
                        </a>
                        <span class="product-price">1 × £69.99</span>
                    </li>
                    <li class="aside-product-list-item">
                        <a href="#/" class="remove">×</a>
                        <a href="product-details.html">
                            <img src="assets/images/shop/cart2.webp" width="68" height="84" alt="Image">
                            <span class="product-title">Quickiin Mens shoes</span>
                        </a>
                        <span class="product-price">1 × £20.00</span>
                    </li>
                </ul>
                <p class="cart-total"><span>Subtotal:</span><span class="amount">£89.99</span></p>
                <a class="btn-total" href="product-cart.html">View cart</a>
                <a class="btn-total" href="product-checkout.html">Checkout</a>
            </div>
        </aside>
        <!--== End Aside Cart ==-->

        <!--== Start Aside Menu ==-->
        <aside class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h1 class="d-none" id="offcanvasExampleLabel">Aside Menu</h1>
                <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">Меню <i class="fa fa-chevron-left"></i></button>
            </div>
            <div class="offcanvas-body">
                <div id="offcanvasNav" class="offcanvas-menu-nav">
                    <ul>
                        <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="#">Главная</a></li>
                        <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="#">Личный кабинет</a></li>
                        <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="about-us.html">Контакты</a></li>
                        <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="#">О нас</a>
                    </ul>
                </div>
            </div>
        </aside>
        <!--== End Aside Menu ==-->

    </div>
    <!--== Wrapper End ==-->

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>