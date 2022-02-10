<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;


?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bann_photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bann_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bann_status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>