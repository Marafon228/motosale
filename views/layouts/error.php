<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\ErrorAsset;

ErrorAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="utf-8" />
    <title>Light 404 Page Non Found | BootstrapTema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Load page -->
<div class="animationload">
    <div class="loader">
    </div>
</div>
<!-- End load page -->

<!-- Content Wrapper -->
<div id="wrapper">
    <div class="container">
        <!-- Switcher -->
        <div class="switcher">
            <input id="sw" type="checkbox" class="switcher-value">
            <label for="sw" class="sw_btn"></label>
            <div class="bg"></div>
            <div class="text"><span class="text-l">On</span><span class="text-d">Off</span><br />light</div>
        </div>
        <!-- End Switcher -->

        <!-- Dark version -->
        <div id="dark" class="row text-center">
            <div class="info">
                <img src="/web/error 404/images/404.png" alt="404 error" />
            </div>
        </div>
        <!-- End Dark version -->

        <!-- Light version -->
        <div id="light" class="row text-center">
            <!-- Info -->
            <div class="info">
                <img src="/web/error 404/images/404.gif" alt="404 error" />
                <h4>The page you are looking for was moved, removed,
                    renamed or never existed.</h4>
                <a href="/" class="btn">Home</a>
                <a href="#" class="btn btn-brown">Contact</a>
            </div>
            <!-- end Info -->
        </div>
        <!-- End Light version -->

    </div>
    <!-- end container -->
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


