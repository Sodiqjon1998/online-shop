<?php

use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var yii\bootstrap4\ActiveForm $form */
?>

<div class="card">
    <div class="card-body">

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'category_id')->textInput(['value' => $model->category->title, 'disabled'=> true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'color_id')->textInput(['value' => $model->color->title, 'disabled'=> true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'manufacture_id')->textInput(['value' => $model->manufacture->title, 'disabled'=> true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
            </div>
        </div>


        <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'product_code')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'reward_points')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'availability')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <?= $form->field($model, 'discount')->textInput() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'status')->widget(SwitchInput::class, [
                    'containerOptions' => [
                        'class' => 'mt-1'
                    ],
                    'pluginOptions' => [
                        'size' => 'md',
                        'onColor' => 'success',
                        'offColor' => 'danger',
                        'onText' => 'Faol',
                        'offText' => 'Faol emas',
                    ]
                ]) ?>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success float-right'])
            ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
