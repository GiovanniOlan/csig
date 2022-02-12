<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductoImagen */

$this->title = 'Agregar Imagen Del Producto';
$this->params['breadcrumbs'][] = ['label' => 'Imagenes de los productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producto-imagen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $i = true;
    echo $this->render('_form', compact('model', 'i')) ?>

</div>