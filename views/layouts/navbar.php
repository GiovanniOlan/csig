<?php

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use webvimark\modules\UserManagement\models\User;
use webvimark\modules\UserManagement\UserManagementModule;




?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' =>  'CSGI',
        'brandUrl' => Yii::$app->homeUrl,
        'innerContainerOptions' => ['class' => 'container px-5'],
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-dark bg-dark',
        ],
    ]);
    $menuItems = [];
    $menuItems[] = ['label' => 'Inicio', 'url' => '/'];
    $menuItems[] = ['label' => 'Nosotros', 'url' => '/site/nosotros'];
    $menuItems[] = ['label' => 'Contáctanos', 'url' => '/contacto'];
    $menuItems[] = ['label' => 'Productos y Servicios', 'url' => '/site/productos'];
    $menuItems[] = [
        'label' => 'Administrador',
        'items' => UserManagementModule::menuItems(),
        'options' => [
            'class' => '  list-inline-item last-item '
        ],
        'encodeLabels' => false,
        'visible' => Yii::$app->user->isSuperAdmin,
    ];
    $duenioItems[] = ['label' => '<i class="fa fa-angle-double-right"></i> ' . 'Productos', 'url' => ['/producto/']];
    $duenioItems[] = ['label' => '<i class="fa fa-angle-double-right"></i> ' . 'Anuncios', 'url' => ['/banner/'], 'visible' => false];
    $menuItems[] = ['label' => 'Opciones', 'items' => $duenioItems, 'url' => '/user-management/auth/logout', 'visible' => User::hasRole('Duenio', false), 'options' => ['style' => 'font-family: fangsong;']];
    $menuItems[] = ['label' => 'CERRAR SESIÓN(Programador X)', 'url' => '/user-management/auth/logout', 'visible' => Yii::$app->user->isSuperAdmin, 'options' => ['style' => 'font-family: fangsong;']];
    $menuItems[] = ['label' => 'CERRAR SESIÓN(Salomon)', 'url' => '/user-management/auth/logout', 'visible' => User::hasRole('Duenio', false), 'options' => ['style' => 'font-family: fangsong;']];
    ?>
    <?= Nav::widget([
        'options' => ['class' => 'navbar-nav ms-auto mb-2 mb-lg-0'],
        'items' => $menuItems,
        'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>
</header>