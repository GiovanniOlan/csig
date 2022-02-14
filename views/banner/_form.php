<?php

use yii\helpers\Html;
use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\bootstrap4\ActiveForm;


?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bann_url')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, "bann_status")->widget(Select2::classname(), [
        'data' => [0 => 'Oculto', 1 => 'Visible'],
        'options' => ['placeholder' => 'Selecciona su Estatus...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <?= $form->field($model, 'img')->widget(
        FileInput::classname(),
        [
            'options'       => ['accept' => 'image/*'],
            'language'      => 'es',
            'pluginOptions' => [
                'allowedFileExtensions' =>  ['jpg', 'png'],
                'initialPreviewAsData'  => true,
                'showUpload'            => false,
                'showRemove'            => false,
                'initialPreview'        => [$model->getUrl()],
                'browseClass'           => 'btn btn-primary btn-block',
                'browseIcon'            => '<i class="fas fa-camera"></i> ',
                'browseLabel'           =>  'Seleccione una foto',
            ],
        ]
    );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>