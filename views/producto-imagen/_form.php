<?php

use yii\helpers\Html;
use app\models\Producto;
use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductoImagen */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="producto-imagen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //$form->field($model, 'proimg_url')->textInput(['maxlength' => true]) 
    ?>



    <?= $form->field($model, $i ? 'img[]' : 'img')->widget(
        FileInput::classname(),
        [
            'options'       => ['accept' => 'image/*', 'multiple' => $i],
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

    <?= $form->field($model, "proimg_fkproducto")->widget(Select2::classname(), [
        'data' => Producto::mapNombre(),
        'options' => ['placeholder' => 'Selecciona el producto...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>