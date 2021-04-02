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

        'theme/vendor/bootstrap/css/bootstrap.min.css',
        'theme/assets/css/fontawesome.css',
        'theme/assets/css/style.css',
        'theme/assets/css/owl.css',
    ];
    public $js = [
         'theme/vendor/jquery/jquery.min.js',
        'theme/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'theme/assets/js/custom.js',
        'theme/assets/js/owl.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
