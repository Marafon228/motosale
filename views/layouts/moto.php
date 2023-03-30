<?php
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

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
                        <a href="/">
                            <img class="logo-main" src="/assets/images/logo.png" width="95" height="68" alt="Logo" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7 d-none d-lg-block">
                    <div class="header-navigation ps-7">
                        <ul class="main-nav justify-content-start">
                            <li class="has-submenu"><a href="/">Магазин</a>
                            </li>
                            <li><a href="/site/about">Контакты</a></li>
                            <li class="has-submenu position-static"><a href="/site/contact">О нас</a>
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
                      <image id="image0_504:11" width="30" height="30" xlink:href="/assets/images/icons/poisk.png"/>
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
                      <image id="image0_504:9" width="30" height="30" xlink:href="/assets/images/icons/korzina.png"/> </defs>
                  </svg>
                </span>
                        </button>

                        <a class="header-action-btn" href="/site/login">
                                <span class="icon">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect class="icon-rect" width="30" height="30" fill="url(#pattern3)"/>
                    <defs>
                      <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_504:10" transform="scale(0.0333333)"/>
                      </pattern>
                      <image id="image0_504:10" width="30" height="30" xlink:href="/assets/images/icons/profil.png"/> </defs>
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

        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>

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
                                <a class="widget-logo" href="/">
                                    <img src="/assets/images/logo.png" width="95" height="68" alt="Logo">
                                </a>
                                <p class="desc">Мы верим, что каждая компания, как и человек, обязана иметь свою твёрдую жизненную позицию. Если мы берёмся делать что-то, то вкладываем в это дело всю нашу душу.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 mt-md-0 mt-9">
                        <div class="widget-item">
                            <h4 class="widget-title">Информация</h4>
                            <ul class="widget-nav">
                                <li><a href="/">Магазин</a></li>
                                <li><a href="/site/about">Контакты</a></li>
                                <li><a href="/site/contact">О нас</a></li>
                                <li><a href="/site/login">Личный кабинет</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-lg-0 mt-6">
                        <div class="widget-item">
                            <h4 class="widget-title">Мы в социальных сетях</h4>
                            <div class="widget-social">
                                <a href="https://vk.com/r.viktor0" target="_blank" rel="noopener"><img src="/assets/images/icons/vk.png" width="35" height="35"</a>
                                <a href="https://vk.com/r.viktor0" target="_blank" rel="noopener"><img src="/assets/images/icons/tg.png" width="35" height="35"</a>
                                <a href="https://vk.com/r.viktor0" target="_blank" rel="noopener"><img src="/assets/images/icons/watsap.png" width="35" height="35"</a>
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
                                <img src="/assets/images/shop/modal1.webp" alt="Organic Food Juice" width="466" height="320">
                            </div>
                            <h4 class="product-name"><a href="/site/contact">Readable content DX22</a></h4>
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
                                <img src="/assets/images/shop/modal1.webp" alt="Organic Food Juice" width="466" height="320">
                            </div>
                            <h4 class="product-name"><a href="product-details.html">Readable content DX22</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick Add Cart Modal ==-->

    <!--== Start Aside Search Form ==-->
    <aside class="aside-search-box-wrapper offcanvas offcanvas-top" tabindex="-1" id="AsideOffcanvasSearch" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <h5 class="d-none" id="offcanvasTopLabel">Aside Search</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa fa-close"></i></button>
        </div>
        <div class="offcanvas-body">
            <div class="container pt--0 pb--0">
                <div class="search-box-form-wrap">
                    <div class="search-note">
                        <p>Поиск товаров</p>
                    </div>
                    <form action="#" method="post">
                        <div class="aside-search-form position-relative">
                            <label for="SearchInput" class="visually-hidden">Search</label>
                            <input id="SearchInput" type="search" class="form-control" placeholder="Поиск по всему магазину…">
                            <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Aside Search Form ==-->

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
                                        <img src="/assets/images/shop/quick-view1.webp" width="544" height="560" alt="Image-HasTech">
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
            <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Корзина<i class="fa fa-chevron-right"></i></button>
        </div>

            <a class="btn-total" href="product-cart.html">Просмотреть корзину</a>
            <a class="btn-total" href="product-checkout.html">Очистить корзину</a>
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
                    <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="/">Главная</a></li>
                    <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="/site/login">Личный кабинет</a></li>
                    <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="/site/about">Контакты</a></li>
                    <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="/site/contact">О нас</a>
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