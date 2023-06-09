<?php

/* @var $modelReg app\models\LoginForm */
/* @var $model app\models\LoginForm */


use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;


?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<body>

<!--== Wrapper Start ==-->
<div class="wrapper">

    <!--== Start Header Wrapper ==-->
    <header class="header-area sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5 col-sm-6 col-lg-3">
            </div>
        </div>
    </header>
    <!--== End Header Wrapper ==-->

    <main class="main-content">



        <section class="section-space">
            <div class="container">
                <div class="row mb-n8">
                    <div class="col-lg-6 mb-8">
                        <!--== Start Login Area Wrapper ==-->
                        <div class="my-account-item-wrap">
                            <h3 class="title">Вход</h3>
                            <div class="my-account-form">

                                    <?php $form = ActiveForm::begin(); ?>
                                    <div class="form-group mb-6">
                                        <?= $form->field($model, 'username')->textInput()->label('login') ?>
                                    </div>

                                    <div class="form-group mb-6">
                                        <?= $form->field($model, 'password')->textInput()->label('password') ?>
                                    </div>

                                <div class="form-group">
                                    <div class="offset-lg-1 col-lg-11">
                                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                    </div>
                                </div>

                                <?php ActiveForm::end(); ?>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 mb-8">

                        <div class="my-account-item-wrap">
                            <h3 class="title">Регистрация</h3>
                            <div class="my-account-form">
                                <?php $form = ActiveForm::begin(); ?>
                                <div class="form-group mb-6">
                                    <?= $form->field($modelReg, 'login')->textInput()->label('login') ?>
                                </div>

                                <div class="form-group mb-6">
                                    <?= $form->field($modelReg, 'password')->textInput()->label('password') ?>
                                </div>

                                <div class="form-group">
                                    <div class="offset-lg-1 col-lg-11">
                                        <?= Html::submitButton('Reg', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                    </div>
                                </div>

                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>


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



</div>

</body>

</html>