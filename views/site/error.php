<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error container mt-5">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        El error anterior se produjo mientras el servidor web estaba procesando su solicitud.
    </p>
    <p>
        Por favor, póngase en contacto con nosotros si cree que se trata de un error del servidor. Gracias.
    </p>

</div>