<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

?>
<section class="py-2">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <i class="bi bi-person-circle"></i>
                </div>
                <h1 class="fw-bolder">Inicia Sesión</h1>
                <p class="lead fw-normal text-muted mb-0">
                    Solo el personal autorizado
                </p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <?php
                    $form = ActiveForm::begin([
                        'id' => 'login-form',
                        //'layout' => 'horizontal',
                        'options' => ['autocomplete' => 'off'],
                        'validateOnBlur' => false,
                        'fieldConfig' => [
                            'template' => "{input}\n{error}",
                        ],
                    ]); ?>
                    <!-- Name input-->
                    <div class="form-floating mb-3">

                        <?= $form->field($model, 'username')
                            ->textInput(['placeholder' => $model->getAttributeLabel('username'), 'autocomplete' => 'off']) ?>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <?= $form->field($model, 'password')
                            ->passwordInput(['placeholder' => $model->getAttributeLabel('password'), 'autocomplete' => 'off']) ?>
                    </div>

                    <div class="d-grid">
                        <?= Html::submitButton('Iniciar sesión', ['class' => 'btn btn-primary btn-lg']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>