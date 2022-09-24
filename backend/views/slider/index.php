<?php

use common\models\Slider;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var backend\models\searchs\SliderSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Slider';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">

        <p>
            <?= Html::a('<i class="fa fa-plus"></i> Yangi qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

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
                [
                    'class' => ActionColumn::class,
                ],
            ],
        ]); ?>

        <?php Pjax::end(); ?>

    </div>
</div>
