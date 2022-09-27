<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\searchs\ProductSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'color_id') ?>

    <?= $form->field($model, 'manufacture_id') ?>

    <?= $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'product_code') ?>

    <?php // echo $form->field($model, 'reward_points') ?>

    <?php // echo $form->field($model, 'availability') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'review_count') ?>

    <?php // echo $form->field($model, 'view_count') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
