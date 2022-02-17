<?php

use yii\helpers\Html;
use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\bootstrap4\ActiveForm;

?>
<div class="banner-form row gx-5 justify-content-center">
    <div class="col-lg-8 col-xl-10">
        <?php $form = ActiveForm::begin(['options' => ['id' => 'contactForm']]); ?>
        <!-- URL input-->
        <div class="form-floating mb-3">
            <?= $form->field($model, 'bann_url', ['options' => ['tag' => false,]])->textInput(['placeholder' => 'Ingresa el URL del producto', 'maxlength' => true, ['class' => 'form-control', 'id' => 'url']])->label(false) ?>
            <label for="url">URL del producto</label>
        </div>
        <!-- Status input-->
        <div class="form-floating mb-3">
            <?= $form->field($model, "bann_status")->widget(Select2::classname(), [
                'data' => [0 => 'Oculto', 1 => 'Visible'],
                'options' => ['placeholder' => 'Selecciona su Estatus...', 'class' => 'form-control', 'id' => 'status'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
        <!-- Image input-->
        <div class="form-floating mb-3">
            <?= $form->field($model, 'img')->widget(
                FileInput::classname(),
                [
                    'options'       => ['accept' => 'image/*', 'class' => 'form-control'],
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
        </div>
        <!-- Submit Button-->
        <div class="d-grid">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary btn-lg']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>