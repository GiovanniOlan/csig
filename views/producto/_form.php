<?php

use yii\helpers\Html;
use kartik\file\FileInput;
use kartik\select2\Select2;
use app\models\ProductoImagen;
use yii\bootstrap4\ActiveForm;

?>
<div class="row gx-5 justify-content-center">
    <div class="col-lg-8 col-xl-10">
        <?php $form = ActiveForm::begin(['options' => ['id' => 'contactForm']]); ?>
        <!-- Name input-->
        <div class="form-floating mb-3">
            <?= $form->field($model, 'pro_name', ['options' => ['tag' => false,]])->textInput(['placeholder' => 'Ingresa el nombre del producto', 'maxlength' => true, ['class' => 'form-control', 'id' => 'name']])->label(false) ?>
            <label for="name">Nombre del producto</label>
        </div>
        <!-- Description input-->
        <div class="form-floating mb-3">
            <?= $form->field($model, 'pro_description', ['options' => ['tag' => false,]])->textarea(['rows' => 6, 'placeholder' => 'Ingresa tu correo', 'maxlength' => true, ['class' => 'form-control', 'id' => 'description']])->label(false) ?>
            <label for="description">Descripcion del producto</label>
        </div>
        <!-- status input-->
        <div class="form-floating mb-3">
            <?= $form->field($model, "pro_status")->widget(Select2::classname(), [
                'data' => [0 => 'Oculto', 1 => 'Visible'],
                'options' => ['placeholder' => 'Selecciona su Estatus...', 'class' => 'form-control', 'id' => 'status'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
            <!-- <label for="phone">Número de teléfono</label> -->
        </div>
        <!-- Image input-->
        <div class="form-floating mb-3">
            <?php
            if ($i) {
                //Create
                echo $form->field($productoImagen, 'img[]')->widget(
                    FileInput::classname(),
                    [
                        'options'       => ['accept' => 'image/*', 'multiple' => true, 'class' => 'form-control',],
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
                //Update
                //echo  Html::a('Editar una imagen solamente', ['index?sort=pro_name'], ['class' => 'btn btn-success']);
                echo $form->field(empty($productoImagen) ? new ProductoImagen : $productoImagen[0], 'img[]')->widget(
                    FileInput::classname(),
                    [
                        'options'       => ['accept' => 'image/*', 'multiple' => true, 'class' => 'form-control',],
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
        </div>
        <!-- Submit Button-->
        <div class="d-grid">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary btn-lg']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>