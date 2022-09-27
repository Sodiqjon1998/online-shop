<?php

use kartik\switchinput\SwitchInput;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $modelCustomer app\modules\yii2extensions\models\Customer */
/* @var $modelsAddress app\modules\yii2extensions\models\Address */

$js = '
jQuery(".dynamicform_wrapper").on("afterInsert", function(e, item) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Maxsulot: " + (index + 1))
    });
});

jQuery(".dynamicform_wrapper").on("afterDelete", function(e) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Maxsulot: " + (index + 1))
    });
});
';

$this->registerJs($js);
?>

<div class="card">
    <div class="card-body">

        <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
        <div class="row">
            <div class="col-sm-9">
                <?= $form->field($modelCustomer, 'title')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-3">
                <?= $form->field($modelCustomer, 'status')->widget(SwitchInput::class, [
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

        <div class="padding-v-md">
            <div class="line line-dashed"></div>
        </div>
        <?php DynamicFormWidget::begin([
            'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
            'widgetBody' => '.container-items', // required: css class selector
            'widgetItem' => '.item', // required: css class
            'limit' => 4, // the maximum times, an element can be cloned (default 999)
            'min' => 0, // 0 or 1 (default 1)
            'insertButton' => '.add-item', // css class
            'deleteButton' => '.remove-item', // css class
            'model' => $modelsAddress[0],
            'formId' => 'dynamic-form',
            'formFields' => [
                'title',
                'price',
                'content',
                'amount',
                'product_code',
                'reward_points',
            ],
        ]); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-envelope"></i> Maxsulotlar
                <?php /** @var TYPE_NAME $modelAddress */
                if (!($modelAddress->isNewRecord)): ?>
                    <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i>
                        Maxsulot qo'shish
                    </button>
                    <div class="clearfix"></div>
                <?php else: ?>
                <?php endif; ?>

            </div>
            <div class="panel-body container-items"><!-- widgetContainer -->
                <?php foreach ($modelsAddress as $index => $modelAddress): ?>
                    <div class="item panel panel-default"><!-- widgetBody -->
                        <div class="panel-heading">
                            <span class="panel-title-address">Maxsulot: <?= ($index + 1) ?></span>&nbsp;
                            <button type="button" class="pull-right remove-item btn btn-danger btn-xs">
                                <i class="fa fa-minus"></i>
                            </button>
                            <span class="float-right"><i class="fa fa-photo"></i> </span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <?php
                            // necessary for update action.
                            if (!$modelAddress->isNewRecord) {
                                echo Html::activeHiddenInput($modelAddress, "[{$index}]id");
                            }
                            ?>
                            <?= $form->field($modelAddress, "[{$index}]title")->textInput(['maxlength' => true]) ?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <?= $form->field($modelAddress, "[{$index}]price")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="col-sm-6">
                                    <?= $form->field($modelAddress, "[{$index}]content")->textInput(['maxlength' => true]) ?>
                                </div>
                            </div><!-- end:row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <?= $form->field($modelAddress, "[{$index}]product_code")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="col-sm-6">
                                    <?= $form->field($modelAddress, "[{$index}]reward_points")->textInput(['maxlength' => true]) ?>
                                </div>
                            </div><!-- end:row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <?= $form->field($modelAddress, "[{$index}]availability")->textInput() ?>
                                </div>
                                <div class="col-sm-6">
                                    <?= $form->field($modelAddress, "[{$index}]discount")->textInput(['maxlength' => true]) ?>
                                </div>
                            </div><!-- end:row -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php DynamicFormWidget::end(); ?>

        <div class="form-group">
            <?= Html::submitButton($modelAddress->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-primary float-right']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>