<?php
namespace frontend\themes\basic\shop\assets;

use yii\web\AssetBundle;

class ProductSkuAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/basic/shop/dist/product-sku';
    public $css = [
        'css/shop-product-sku.css',
    ];
    public $js = [
    ];
    public $depends = [
        'frontend\themes\basic\assets\BaseThemeAsset',
    ];
}