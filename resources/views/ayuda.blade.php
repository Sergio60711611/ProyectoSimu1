<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/ayuda.css">
    <title>Simulación Caso 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-pzjw8f+ua/Ct4ePfVgVq+81lXGc2xTCR8F8Xwa1NFv3cDZLx0kgm6H/iS9I5s1de" crossorigin="anonymous">

</head>
<body>
@php
        $id = $cliente['id'];
        $nombre = $cliente['nombre'];
        $correo = $cliente['correo'];
        $password = $cliente['contraseña'];
    @endphp
    <div class="app-container app-theme-white body-tabs-shadowfixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__content">
                <div class="app-header-left">
                    <!--
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div> 
                    -->
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="{{ asset('/img/perfil.jpg') }}" alt="">
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <h6 tabindex="-1" class="dropdown-header">Perfil</h6>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <div type="button" tabindex="0" class="dropdown-item">Nombre: {{$nombre}}</div>
                                            <div type="button" tabindex="0" class="dropdown-item">Correo: {{$correo}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div> 
        <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                        PREGUNTAS FRECUENTES
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="tab-eg-55">
                                        <div class="pt-2 card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="panel-group">
                                                        <ul class="list-unstyled">
                                                            <li class="panel panel-filled support-question active">
                                                                <a href="#answer1" data-toggle="tab" aria-expanded="true">
                                                                <div class="panel-body">
                                                                    <p class="font-bold c-white">¿Qué es Cantidad 1?</p>
                                                                    <p>
                                                                     Cantidad 1 en el problema se refiere a la cantidad que se pide en los primeros 10 dias del mes.
                                                                    </p>
                                                                </div>
                                                                </a>
                                                            </li>
                                                            <li class="panel panel-filled support-question">
                                                                <a href="#answer2" data-toggle="tab" aria-expanded="false">
                                                                <div class="panel-body">
                                                                    <p class="font-bold c-white">¿Qué es Cantidad 2?</p>
                                                                    <p>
                                                                    Cantidad 2 en el problema se refiere a la cantidad que se pide en los siguientes 20 dias del mes.
                                                                    </p>
                                                                </div>
                                                                </a>
                                                            </li>
                                                            <li class="panel panel-filled support-question">
                                                                <a href="#answer3" data-toggle="tab" aria-expanded="false">
                                                                <div class="panel-body">
                                                                    <p class="font-bold c-white">¿Qué es Utilidad neta?</p>
                                                                    <p>
                                                                    La utilidad neta es el beneficio económico efectivo que obtienen los dueños de una empresa u organización.
                                                                    </p>
                                                                </div>
                                                                </a>
                                                            </li>
                                                            <li class="panel panel-filled support-question">
                                                                <a href="#answer4" data-toggle="tab" aria-expanded="false">
                                                                <div class="panel-body">
                                                                    <p class="font-bold c-white">¿Cuántos tipos de simulación se pueden realizar?</p>
                                                                    <p>
                                                                    En esta página de simulación se pueden realizar dos tipos de simulación.
                                                                    </p>
                                                                </div>
                                                                </a>
                                                            </li>
                                                            <li class="panel panel-filled support-question">
                                                                <a href="#answer5" data-toggle="tab" aria-expanded="false">
                                                                <div class="panel-body">
                                                                    <p class="font-bold c-white">¿A qué se refieren los términos: Precio de Compra, Precio de Venta, Precio de Devolución?</p>
                                                                    <p>
                                                                    Algunos términos utilizados en esta página de simulación.
                                                                    </p>
                                                                </div>
                                                                </a>
                                                            </li>
                                                            <li class="panel panel-filled support-question">
                                                                <a href="#answer6" data-toggle="tab" aria-expanded="false">
                                                                <div class="panel-body">
                                                                    <p class="font-bold c-white">¿Qué problema puede resolver este problema?</p>
                                                                    <p>
                                                                    Descripción del problema que se intenta resolver con esta página de simulación.
                                                                    </p>
                                                                </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="panel">
                                                        <div class="panel-body">
                                                            <div class="tab-content">
                                                                <div id="answer1" class="tab-pane active">
                                                                    <h3>¿Qué es Cantidad 1?</h3>
                                                                    <p>
                                                                       Para entender mejor con que nos referimos a "Cantidad 1" debemos tener en cuenta que en el problema se habla de un mes de 30
                                                                       días, mismo que se divide el 2 partes, la primera parte del mes comprende 10 días y los restantes 20 días serán la segunda 
                                                                       parte del mes.
                                                                    </p>
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                                        <img width="250" src="{{ asset('/img/Calendario 10.jpg') }}" alt="">
                                                                    </div>
                                                                    <p>
                                                                      Teniendo en cuenta eso el término "Cantidad 1" se refiere a la cantidad de revistas a pedir del proovedor por el vendedor en 
                                                                       primeros 10 días del mes o la primera parte del mes.
                                                                    </p>
                                                                      En este problema se busca encontrar la "Cantidad 1" y la "Cantidad 2" que genere más utilidad neta.
                                                                    <div class="d-flex justify-content-end" style="margin-top: 95px;">
                                                                        <img width="250" src="{{ asset('/img/FAQ.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div id="answer2" class="tab-pane">
                                                                    <h3>¿Qué es Cantidad 2?</h3>
                                                                        <p>
                                                                        Para entender mejor con que nos referimos a "Cantidad 2" debemos tener en cuenta que en el problema se habla de un mes de 30
                                                                        días, mismo que se divide el 2 partes, la primera parte del mes comprende 10 días y los restantes 20 días serán la segunda 
                                                                        parte del mes.
                                                                        </p>
                                                                        <div class="d-flex justify-content-center align-items-center">
                                                                            <img width="250" src="{{ asset('/img/Calendario 20.jpg') }}" alt="">
                                                                        </div>
                                                                        <p>
                                                                        Teniendo en cuenta eso el término "Cantidad 2" se refiere a la cantidad de revistas a pedir del proovedor por el vendedor en 
                                                                        los siguientes 20 días del mes o en la segunda parte del mes.
                                                                        </p>
                                                                        En este problema se busca encontrar la "Cantidad 1" y la "Cantidad 2" que genere más utilidad neta.
                                                                        <div class="d-flex justify-content-end" style="margin-top: 95px;">
                                                                        <img width="250" src="{{ asset('/img/FAQ.jpg') }}" alt="">
                                                                        </div>
                                                                </div>
                                                                <div id="answer3" class="tab-pane">
                                                                    <h3>¿Qué es Utilidad neta?</h3>
                                                                    <p>
                                                                    La "utilidad neta" o ganancia neta, también conocida como el resultado final, el ingreso neto o las ganancias netas es una 
                                                                    medida de la rentabilidad de una empresa después de contabilizar todos los costos e impuestos. 
                                                                    Es el beneficio real e incluye los gastos operativos que están excluidos del beneficio bruto.
                                                                    </p>
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                                        <img width="350" src="{{ asset('/img/Utilidad.jpg') }}" alt="">
                                                                    </div>
                                                                    <p>
                                                                        En este problema la Utilidad neta se obtiene de la siguiente forma:
                                                                    </p> 
                                                                    <p>
                                                                        Utilidad neta(en Bs.) = Ingresos por ventas normales + Ingresos por devolución(venta a proovedor) - Costo de Compra total(Costo al que se obtuvo las revistas del proovedor).
                                                                    </p>
                                                                        En este problema se busca encontrar la "Cantidad 1" y la "Cantidad 2" que genere más utilidad neta.
                                                                    <div class="d-flex justify-content-end" style="margin-top: 95px;">
                                                                        <img width="250" src="{{ asset('/img/FAQ.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div id="answer4" class="tab-pane">
                                                                    <h3>¿Cuántos tipos de simulación se pueden realizar?</h3>
                                                                    <p>
                                                                        En esta página y para esta versión se pueden realizar dos tipos de simulación:
                                                                    </p>
                                                                    <ul>
                                                                        <li>Simulación automática</li>
                                                                        <li>Simulación ingresando los valores de "Cantidad 1" y "Cantidad 2"</li>
                                                                    </ul>
                                                                    <p>
                                                                    <div><img width="42" class="rounded-circle" src="{{ asset('/img/Proceso.png') }}" alt=""><spam> </spam><strong>Simulación automática:</strong></div>
                                                                    </p>
                                                                    <p>
                                                                        En este tipo de simulación los datos "Cantidad 1" y "Cantidad 2" son 0, en este tipo de simulación se busca 
                                                                        en todas las combinaciones posibles que valores para "Cantidad 1" y "Cantidad 2" generan más utilidad. 
                                                                        Este tipo de simulación devuelve los mejores valores para "Cantidad 1" y "Cantidad 2" y la utilidad que 
                                                                        genera si se pide estos en los dos periodos del mes.
                                                                    </p>
                                                                    <p>
                                                                    <div><img width="42" class="rounded-circle" src="{{ asset('/img/Proceso.png') }}" alt=""><spam> </spam><strong>Simulación ingresando los valores de "Cantidad 1" y "Cantidad 2":</strong></div>
                                                                    </p>
                                                                    <p>
                                                                        En este tipo de simulación se ingresan dos datos "Cantidad 1" y "Cantidad 2" con el 
                                                                        fin de calcular la Utilidad neta que genera el pedir estas cantidades en los dos peridos del mes.
                                                                        Generalmente este tipo de simulación se realiza por parte del usuario para probar o saber que ganancias 
                                                                        se obtendran si se pedirian tales cantidades.
                                                                    </p>
                                                                    <div class="d-flex justify-content-end" style="margin-top: 135px;">
                                                                        <img width="250" src="{{ asset('/img/FAQ.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div id="answer5" class="tab-pane">
                                                                    <h3>¿A qué se refieren los términos: Precio de Compra, Precio de Venta, Precio de Devolución?</h3>
                                                                    <p>
                                                                        A continuación la definición de estos términos:
                                                                    </p>
                                                                    <ul>
                                                                        <li>Precio de Compra</li>
                                                                        <li>Precio de Venta</li>
                                                                        <li>Precio de Devolución</li>
                                                                    </ul>
                                                                    <p>
                                                                    <div><strong>Precio de Compra:</strong></div>
                                                                    </p>
                                                                    <p>
                                                                    El precio de compra es el valor que el vendedor le pago al proovedor por cada revista.
                                                                    </p>
                                                                    <p>
                                                                    <div><strong>Precio de Venta:</strong></div>
                                                                    </p>
                                                                    <p>
                                                                    El precio de ventas es el valor que se les cobrará a los clientes por cada revista.
                                                                    </p>
                                                                    <p>
                                                                    <div><strong>Precio de Devolución:</strong></div>
                                                                    </p>
                                                                    <p>
                                                                    El precio de devolución es el precio que pagará el proovedor al vendedor de revistas por cada revista que no se vendio en cada periodo del mes.
                                                                    </p>
                                                                    <div class="d-flex justify-content-end" style="margin-top: 155px;">
                                                                        <img width="250" src="{{ asset('/img/FAQ.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div id="answer6" class="tab-pane">
                                                                    <h3>¿Qué problema puede resolver este problema?</h3>
                                                                        <div>
                                                                            El Problema Propuesto es el siguiente:<br>
                                                                            Un vendedor de revistas compra mensualmente una revista el día primero de cada mes. El costo de cada ejemplar es de Bs. 1.50.
                                                                            La demanda de esta revista en los primeros 10 dias del mes sigue la siguiente distribución de probabilidad:  <br>
                                                                            <table class="table table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col">Demanda</th>
                                                                                        <th scope="col">5</th>
                                                                                        <th scope="col">6</th>
                                                                                        <th scope="col">7</th>
                                                                                        <th scope="col">8</th>
                                                                                        <th scope="col">9</th>
                                                                                        <th scope="col">10</th>
                                                                                        <th scope="col">11</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Probabilidad</th>
                                                                                        <td>0.05</td>
                                                                                        <td>0.05</td>
                                                                                        <td>0.10</td>
                                                                                        <td>0.15</td>
                                                                                        <td>0.25</td>
                                                                                        <td>0.25</td>
                                                                                        <td>0.15</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            Al final del décimo día, el vendedor puede regresar cualquier cantidad al proveedor, quien se las pagará a Bs. 0.90 el ejemplar, o comprar más a Bs. 1.20 el ejemplar.
                                                                            La demanda en los siguientes 20 días está dada por la siguiente distribución de probabilidad: <br>
                                                                            <table class="table table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col">Demanda</th>
                                                                                        <th scope="col">4</th>
                                                                                        <th scope="col">5</th>
                                                                                        <th scope="col">6</th>
                                                                                        <th scope="col">7</th>
                                                                                        <th scope="col">8</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Probabilidad</th>
                                                                                        <td>0.15</td>
                                                                                        <td>0.20</td>
                                                                                        <td>0.30</td>
                                                                                        <td>0.20</td>
                                                                                        <td>0.15</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            Al final del mes, el vendedor puede regresar al proveedor las revistas que le sobren, las cuales se le pagarán a Bs. 0.60 el ejemplar.
                                                                            Finalmente, se asume que después de un mes ya no existe demanda por parte del público, puesto que para ese entonces ya habrá aparecido el nuevo número de la revista.
                                                                            Si el precio al público es de Bs. 2.‐ por ejemplar, determine la política óptima de compra.   
                                                                            <p>
                                                                        </div>
                                                                    <div class="d-flex justify-content-end" style="margin-top: 105px;">
                                                                        <img width="250" src="{{ asset('/img/FAQ.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Popper.js (versión compatible con Bootstrap 4) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var tabItems = document.querySelectorAll('.support-question');
        tabItems.forEach(function (tab) {
            tab.addEventListener('click', function () {
                tabItems.forEach(function (item) {
                    item.classList.remove('active');
                });
                tab.classList.add('active');
            });
        });
    });
    </script>
</body>
</html>