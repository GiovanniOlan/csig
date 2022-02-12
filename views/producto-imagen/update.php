<?php

use yii\helpers\Html;

$this->title = 'Editar Imagenes De Productos: ' . $model->proimg_id;
$this->params['breadcrumbs'][] = ['label' => 'Imagenes De Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->proimg_id, 'url' => ['view', 'id' => $model->proimg_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="producto-imagen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $i = false;
    echo $this->render('_form', compact('model', 'i')) ?>

</div>