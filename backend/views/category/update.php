<?php

use common\models\Category;
use common\models\Product;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Category $model */

$this->title = 'Tahrirlash Category: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-update">


    <?= /** @var TYPE_NAME $modelCustomer */
    $this->render('_form', [
        'modelCustomer' => $modelCustomer,
        'modelsAddress' => (empty($modelsAddress)) ? [new Product()] : $modelsAddress
    ]) ?>

</div>
