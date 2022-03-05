<?php

use app\models\Producto;

$productos = Producto::getAllproductos();

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-12 bg-image d-flex justify-content-center aling-item-center" style="background-image:linear-gradient(rgba(5,7,12,0.7),rgba(5,7,12,0.75)), url('/template/img/9.jpg'); background-size: cover; background-repeat: no-repeat;" id="cont1">
            <div class="row">
                <div class="col-12 col-lg-12 d-flex
            justify-content-center
            aling-item-center">
                    <img style="height:
            25vh;" src="/template/img/logoem.png" alt="logo de empresa">
                </div>
                <!-- divicion de las img -->
                <div class="row" id="dd">
                    <!-- img 1 -->
                    <div class="col-3 d-none d-xl-block text-center" id="da">
                        <div style="background-image: url(/template/img/15.jpeg); background-size: cover;" id="cuadro">
                            <div class="d-block w-100">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="text-center justify-content-center align-items-center d-block d-flex" id="carr">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- img 2 -->
                    <div class="col-3 d-none d-xl-block text-center" id="da">
                        <div style="background-image: url(/template/img/14.jfif); background-size: cover;" id="cuadro">
                            <div class="d-block w-100">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="text-center justify-content-center align-items-center d-block d-flex" id="carr">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- img 3 -->
                    <div class="col-3 d-none d-xl-block text-center" id="da">
                        <div style="background-image: url(/template/img/16.jpeg); background-size: cover;" id="cuadro">
                            <div class="d-block w-100">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="text-center justify-content-center align-items-center d-block d-flex" id="carr">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- img 4 -->
                    <div class="col-3 d-none d-xl-block text-center" id="da">
                        <div style="background-image: url(/template/img/12.jfif); background-size: cover;" id="cuadro">
                            <div class="d-block w-100">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="text-center justify-content-center align-items-center d-block d-flex" id="carr">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- termina el row -->
                </div>
                <div class="col-12 col-lg-12">
                    <div class="text-center justify-content-center align-items-center mt-3" style="height: 50vh;">
                        <h2 class="text-white">COMERCIALIZADORA Y SERVICIOS INDUSTRIALES DEL GOLFO</h2>
                        <h3 class="text-white">(ADDI YOLANDA MENDOZA REYES)</h3>
                        <a href="#features" class="btn btn-outline-light m-5">SABER MAS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features section-->
    <section class="py-1" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0">¡Bienvenido a
                        CSIG!</h2>
                    <div class="col-xl-10 col-xxl-6 d-none
                                        d-xl-block
                                        text-center">
                        <img class="img-fluid rounded-3 my-3" src="/template/img/logoem.png" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1
                                        row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary
                                                bg-gradient
                                                text-white rounded-3 mb-3">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            <h2 class="h5">Precio</h2>
                            <p class="mb-0">Los precios más
                                accesibles
                                en el mercado.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary
                                                bg-gradient
                                                text-white rounded-3 mb-3">
                                <i class="bi bi-cursor-fill"></i>
                            </div>
                            <h2 class="h5">Accesibilidad</h2>
                            <p class="mb-0">
                                Fácil acceso gracias a nuestra
                                localización.
                            </p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-primary
                                                bg-gradient
                                                text-white rounded-3 mb-3">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h2 class="h5">Confianza</h2>
                            <p class="mb-0">Con más de 13 años
                                en el
                                mercado.</p>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-primary
                                                bg-gradient
                                                text-white rounded-3 mb-3">
                                <i class="bi bi-patch-check"></i>
                            </div>
                            <h2 class="h5">Calidad</h2>
                            <p class="mb-0">Productos de la
                                mejor
                                calidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog preview section-->
    <section class="py-2 bg-light">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Productos
                            destacados.</h2>
                        <p class="lead fw-normal text-muted">
                            Encuentra todo lo que necesitas.
                        </p>
                        <a class="btn btn-primary btn-lg mb-2" href="/site/productos">saber más.</a>
                    </div>

                </div>
            </div>
            <div class="row gx-5">

                <?php $co = 0;
                foreach ($productos as $pro) {
                    if ($co < 3) {
                ?>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="/images/productos/<?= $pro->getOneImagen() ?>" alt="..." />
                                <div class="card-body p-4">
                                    <a class="text-decoration-none link-dark stretched-link" href="#!">
                                        <h5 class="card-title mb-3"><?= $pro->pro_name ?></h5>
                                    </a>
                                    <p class="card-text mb-0"><?= $pro->pro_description ?></p>
                                </div>
                            </div>
                        </div>

                <?php
                    } else {
                        break;
                    }
                    $co++;
                } ?>

                <!-- <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="https://dummyimage.com/600x350/adb5bd/495057" alt="..." />
                        <div class="card-body p-4">
                            <div class="badge bg-primary
                                                bg-gradient
                                                rounded-pill mb-2">
                                Media
                            </div>
                            <a class="text-decoration-none
                                                link-dark
                                                stretched-link" href="#!">
                                <h5 class="card-title mb-3">Another
                                    blog post title</h5>
                            </a>
                            <p class="card-text mb-0">
                                This text is a bit longer to
                                illustrate
                                the adaptive height
                                of each card. Some quick example
                                text to
                                build on the card
                                title and make up the bulk of
                                the
                                card's
                                content.
                            </p>
                        </div>
                        <div class="card-footer p-4 pt-0
                                            bg-transparent
                                            border-top-0">
                            <div class="d-flex align-items-end
                                                justify-content-between">
                                <div class="d-flex
                                                    align-items-center">
                                    <img class="rounded-circle
                                                        me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                    <div class="small">
                                        <div class="fw-bold">Josiah
                                            Barclay</div>
                                        <div class="text-muted">
                                            March 23, 2021
                                            &middot;
                                            4
                                            min read
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="https://dummyimage.com/600x350/6c757d/343a40" alt="..." />
                        <div class="card-body p-4">
                            <div class="badge bg-primary
                                                bg-gradient
                                                rounded-pill mb-2">
                                News
                            </div>
                            <a class="text-decoration-none
                                                link-dark
                                                stretched-link" href="#!">
                                <h5 class="card-title mb-3">
                                    The last blog post title is
                                    a
                                    little
                                    bit longer than the
                                    others
                                </h5>
                            </a>
                            <p class="card-text mb-0">
                                Some more quick example text to
                                build on
                                the card title and
                                make up the bulk of the card's
                                content.
                            </p>
                        </div>
                        <div class="card-footer p-4 pt-0
                                            bg-transparent
                                            border-top-0">
                            <div class="d-flex align-items-end
                                                justify-content-between">
                                <div class="d-flex
                                                    align-items-center">
                                    <img class="rounded-circle
                                                        me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                    <div class="small">
                                        <div class="fw-bold">Evelyn
                                            Martinez</div>
                                        <div class="text-muted">
                                            April 2, 2021
                                            &middot;
                                            10
                                            min read
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">¿Qué
                                ofrecemos?</h2>
                            <p class="lead fw-normal text-muted
                                                mb-5">
                                Nuestras soluciones.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="/template/img/comer.png" alt="..." />
                        <div class="card-body p-4">
                            <h5 class="card-title mb-3">Comercialización</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="/template/img/distri.png" alt="..." />
                        <div class="card-body p-4">
                            <h5 class="card-title mb-3">Distribución</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="/template/img/aten.png" alt="..." style="height: 100%;" />
                        <div class="card-body p-4">
                            <h5 class="card-title mb-3">Atención
                                personalizada</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>