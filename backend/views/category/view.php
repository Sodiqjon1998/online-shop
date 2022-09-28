<?php

use common\models\Category;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Slider $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Katagoriya', 'url' => ['index']];
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
                            'value' => static function (Category $slider) {
                                return $slider->getStatusName();
                            }
                        ],
                        'created_at:datetime',
                        'updated_at:datetime',
                        [
                            'attribute' => 'created_by',
                            'value' => static function (Category $slider) {
                                return $slider->createdBy->username;
                            }
                        ],
                        [
                            'attribute' => 'updated_by',
                            'value' => static function (Category $slider) {
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
                <table class="table table-striped">
                    <tbody>
                    <thead>
                    <tr>
                        <th>Sarlavha</th>
                        <th>Narxi</th>
                        <th>Matin</th>
                        <th>Maxsulot codi</th>
                        <th>Mukofot Ochkolari</th>
                        <th>Yaroqliyligi</th>
                        <th>Chegirma</th>
                        <th>Maxsulot rasmi</th>
                        <th>Statusi</th>
                        <th>
                            <i class="fa fa-tools"></i>
                        </th>
                    </tr>
                    </thead>
                    <?php foreach ($model->products as $value): ?>
                        <tr>
                            <td style="width: 30px;"><?= $value->title; ?></td>
                            <td style="width: 30px;"><?= $value->price; ?></td>
                            <td style="width: 30px;"><?= $value->content; ?></td>
                            <td style="width: 30px;"><?= $value->product_code; ?></td>
                            <td style="width: 30px;"><?= $value->reward_points; ?></td>
                            <td style="width: 30px;"><?= $value->availability; ?></td>
                            <td style="width: 30px;"><?= $value->discount; ?></td>
                            <td style="width: 30px;">
                                <a href="<?= Url::to(['product/add-img', 'id' => $value->id]); ?>">
                                    <i class="fas fa-image" style="font-size: 35px;"></i>
                                </a>
                            </td>
                            <td style="width: 30px;">
                                <?=$value->getStatusName()?>
                            </td>
                            <td style="width: 90px;">
                                <?= Html::a('<i class="fa fa-eye" style="font-size: 17px;"></i>', ['/product/view', 'id' => $value->id], [
                                    'class' => 'btn btn-primary']) ?>
                                <?= Html::a('<i class="fas fa-trash" style="font-size: 17px;"></i>', ['product/delete', 'id' => $value->id], [
                                    'class' => 'btn btn-danger',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this item?',
                                        'method' => 'post',
                                    ],
                                ]) ?>
                                <?= Html::a('<i class="fa fa-pen" style="font-size: 17px;"></i>', ['product/update', 'id' => $value->id], [
                                    'class' => 'btn btn-success']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
