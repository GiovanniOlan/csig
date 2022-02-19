<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="producto-view container rounded-3 py-2 px-1  pt-5">
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/producto/update?id=<?= $model->proimg_fkproducto ?>">Producto: <?= $model->proimg_fkproducto ?></a></li>
            <li class="breadcrumb-item"><a href="/producto-imagen/actualizar-imagen-index?id=<?= $model->proimg_fkproducto ?>">Imagenes </a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $model->proimg_id ?></li>

        </ol>
    </div>

    <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5">

        <div class="text-center mb-3">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                <i class="bi bi-plus-square-fill"></i>
            </div>
            <h3 class="fw-bolder">Imagen con el id: <?= $model->proimg_id ?></h3>
        </div>
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'proimg_id',
                //'proimg_url:url',
                [
                    'attribute' => 'imagen',
                    'format' => 'raw',
                ],
                'proimg_fkproducto',
            ],
        ]) ?>
    </div>



</div>