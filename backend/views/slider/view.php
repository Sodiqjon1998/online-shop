<?php

use common\models\Slider;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Slider $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Slider', 'url' => ['index']];
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
                [
                    'attribute' => 'img',
                    'format' => 'raw',
                    'value' => static function (Slider $slider) {
                        return Html::img($slider->img, ['image-fluid', 'style' => 'width: 200px']);
                    }
                ],
                [
                    'attribute' => 'content',
                    'format' => 'raw',
                ],
                [
                    'attribute' => 'status',
                    'value' => static function (Slider $slider) {
                        return $slider->getStatusName();
                    }
                ],
                'created_at:datetime',
                'updated_at:datetime',
                [
                    'attribute' => 'created_by',
                    'value' => static function (Slider $slider) {
                        return $slider->createdBy->username;
                    }
                ],
                [
                    'attribute' => 'updated_by',
                    'value' => static function (Slider $slider) {
                        return $slider->updatedBy->username;
                    }
                ],
            ],
        ]) ?>

    </div>
</div>
