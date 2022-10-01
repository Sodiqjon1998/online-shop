<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ProductCommit $model */

$this->title = 'Create Product Commit';
$this->params['breadcrumbs'][] = ['label' => 'Product Commits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-commit-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
