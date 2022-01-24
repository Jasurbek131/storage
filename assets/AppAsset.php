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
        'materialize/css/materialize.min.css',
        'css/bootstrap.css',
        'js/morris/morris-0.4.3.min.css',
        'css/custom-styles.css',
        'css/font-awesome.css',
        'js/Lightweight-Chart/cssCharts.css',
        'css/site.css',
    ];
    public $js = [
//        'js/jquery-1.10.2.js',
        'js/bootstrap.min.js',
        'materialize/js/materialize.min.js',
        'js/jquery.metisMenu.js',
        'js/morris/raphael-2.1.0.min.js',
        'js/morris/morris.js',
        'js/easypiechart.js',
        'js/easypiechart-data.js',
        'js/Lightweight-Chart/jquery.chart.js',
        'js/custom-scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
