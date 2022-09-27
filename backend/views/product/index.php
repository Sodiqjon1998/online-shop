<?php

use common\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\searchs\ProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Products';
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
            'category_id',
            'color_id',
            'manufacture_id',
            'title',
            //'price',
            //'content:ntext',
            //'product_code',
            //'reward_points',
            //'availability',
            //'discount',
            //'review_count',
            //'view_count',
            //'status',
            [
            'class' => ActionColumn::class,
            ],
            ],
            ]); ?>
        
            <?php Pjax::end(); ?>

    </div>
</div>
