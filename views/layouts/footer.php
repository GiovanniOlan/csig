<!-- Messenger Plugin de chat Code -->
<div id="fb-root"></div>
<!-- Your Plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "103797925588723");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v13.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row   align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-3">
                <div class="small m-0 text-white">
                    <h5>¿Qué hacemos?</h5>
                    <p>Satisfacer a nuestros clientes con un universo de productos, que van desde un tornillo hasta inyecciones de nitrógeno a la industria petrolera.</p>
                </div>
            </div>
            <div class="col-3">
                <div class="small m-0 text-white">
                    <h5>Dirección.</h5>
                    <p>Av.martires de cananea 115-A col. Indeco ciudad industrial cp. 86017.</p>
                </div>
            </div>
            <div class="col-3">
                <div class="small m-0 text-white">
                    <h5>Contactos.</h5>
                    <p class="contac">contactanos@csig.com.mx</p>
                    <p class="contac">+52 (993) 344 27 47</p>
                </div>
            </div>
            <div class="col-3">
                <div class="small m-0 text-white">
                    <h5>Servicios.</h5>
                    <a class="text-white" href="/site/productos">Productos y Servicios</a>
                    <p class="mt-3 mb-0">¿Eres administrador?</p>
                    <a class="text-white" href="/site/login">Iniciar sesión</a>
                </div>
            </div>
        </div>
        <hr class="text-white">
        <div class="col-12 text-white" style="text-align: center;">
            <div>
                <h5 class="fw-bolder">¡Síguenos!</h5>
            </div>
            <p class="text-muted mb-4">
                Mantente al tanto de todas nuestras
                novedades.
            </p>
            <a class="fs-2 px-2" target="_blank" href="https://web.facebook.com/Comercializadora-Y-Servicios-Industriales-Del-Golfo-103797925588723"><i class="bi-facebook"></i></a>
            <a class="fs-2 px-2" target="_blank" href="https://www.instagram.com/csig.empresa/"><i class="bi-instagram"></i></a>
            <a class="fs-2 px-2" target="_blank" href="https://www.youtube.com/channel/UChwGxO0bGhckHZXh5_FMBIA"><i class="bi-youtube"></i></a>
        </div>
    </div>
</footer>