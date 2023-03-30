<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        '/images/favicon.webp',
        'https://fonts.googleapis.com',
        'https://fonts.gstatic.com',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
        '/css/vendor/bootstrap.min.css',
        '/css/plugins/swiper-bundle.min.css',
        '/css/plugins/font-awesome.min.css',
        '/css/plugins/fancybox.min.css',
        '/css/plugins/nice-select.css',
        '/css/style.min.css',
        'https://fonts.googleapis.com',
        'https://fonts.gstatic.com',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
        'css/vendor/bootstrap.min.css',
        'css/plugins/range-slider.css',
        'css/plugins/nice-select.css',
        'css/style.min.css',
        'https://fonts.googleapis.com',
        'https://fonts.gstatic.com',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
        'css/vendor/bootstrap.min.css',
        'css/plugins/swiper-bundle.min.css',
        'assets/css/plugins/font-awesome.min.css',
        'css/plugins/fancybox.min.css',
        'css/plugins/nice-select.css',
        'css/style.min.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'css/style.css',
        'css/respons.css',
        'https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900',
        'https://fonts.googleapis.com',
        'https://fonts.gstatic.com',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
        'css/vendor/bootstrap.min.css',
        'css/plugins/swiper-bundle.min.css',
        'css/plugins/font-awesome.min.css',
        'css/plugins/fancybox.min.css',
        'plugins/nice-select.css',
        'css/style.min.css',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',



    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $js = [
        '/js/vendor/modernizr-3.11.7.min.js',

        '/js/vendor/bootstrap.bundle.min.js',
        '/js/plugins/swiper-bundle.min.js',
        '/js/plugins/fancybox.min.js',
        '/js/plugins/jquery.nice-select.min.js',
        'assets/css/plugins/swiper-bundle.min.css',
        'assets/css/plugins/font-awesome.min.css',
        'assets/css/plugins/fancybox.min.css',
        'assets/css/plugins/range-slider.css',
        'assets/css/plugins/nice-select.css',
        'assets/js/plugins/jquery.nice-select.min.js',
        'assets/js/plugins/range-slider.js',
        'assets/js/plugins/fancybox.min.js',
        'assets/js/plugins/swiper-bundle.min.js',
        'assets/js/vendor/bootstrap.bundle.min.js',
        'assets/js/vendor/jquery-migrate-3.3.2.min.js',
        'assets/js/vendor/jquery-3.6.0.min.js',
        'assets/js/vendor/modernizr-3.11.7.min.js',
        'assets/js/main.js',
        'assets/js/vendor/modernizr-3.11.7.min.js',
        'assets/js/vendor/jquery-3.6.0.min.js',
        'assets/js/vendor/jquery-migrate-3.3.2.min.js',
        'assets/js/vendor/bootstrap.bundle.min.js',
        'assets/js/plugins/swiper-bundle.min.js',
        'assets/js/plugins/fancybox.min.js',
        'assets/js/plugins/jquery.nice-select.min.js',
        'assets/js/main.js',
    'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js',
    'js/modernizr.custom.js',
    'js/jquery.nicescroll.min.js',
    'js/scripts.js',
        'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js',
        'https://oss.maxcdn.com/respond/1.4.2/respond.min.js',
        'assets/js/vendor/modernizr-3.11.7.min.js',
        'assets/js/vendor/jquery-3.6.0.min.js',
        'assets/js/vendor/jquery-migrate-3.3.2.min.js',
        'assets/js/vendor/bootstrap.bundle.min.js',
        'assets/js/plugins/swiper-bundle.min.js',
        'assets/js/plugins/fancybox.min.js',
        'assets/js/plugins/jquery.nice-select.min.js',
        'assets/js/main.js',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',

    ];
    public $depends = [
        'yii\web\YiiAsset',
         'yii\bootstrap5\BootstrapAsset'
    ];
}
