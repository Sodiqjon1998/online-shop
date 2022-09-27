<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ManufactureCategory $model */

$this->title = 'Create Manufacture Category';
$this->params['breadcrumbs'][] = ['label' => 'Manufacture Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manufacture-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'modelCustomer' => $modelCustomer,
        'modelsAddress' => (empty($modelsAddress)) ? [new Product()] : $modelsAddress
    ]) ?>

</div>
