<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/yhqCG51/osito-Icono.png" />
  <meta name="theme-color" content="#1885ed">
  <title>SimulaRevistas</title>
  <link rel="stylesheet" href="/css/home.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <header class="header">
        <div class="container header__container">
            <div class="header__logo"><img width="42" class="header__img" src="{{ asset('/img/ositoIcono.png') }}">
                <h1 class="header__title">SIMULA<span class="header__light">REVISTAS</span></h1>
            </div>
            <div class="header__menu">
                <nav id="navbar" >
                <ul class="header__elenco">
                    <li class="header__el"><a href="/login" class="header__link">Registrarse </a></li>
                    <li class="header__ellink" style="display: none;visibility: hidden;"><a href="/login"><i class="fas fa-user" title="Usuario" id="iconoUser" style="color: #4e656e;"></i></a> </li>
                    <li class="header__el header__el--blue"><a href="/login" class="btn btn--white">Iniciar sesión →</a></li>
                </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="sect sect--padding-top" id="sectSectPaddingTop">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site">
                        <h1 class="site__title" id="site__title">Pon a Prueba tus Decisiones:  Realiza tus Simulaciones Aquí</h1>
                        <h2 class="site__subtitle">Toma Decisiones Acertadas</h2>
                        <div class="site__box-link">
                        </div>
                        <img class="site__img" src="https://image.ibb.co/c7grYb/image3015.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sect sect--white">
        <div class="container">
            <div class="row">
                <h2 class="site__subtitle" id="site__subtitle">Descripción de SIMULAREVISTAS</h2>
            </div>
            <div class="row row--margin row--text-center">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" id="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="item active">
                                <div class="item__content">
                                    <img class="item__img" src="https://i.ibb.co/vsqxGTn/des1.png" alt="Slack"><span class="item__name">SimulaRevistas</span>
                                    <p class="item__description">
                                        Dentro de SIMULAREVISTAS podrás realizar dos tipos de simulaciones una de ellas es:<br>
                                        Simulación automática<br>
                                        En este tipo de simulación los datos "Cantidad 1" y "Cantidad 2" son 0, en este tipo de simulación se busca 
                                        en todas las combinaciones posibles que valores para "Cantidad 1" y "Cantidad 2" generan más utilidad. 
                                        Este tipo de simulación devuelve los mejores valores para "Cantidad 1" y "Cantidad 2" y la utilidad que 
                                        genera si se pide estos en los dos periodos del mes.<br>
                                    </p>
                                </div>
                                <div class="item__avatar"></div>
                                <p class="item__people">Simula</p>
                                <p class="item__occupation">Revistas</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="item__content">
                                <img class="item__img" src="https://i.ibb.co/vsqxGTn/des1.png" alt="Slack"><span class="item__name">SimulaRevistas</span>
                                    <p class="item__description">
                                        Dentro de SIMULAREVISTAS podrás realizar dos tipos de simulaciones una de ellas es:<br>
                                        Simulación ingresando los valores de "Cantidad 1" y "Cantidad 2"<br>
                                        En este tipo de simulación se ingresan dos datos "Cantidad 1" y "Cantidad 2" con el 
                                        fin de calcular la Utilidad neta que genera el pedir estas cantidades en los dos peridos del mes.
                                        Generalmente este tipo de simulación se realiza por parte del usuario para probar o saber que ganancias 
                                        se obtendran si se pedirian tales cantidades.<br>
                                    </p>
                                </div>
                                <div class="item__avatar"></div>
                                <p class="item__people">Simula</p>
                                <p class="item__occupation">Revistas</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="item__content">
                                <img class="item__img" src="https://i.ibb.co/vsqxGTn/des1.png" alt="Slack"><span class="item__name">SimulaRevistas</span>
                                    <p class="item__description">
                                        Además encontraras herramientas para tus simulaciones, podrás ver las simulaciones indiduales realizadas junto con su detalle, podrás exportar tanto estas simulaciones como datos individuales, ademas de contar con gráficos que permiten la visualización de los resultados de tus simulaciones.
                                    </p>
                                </div>
                                <div class="item__avatar"></div>
                                <p class="item__people">Simula</p>
                                <p class="item__occupation">Revistas</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="sect sect--violet">
        <img src="https://image.ibb.co/fWyVtb/path3762.png" class="career-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="career_title">Las simulaciones están a punto de despegar.</h1>
                    <h1 class="career_sub"> ¡Únete a nosotros en este emocionante viaje de descubrimiento y aprendizaje!</h1>
                    <a href="/login" class="btn btn--white btn--width">Registrate</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-6">
                    <img width="70" class="footer__img" src="https://i.ibb.co/yhqCG51/osito-Icono.png">
                    <h1 class="footer__title">SIMULA<span class="footer__light">REVISTAS</span></h1>
                </div>
            </div>
        </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $("#myCarousel").carousel({
  interval: false
});
</script>
</body>
</html>