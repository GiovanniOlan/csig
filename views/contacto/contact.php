<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

?>
<section class="">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5 mt-3">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <i class="bi bi-envelope"></i>
                </div>
                <h1 class="fw-bolder">¡Contáctenos!</h1>
                <p class="lead fw-normal text-muted mb-0">
                    Nos encantaría saber de usted.
                </p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <?php $form = ActiveForm::begin(['options' => ['id' => 'contactForm']]); ?>
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <?= $form->field($model, 'con_nombre', ['options' => ['tag' => false,]])->textInput(['placeholder' => 'Ingresa tu nombre', 'maxlength' => true, ['class' => 'form-control', 'id' => 'name']])->label(false) ?>
                        <label for="name">Nombre</label>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <?= $form->field($model, 'con_correo', ['options' => ['tag' => false,]])->textInput(['placeholder' => 'Ingresa tu correo', 'maxlength' => true, ['class' => 'form-control', 'id' => 'email']])->label(false) ?>
                        <label for="email">Correo electrónico</label>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <?= $form->field($model, 'con_telefono', ['options' => ['tag' => false,]])->textInput(['placeholder' => 'Ingresa tu teléfono', 'maxlength' => true, ['class' => 'form-control', 'id' => 'phone']])->label(false) ?>
                        <label for="phone">Número de teléfono</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $form->field($model, 'con_asunto', ['options' => ['tag' => false,]])->textInput(['rows' => 6, 'placeholder' => 'Ingresa el asunto', 'maxlength' => true, ['class' => 'form-control', 'id' => 'asunto']])->label(false) ?>
                        <label for="asunto">Asunto</label>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <?= $form->field($model, 'con_mensaje', ['options' => ['tag' => false,]])->textarea(['rows' => 6, 'placeholder' => 'Ingresa tu Mensaje', 'maxlength' => true, ['class' => 'form-control', 'id' => 'message']])->label(false) ?>
                        <label for="message">Mensaje</label>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid">
                        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary btn-lg']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>


        <div class="text-center py-2">
            <h3 class="fw-bolder">¡Nuestra misión es tenderte y asesorarte en todo momento!</h3>
            <p class="lead fw-normal text-muted mb-5">

                Estamos cerca de ti para responder cualquier duda, escríbenos.

            </p>
        </div>
        <div class="row gx-5 row-cols-2 row-cols-lg-4 py-3">
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <a class="text-white" href="https://api.whatsapp.com/send?phone=+52 1 9933442747&text=Hola, ¡CSIG me gustara más información!" target="_blank"><i class="bi bi-whatsapp"></i></a>
                </div>
                <div class="h5 mb-2">WhatsApp</div>
                <p class="text-muted mb-0">Contáctanos por WhatsApp.</p>
            </div>
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <a class="text-white" href="https://m.me/103797925588723?text=Hola, ¡CSIG me gustara más información!" target="_blank"><i class="bi bi-messenger"></i></a>
                </div>
                <div class="h5">Messenger</div>
                <p class="text-muted mb-0">Contáctanos por Messenger.</p>
            </div>
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <a class="text-white" href="mailto:contactanos@csig.com.mx" target="_blank"><i class="bi bi-envelope"></i>
                    </a>
                </div>
                <div class="h5">Correo electrónico</div>
                <p class="text-muted mb-0">Contáctanos por correo.</p>
            </div>
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <a class="text-white" href="tel:9933442747" target="_blank"><i class="bi bi-telephone"></i></a>
                </div>
                <div class="h5">llámanos</div>
                <p class="text-muted mb-0">
                    Llámenos durante el horario comercial normal al +52 1 (993) 344 27 47.
                </p>
            </div>
        </div>
        <!--localización-->
        <div class="py-2">
            <h5 class="fw-bolder">Dirección</h5>
            <p>Av.martires de cananea 115-A col. Indeco ciudad industrial cp. 86017.</p>
        </div>
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.06129493694!2d-92.9086377856382!3d18.022358788925647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edd879c712f895%3A0xc27824749155d6c6!2sAv%20M%C3%A1rtires%20de%20Cananea%20115%2C%20Progresivo%20Ciudad%20Industrial%2C%2086017%20Villahermosa%2C%20Tab.!5e0!3m2!1ses-419!2smx!4v1646094288932!5m2!1ses-419!2smx" class="container" height="400" style="border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>