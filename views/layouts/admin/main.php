<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $this->registerLinkTag([
        'rel' => 'apple-touch-icon',
        'sizes' => '180x180',
        'href' => Yii::getAlias('@web/images/site/icons/apple-touch-icon.png')
    ]);
    $this->registerLinkTag([
        'rel' => 'icon',
        'type' => 'image/png',
        'sizes' => '32x32',
        'href' => Yii::getAlias('@web/images/site/icons/favicon-32x32.png')
    ]);
    $this->registerLinkTag([
        'rel' => 'icon',
        'type' => 'image/png',
        'sizes' => '16x16',
        'href' => Yii::getAlias('@web/images/site/icons/favicon-16x16.png')
    ]);
    $this->registerLinkTag([
        'rel' => 'mask-icon',
        'href' => Yii::getAlias('@web/images/site/icons/safari-pinned-tab.svg'),
        'color' => '#5bbad5'
    ]);
    $this->registerLinkTag([
        'rel' => 'shortcut icon',
        'href' => Yii::getAlias('@web/images/site/icons/favicon.ico')
    ]);
    ?>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?=$this->render('header')?>

<?= $content?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
