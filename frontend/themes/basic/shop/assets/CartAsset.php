<?php
namespace frontend\themes\basic\shop\assets;

use yii\web\AssetBundle;

class CartAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/basic/shop/dist/cart';
    public $css = [
        'css/shop-cart.css',
    ];
    public $js = [
    ];
    public $depends = [
        'frontend\themes\basic\assets\BaseThemeAsset',
    ];
}