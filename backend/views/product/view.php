<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Product $model */

$this->title = $model->title;
//$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
//\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="card-body">

        <a href="javascript:history.back()" class="btn btn-info mb-2">Ortga qaytish</a>

        <p class="text-center">
            <?= Html::a('Tahrirlash', ['update', 'id' => $model->id],
                ['class' => 'btn btn-primary']) ?>
            <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'category_id',
                'color_id',
                'manufacture_id',
                'title',
                'price',
                'content:ntext',
                'product_code',
                'reward_points',
                'availability',
                'discount',
                'review_count',
                'view_count',
                'status',
            ],
        ]) ?>

    </div>
</div>
