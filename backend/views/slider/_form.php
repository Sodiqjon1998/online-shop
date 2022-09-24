<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Slider $model */
/** @var yii\bootstrap4\ActiveForm $form */
?>

<div class="card">
    <div class="card-body">

        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success'])
            ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
