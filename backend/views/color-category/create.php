<?php

use common\models\Product;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ColorCategory $model */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Ranglar kategoriyasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="color-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= /** @var TYPE_NAME $modelCustomer */
    $this->render('_form', [
        'modelCustomer' => $modelCustomer,
        'modelsAddress' => (empty($modelsAddress)) ? [new Product()] : $modelsAddress
    ]) ?>

</div>
