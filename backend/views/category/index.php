<?php

use common\models\Category;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var backend\models\searchs\CategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">

        <p>
            <?= Html::a('<i class="fas fa-plus"></i> Yangi qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'title',
                [
                    'attribute' => 'status',
                    'value' => static function (Category $slider) {
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
