<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ManufactureCategory $model */

$this->title = 'Tahrirlash Manufacture Category: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Manufacture Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manufacture-category-update">


    <?= /** @var TYPE_NAME $modelCustomer */
    $this->render('_form', [
        'modelCustomer' => $modelCustomer,
        'modelsAddress' => (empty($modelsAddress)) ? [new Product()] : $modelsAddress
    ]) ?>

</div>
