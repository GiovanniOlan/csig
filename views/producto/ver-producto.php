<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder"><?= $model->pro_name ?></h1>
                </div>
            </div>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <p class="lead fw-normal text-muted"> <?= $model->pro_description ?></p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <?php foreach ($images as $im) { ?>

                <div class="col-6"><img class="img-fluid rounded-3 mb-5" src="/images/productos/<?= $im->proimg_url ?>" alt="..." /></div>

            <?php } ?>

            <!-- <div class="col-12"><img class="img-fluid rounded-3 mb-5" src="https://dummyimage.com/1300x700/343a40/6c757d" alt="..." /></div>
            <div class="col-lg-6"><img class="img-fluid rounded-3 mb-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
            <div class="col-lg-6"><img class="img-fluid rounded-3 mb-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div> -->
        </div>

        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <a class="text-decoration-none" href="/site/productos">
                        Ver más productos
                        <i class="bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>