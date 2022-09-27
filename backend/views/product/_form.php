<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var yii\bootstrap4\ActiveForm $form */
?>

<div class="card">
    <div class="card-body">

        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'color_id')->textInput() ?>

    <?= $form->field($model, 'manufacture_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reward_points')->textInput() ?>

    <?= $form->field($model, 'availability')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <?= $form->field($model, 'review_count')->textInput() ?>

    <?= $form->field($model, 'view_count')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success float-right'])
            ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
