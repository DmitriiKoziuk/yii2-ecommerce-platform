<?php

use yii\helpers\Html;
use frontend\themes\basic\assets\BaseThemeAsset;

/**
 * @var $this \yii\web\View
 * @var $content string
 */

BaseThemeAsset::register($this);
try {
  $baseAssetUrl = $this->assetManager
      ->getBundle(BaseThemeAsset::class)->baseUrl;
  $logoUrl = $baseAssetUrl . '/images/logo.png';
  $favicon32Url = $baseAssetUrl . '/images/favicon-32x32.png';
} catch (\yii\base\InvalidConfigException $e) {
  $logoUrl = '';
  $favicon32Url = '';
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $favicon32Url ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render('_header', [
    'logoUrl' => $logoUrl,
]) ?>

<div class="container content">
  <?= $content ?>
</div>

<?= $this->render('_footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

