<?php

use frontend\themes\basic\shop\assets\ProductSkuAsset;
use DmitriiKoziuk\yii2FileManager\helpers\FileWebHelper;
use DmitriiKoziuk\yii2Shop\ShopModule;

/**
 * @var $this \yii\web\View
 * @var $productSkuData \DmitriiKoziuk\yii2Shop\data\ProductSkuData
 * @var $productData \DmitriiKoziuk\yii2Shop\data\ProductData
 * @var $productTypeData \DmitriiKoziuk\yii2Shop\data\ProductTypeData|null
 * @var $images \DmitriiKoziuk\yii2FileManager\entities\File[]
 * @var $mainImage \DmitriiKoziuk\yii2FileManager\entities\File|null
 * @var $fileWebHelper FileWebHelper
 * @var $productSeoService \DmitriiKoziuk\yii2Shop\services\product\ProductSeoService
 */

ProductSkuAsset::register($this);

$this->title = $productSeoService->getProductSkuMetaTitle($productData, $productSkuData, $productTypeData);
$this->registerMetaTag([
    'name' => 'description',
    'content' => $productSeoService->getProductSkuMetaDescription(
        $productData,
        $productSkuData,
        $productTypeData
    ),
]);
$this->registerLinkTag(['rel' => 'canonical', 'href' => $productSkuData->getUrl()]);
?>

<div class="product-sku">
  <div class="row">
    <div class="col-md-12">
      <div class="title">
        <h1><?= $productData->getName() . ' ' . $productSkuData->getName() ?></h1>
      </div>
      <div class="row">
        <div class="col-md-6 image-section">
          <?php if (! empty($mainImage)): ?>
            <img src="<?= $fileWebHelper->getFileFullWebPath($mainImage) ?>" alt="">
          <?php endif; ?>
        </div>
        <div class="col-md-6">
          <?php if($productSkuData->isPriceOnSiteSet()): ?>
          <div class="price">
            <?= number_format(
                $productSkuData->getPriceOnSite(),
                0,
                '.',
                ' '
            ) ?>
            <span class="currency">currency name</span>
          </div>
          <div class="buttons">
            <a class="btn buy-button" href="/cart/add-product?product=<?= $productSkuData->getId() ?>">
              <?= Yii::t(ShopModule::TRANSLATION, 'Buy') ?>
            </a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

