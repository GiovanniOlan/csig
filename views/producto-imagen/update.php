<?php
?>
<div class="producto-imagen-update container px-5">
    <div class="rounded-3 py-2 px-1  pt-5">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/producto/">Imagenes de Productos</a></li>
                <li class="breadcrumb-item"><a href="/producto/view/<?= $model->proimg_id ?>"><?= $model->proimg_id ?></a></li>
                <li class="breadcrumb-item active" aria-current="page">Imagenes de Productos</li>
            </ol>
        </div>
    </div>
    <!-- Contact form-->
    <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5">

        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                <i class="bi bi-pencil"></i>

            </div>
            <h3 class="fw-bolder">Editar imagen del productos con el id: <?= $model->proimg_fkproducto ?></h3>
        </div>

        <?php $i = false;
        echo $this->render('_form', compact('model', 'i')) ?>
    </div>
</div>