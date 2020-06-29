<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'plugins/fontawesome-free/css/all.min.css',
        'plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'dist/css/adminlte.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',

    ];
    public $js = [
        'plugins/jquery/jquery.min.js',
        'plugins/bootstrap/js/bootstrap.bundle.min.js',
        'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'dist/js/adminlte.js',
        'dist/js/demo.js',
        'plugins/jquery-mousewheel/jquery.mousewheel.js',
        'plugins/raphael/raphael.min.js',
        'plugins/jquery-mapael/jquery.mapael.min.js',
        'plugins/jquery-mapael/maps/usa_states.min.js',
        'plugins/chart.js/Chart.min.js',
        'dist/js/pages/dashboard2.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
