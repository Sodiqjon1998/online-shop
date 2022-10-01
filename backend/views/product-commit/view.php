<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\ProductCommit $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Product Commits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="card-body">

        <p>
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
            'name',
            'your_name:ntext',
            'rating',
            'status',
            'created_at',
            'updated_at',
        ],
        ]) ?>

    </div>
</div>
