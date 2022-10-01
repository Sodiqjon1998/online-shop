<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ProductCommit $model */

$this->title = 'Tahrirlash Product Commit: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Product Commits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-commit-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
