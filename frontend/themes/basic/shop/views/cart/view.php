<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\themes\basic\shop\assets\CartAsset;
use DmitriiKoziuk\yii2Shop\ShopModule;
use DmitriiKoziuk\yii2FileManager\helpers\FileWebHelper;

/**
 * @var $this \yii\web\View
 * @var $cart \DmitriiKoziuk\yii2Shop\data\CartData
 * @var $fileWebHelper FileWebHelper
 */

CartAsset::register($this);

$this->title = Yii::t(ShopModule::TRANSLATION_CART, 'Your Cart');
$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t(ShopModule::TRANSLATION_CART, 'Your Cart')
]);
?>

<div class="cart">
  <?php $form = ActiveForm::begin(['action' => '/cart/update']) ?>
    <div class="form-row">
      <div class="col-md-9">
        <div class="form-row">
          <div class="col-md-12 products">
            <?php foreach ($cart->getProducts() as $cartProduct): ?>
            <?php $productSku = $cartProduct->getSku(); ?>
            <div class="form-row">
              <div class="form-group col-md-2 product-image-wrapper">
                <?php if ($productSku->isHasImages()): ?>
                <img src="<?= $fileWebHelper->getFileFullWebPath(
                    $productSku->getMainImage()
                ) ?>" alt="" style="max-height: 150px;max-width: 150px">
                <?php endif; ?>
              </div>
              <div class="form-group col-md-4">
                <?= $productSku->getFullName() ?> |
                <?= $productSku->getPriceOnSite() ?> x 1
              </div>
              <div class="form-group col-md-2">
                <?= Html::input(
                    'text',
                    "quantity[{$productSku->getId()}]",
                    $cartProduct->getQuantity(),
                    [
                        'class' => 'form-control'
                    ]
                ) ?>
              </div>
              <div class="form-group col-md-2">
                <?= $cartProduct->getFinalPrice() ?>
              </div>
              <div class="form-group col-md-2">
                <a href="<?= Url::to(['/cart/remove-product', 'id' => $productSku->getId()]) ?>">удалить</a>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="col-md-3 actions">
        <div class="form-row">
          <div class="form-group col-md-12">
            <?= $cart->getTotalPrice(); ?>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <?= Html::submitButton(Yii::t(ShopModule::TRANSLATION_CART, 'Update quantity')) ?>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <?= Html::a(Yii::t(ShopModule::TRANSLATION_CART, 'Checkout'), '/cart/checkout') ?>
          </div>
        </div>
      </div>
    </div>
  <?php ActiveForm::end() ?>
</div>
