<?php
?>
<div class="banner-update container px-5">
    <div class="rounded-3 py-2 px-1  pt-5">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/banner/">Anuncio</a></li>
                <li class="breadcrumb-item"><a href="/banner/view/<?= $model->bann_id ?>"><?= $model->bann_id ?></a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </div>
    </div>
    <!-- Contact form-->
    <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5">

        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                <i class="bi bi-pencil"></i>
            </div>
            <h3 class="fw-bolder">Editar el anuncio con el id: <?= $model->bann_id ?></h3>
        </div>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>