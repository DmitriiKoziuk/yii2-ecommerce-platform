<?php
namespace frontend\themes\basic\assets;

use yii\web\AssetBundle;

class BaseThemeAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/basic/dist/base';
    public $css = [
        'css/base.css',
    ];
}