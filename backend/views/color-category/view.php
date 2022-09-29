<?php

use common\models\ColorCategory;
use common\models\Product;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var $dataProvider \yii\data\ActiveDataProvider $model */
/** @var common\models\Category $model */
/** @var \backend\models\searchs\ProductSearch $searchModel */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ranglar katagoriyasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div id="accordion">

    <div class="card">
        <div class="card-header">
            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                <p class="text-center font-weight-bold">Maxsulot kategoriyasi</p>
                <span class="float-right">
                </span>
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
            </a>
        </div>
        <div id="collapseOne" class="collapse show" data-parent="#accordion">
            <div class="card-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        [
                            'attribute' => 'title',
                            'format' => 'raw',
                        ],
                        [
                            'attribute' => 'status',
                            'value' => static function (ColorCategory $slider) {
                                return $slider->getStatusName();
                            }
                        ],
                        'created_at:datetime',
                        'updated_at:datetime',
                        [
                            'attribute' => 'created_by',
                            'value' => static function (ColorCategory $slider) {
                                return $slider->createdBy->username;
                            }
                        ],
                        [
                            'attribute' => 'updated_by',
                            'value' => static function (ColorCategory $slider) {
                                return $slider->updatedBy->username;
                            }
                        ],
                    ],
                ]) ?>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header text-center">
            <a class="collapsed card-link font-weight-bold " data-toggle="collapse" href="#collapseTwo">
                Maxsulotlar
            </a>
        </div>
        <div id="collapseTwo" class="collapse" data-parent="#accordion">
            <div class="card-body">
                <?php Pjax::begin(); ?>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'pager' => [
                        'class' => '\yii\bootstrap4\LinkPager',
                    ],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'title',
                        'price',
                        'reward_points',
                        'product_code',
                        [
                            'attribute' => 'Rasmlar',
                            'format' => 'raw',
                            'value' => function ($model) {
                                return Html::a('<i class="fas fa-image" style="font-size: large"></i>', ['product/add-img', 'id' => $model->id], ['class' => 'btn btn-default btn-lg']);
                            }
                        ],
                        [
                            'attribute' => 'status',
                            'value' => static function (Product $slider) {
                                return $slider->getStatusName();
                            }
                        ],
                        [
                            'class' => ActionColumn::class,
                            'buttons'=> [
                                'view'=>function ($url, $model) {

                                    return Html::a('<span class="fas fa-eye"></span>', ['product/view', 'id' =>$model->id], ['class' => 'btn btn-default btn-xs']);
                                },
                                'update'=>function ($url, $model) {
                                    return Html::a('<span class="fas fa-pen"></span>', ['product/update', 'id' => $model->id], ['class' => 'btn btn-info btn-xs']);
                                },
                                'delete' => function($url, $model){
                                    return Html::a('<i class="fas fa-trash"></i>', ['product/delete', 'id' => $model->id], [
                                        'class' => 'btn btn-danger btn-xs',
                                        'data' => [
                                            'confirm' => 'Rostdan ham o\'chirmoqchimisiz?',
                                            'method' => 'post',
                                        ],
                                    ]);
                                }
                            ]
                        ],
                    ],
                ]) ?>

                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>

</div>
