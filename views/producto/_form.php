<?php

use yii\helpers\Html;
use kartik\file\FileInput;
use kartik\select2\Select2;
use app\models\ProductoImagen;
use yii\bootstrap4\ActiveForm;


?>

<div class="producto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pro_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pro_description')->textarea(['rows' => 6]) ?>

    <?php // $form->field($model, 'pro_status')->textInput() 
    ?>

    <?= $form->field($model, "pro_status")->widget(Select2::classname(), [
        'data' => [0 => 'Oculto', 1 => 'Visible'],
        'options' => ['placeholder' => 'Selecciona su Estatus...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <?php
    if ($i) {

        echo $form->field($productoImagen, 'img[]')->widget(
            FileInput::classname(),
            [
                'options'       => ['accept' => 'image/*', 'multiple' => true],
                'language'      => 'es',
                'pluginOptions' => [
                    'allowedFileExtensions' =>  ['jpg', 'png'],
                    'initialPreviewAsData'  => true,
                    'showUpload'            => false,
                    'showRemove'            => false,
                    'initialPreview'        => [$productoImagen->getUrl()],
                    'browseClass'           => 'btn btn-primary btn-block',
                    'browseIcon'            => '<i class="fas fa-camera"></i> ',
                    'browseLabel'           =>  'Seleccione una foto',
                ],
            ]
        );
    } else {
        echo $form->field(empty($productoImagen) ? new ProductoImagen : $productoImagen[0], 'img[]')->widget(
            FileInput::classname(),
            [
                'options'       => ['accept' => 'image/*', 'multiple' => true],
                'language'      => 'es',
                'pluginOptions' => [
                    'allowedFileExtensions' =>  ['jpg', 'png'],
                    'initialPreviewAsData'  => true,
                    'showUpload'            => false,
                    'showRemove'            => false,
                    'initialPreview'        => ProductoImagen::getUrls($productoImagen),
                    'browseClass'           => 'btn btn-primary btn-block',
                    'browseIcon'            => '<i class="fas fa-camera"></i> ',
                    'browseLabel'           =>  'Seleccione una foto',
                ],
            ]
        );
    }
    ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>