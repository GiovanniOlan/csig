<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

?>
<section class="">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5">
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
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <?= $form->field($model, 'con_mensaje', ['options' => ['tag' => false,]])->textarea(['rows' => 6, 'placeholder' => 'Ingresa tu Mensaje', 'maxlength' => true, ['class' => 'form-control', 'id' => 'message']])->label(false) ?>
                        <label for="message">Mensaje</label>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-primary btn-lg']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
        <!-- Contact cards-->
        <div class="text-center py-2">
            <h3 class="fw-bolder">¡Nuestra misión es tenderte y asesorarte en todo momento!</h3>
            <p class="lead fw-normal text-muted mb-5">

                Estamos cerca de ti para responder cualquier duda, escríbenos.

            </p>
        </div>
        <div class="row gx-5 row-cols-2 row-cols-lg-4 py-3">

            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <i class="bi bi-whatsapp"></i>
                </div>
                <div class="h5 mb-2">WhatsApp</div>
                <p class="text-muted mb-0">Contáctanos por WhatsApp.</p>
            </div>
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <i class="bi bi-messenger"></i>
                </div>
                <div class="h5">Messenger</div>
                <p class="text-muted mb-0">Contáctanos por Messenger.</p>
            </div>
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <i class="bi bi-envelope"></i>
                </div>
                <div class="h5">Correo electrónico</div>
                <p class="text-muted mb-0">Contáctanos por Messenger.</p>
            </div>
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <i class="bi bi-telephone"></i>
                </div>
                <div class="h5">llámanos</div>
                <p class="text-muted mb-0">
                    Llámenos durante el horario comercial normal al (555) 892-9403.
                </p>
            </div>
        </div>
        <!--localización-->
        <div class="py-2">
            <h5 class="fw-bolder">Dirección</h5>
            <p>Boulevard Adolfo Ruiz Cortines 1840, Carrizal, 86108 Villahermosa, Tab.</p>
        </div>
        <section>

        </section>
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30358.088545686725!2d-92.9675582!3d17.989849900000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edd7a4df15786f%3A0x4a44c45c0e93bb21!2sEuroplaza!5e0!3m2!1ses-419!2smx!4v1644462081302!5m2!1ses-419!2smx" class="container" height="400" style="border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <!--seccion de redes sociales-->
        <div class="py-2 bg-light">
            <div class="card border-0 bg-light mt-xl-5">
                <div class="card-body p-4 py-lg-3">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div>
                                <h4 class="fw-bolder">¡Síguenos!</h4>
                            </div>
                            <p class="text-muted mb-4">
                                Mantente al tanto de todas nuestras novedades.
                            </p>
                            <a class="fs-2 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                            <a class="fs-2 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                            <a class="fs-2 px-2 link-dark" href="#!"><i class="bi-instagram"></i></a>
                            <a class="fs-2 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>