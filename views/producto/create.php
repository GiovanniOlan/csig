<?php

$i = true;

?>
<div class="producto-create container px-5">
    <div class="rounded-3 py-2 px-1  pt-5">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/producto/">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Agregar Producto</li>
            </ol>
        </div>
    </div>
    <!-- Contact form-->
    <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5">

        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                <i class="bi bi-plus-square-fill"></i>
            </div>
            <h3 class="fw-bolder">Agregar Producto</h3>
        </div>

        <?= $this->render('_form', compact('model', 'productoImagen', 'i')) ?>
    </div>
</div>