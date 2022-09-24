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

$this->title = 'Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">

        <p>
            <?=             Html::a('<i class=\"fas fa-plus\"></i> Yangi qo\'shish'            , ['create'], ['class' => 'btn btn-success']) ?>
        </p>

            <?php Pjax::begin(); ?>
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        
                    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

                        'id',
            'img',
            'content:ntext',
            'status',
            'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            [
            'class' => ActionColumn::class,
            ],
            ],
            ]); ?>
        
            <?php Pjax::end(); ?>

    </div>
</div>
