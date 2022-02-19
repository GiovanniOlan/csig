<?php
?>
<div class="producto-imagen-create container px-5">
    <div class="rounded-3 py-2 px-1  pt-5">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/producto-imagen/actualizar-imagen-index?id=<?= $id ?>">Imagenes del producto</a></li>
                <li class="breadcrumb-item active" aria-current="page">Agregar imagenes</li>
            </ol>
        </div>
    </div>
    <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5">

        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                <i class="bi bi-plus-square-fill"></i>
            </div>
            <h3 class="fw-bolder">Agregar imagenes al producto con el id: <?= $id ?></h3>
        </div>

        <?php $i = true;
        echo $this->render('_agregar', compact('model', 'i')) ?>
    </div>
</div>