<?php

use kartik\switchinput\SwitchInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Slider $model */
/** @var yii\bootstrap4\ActiveForm $form */
?>

<div class="card">
    <div class="card-body">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'img')->widget(InputFile::class, [
            'language'      => 'uz',
            'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
            'options'       => ['class' => 'form-control'],
            'buttonOptions' => ['class' => 'btn btn-default'],
            'multiple'      => false       // возможность выбора нескольких файлов
        ]); ?>

        <?= $form->field($model, 'content')->widget(CKEditor::class,[
            'editorOptions' => [
                'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
        ]); ?>

        <?= $form->field($model, 'status')->widget(SwitchInput::class, [
            'pluginOptions' => [
                'size' => 'md',
                'onColor' => 'success',
                'offColor' => 'danger',
                'onText' => 'Faol',
                'offText' => 'Faol emas',
            ]
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success float-right'])
            ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
