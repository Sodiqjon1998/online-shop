<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Product $model */

//$this->title = 'Tahrirlash Product: ' . $model->title;
//$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-update">

    <a href="javascript:history.back()" class="btn btn-primary mb-2">Ortga qaytish</a>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
