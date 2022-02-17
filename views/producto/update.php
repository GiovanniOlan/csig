<?php

use yii\helpers\Html;

$i = false;

$this->title = 'Actualizar Producto: ' . $model->pro_id;
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pro_id, 'url' => ['view', 'id' => $model->pro_id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="producto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', compact('model', 'productoImagen', 'i')) ?>

</div>