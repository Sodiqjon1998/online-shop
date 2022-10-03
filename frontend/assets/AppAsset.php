<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/meanmenu.min.css",
        "css/animate.css",
        "css/nivo-slider.css",
        "css/owl.carousel.min.css",
        "css/jquery-ui.min.css",
        "css/font-awesome.min.css",
        "css/pe-icon-7-stroke.css",
        "css/bootstrap.min.css",
        "css/default.css",
        "style.css",
        "css/responsive.css",
    ];
    public $js = [
        "js/vendor/jquery-1.12.4.min.js",
        "js/jquery.meanmenu.min.js",
        "js/jquery.scrollUp.js",
        "js/owl.carousel.min.js",
        "js/wow.min.js",
        "js/jquery-ui.min.js",
        "js/jquery.elevateZoom-3.0.8.min.js",
        "js/jquery.nivo.slider.js",
        "js/bootstrap.min.js",
        "js/plugins.js",
        "js/main.js",
        "ajax.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
