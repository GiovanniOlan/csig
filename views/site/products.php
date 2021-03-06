<!-- Pricing section-->
<section class="bg-light">
    <div class="container-fluid" style="margin:0; padding:0;">
        <!-- carrucel -->
        <!-- <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/template/img/career-gc82c16ff5_640.jpg" class="d-block w-100" id="redimencionar" alt="imagen informativa 1">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/template/img/pngw.png" class="d-block w-100 " id="redimencionar" alt="imagen informativa 2">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/template/img/career-gc82c16ff5_640.jpg" class="d-block w-100" id="redimencionar" alt="imagen informativa 3">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div> -->
        <!--termina carrusel-->
        <section class="py-2 bg-light">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">Productos</h2>
                            <p class="lead fw-normal text-muted mb-5">
                                Encuentra todo lo que necesitas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <!-- <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="/template/img/oxigeno.jfif" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Nombre
                                        Producto</h5>
                                </a>
                                <p class="card-text mb-0">
                                    Some quick example text to
                                    build
                                    on
                                    the
                                    card title and make
                                    up the bulk of the card's
                                    content.
                                </p>
                            </div>
                        </div>
                    </div> -->

                    <?php foreach ($allProducts as $p) { ?>

                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="/images/productos/<?= $p->oneImagen ?>" alt="..." />
                                <div class="card-body p-4">
                                    <a class="text-decoration-none link-dark stretched-link" href="/producto/ver-producto?id=<?= $p->pro_id ?>">
                                        <h5 class="card-title mb-3"><?= $p->pro_name ?></h5>
                                    </a>
                                    <p class="card-text mb-0">
                                        <?= $p->pro_description ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
</section>