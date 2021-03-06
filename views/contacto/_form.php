<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contacto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'con_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'con_correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'con_telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'con_mensaje')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'con_fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
