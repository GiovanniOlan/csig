<?php

use app\models\Producto;
use yii\bootstrap4\Html;
use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\bootstrap4\ActiveForm;


?>
<div class="row gx-5 justify-content-center">
    <div class="col-lg-8 col-xl-10">
        <?php $form = ActiveForm::begin(['options' => ['id' => 'contactForm']]); ?>
        <!-- Image input-->
        <div class="form-floating mb-3">
            <?= $form->field($model, $i ? 'img[]' : 'img')->widget(
                FileInput::classname(),
                [
                    'options'       => ['accept' => 'image/*', 'multiple' => $i, 'class' => 'form-control',],
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