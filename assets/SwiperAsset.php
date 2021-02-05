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
class SwiperAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/swiper/swiper-bundle.css',
        'css/swiper/swiper-bundle.min.css',
    ];
    public $js = [
        'js/swiper/swiper-bundle.min.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
