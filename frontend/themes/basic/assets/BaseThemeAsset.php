<?php
namespace frontend\themes\basic\assets;

use yii\web\AssetBundle;

class BaseThemeAsset extends AssetBundle
{
    public static $defaultImageUrl = '/images/default-image.jpg';

    public $sourcePath = '@frontend/themes/basic/dist/base';
    public $css = [
        'css/base.css',
    ];
}