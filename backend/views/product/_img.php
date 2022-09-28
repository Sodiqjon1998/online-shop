<?php

use common\models\Product;
use zxbodya\yii2\galleryManager\GalleryManager;

/* @var $this yii\web\View */
/* @var $model Product */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Maxsulot Rasimlari'), 'url' => ['#']];
$this->params['breadcrumbs'][] = $this->title;
?>
...
<div style="background: #fff; padding: 20px;">
    <a href="javascript:history.back()" class="btn btn-outline-info mb-1">Ortga qaytish</a>
    <?php
    if ($model->isNewRecord) {
        echo 'Can not upload images for new record';
    } else {
        echo GalleryManager::widget(
            [
                'model' => $model,
                'behaviorName' => 'galleryBehavior',
                'apiRoute' => 'product/galleryApi'
            ]
        );
    }
    ?>
</div>