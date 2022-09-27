<?php

use common\models\Category;
use common\models\Slider;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Slider $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Category', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div id="accordion">

    <div class="card">
        <div class="card-header">
            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                <span class="float-right">
                    <i class="fa fa-plus"></i> Ko'ish
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
        <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Sarlavha</th>
                        <th>Narxi</th>
                        <th>Matin</th>
                        <th>Maxsulot codi</th>
                        <th>Mukofot Ochkolari</th>
                        <th>Yaroqliyligi</th>
                        <th>Chegirma</th>
                        <th>Statusi</th>
                    </tr>
                    </thead>
                </table>
            </a>
        </div>
        <div id="collapseTwo" class="collapse" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                    <?php /** @var TYPE_NAME $slider */
                        foreach ($model->products as $value): ?>
                            <tr>
                                <td style="width: 30px;"><?=$value->title;?></td>
                                <td style="width: 30px;"><?=$value->price;?></td>
                                <td style="width: 30px;"><?=$value->content;?></td>
                                <td style="width: 30px;"><?=$value->product_code;?></td>
                                <td style="width: 30px;"><?=$value->reward_points;?></td>
                                <td style="width: 30px;"><?=$value->availability;?></td>
                                <td style="width: 30px;"><?=$value->discount;?></td>
                                <td style="width: 30px;"><?=$value->status;?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
