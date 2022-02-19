<?php
?>
<div class="producto-imagen-update container px-5">
    <div class="rounded-3 py-2 px-1  pt-5">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/producto/update?id=<?= $model->proimg_fkproducto ?>">Producto: <?= $model->proimg_fkproducto ?></a></li>
                <li class="breadcrumb-item"><a href="/producto-imagen/actualizar-imagen-index?id=<?= $model->proimg_fkproducto ?>">Imagenes </a></li>
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
            <h3 class="fw-bolder">Editar imagen del productos con el id: <?= $model->proimg_fkproducto ?></h3>
        </div>

        <?php $i = false;
        echo $this->render('_agregar', compact('model', 'i')) ?>
    </div>
</div>