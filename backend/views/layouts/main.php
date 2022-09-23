<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="icon" type="image/x-icon" href="<?=Url::base()?>/dist/img/sl-b1.png">
        <?php $this->head() ?>
    </head>
    <body class="hold-transition sidebar-mini text-sm sidebar-collapse">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render('_header'); ?>
        <?= $this->render('_left'); ?>

        <?= $this->render('_content', [
            'content' => $content
        ]); ?>
        <?= $this->render('_footer'); ?>

    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
