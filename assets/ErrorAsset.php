<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

class ErrorAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900',
        'web/error 404/css/respons.css',
        'web/error 404/css/style.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        '',
        '',
        '',
        '',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $js = [
        'https://oss.maxcdn.com/respond/1.4.2/respond.min.js',
        'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js',
        'web/error 404/js/scripts.js',
        'web/error 404/js/jquery.nicescroll.min.js',
        'web/error 404/js/modernizr.custom.js',
        'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js',
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
