<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="/css/inicio.css">
    <title>Simulación Caso 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <!--
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Opcion 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Opcion 2
                            </a>
                        </li>
                    </ul>  -->      
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
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <ion-icon name="school-outline"></ion-icon>
                                    </div>
                                    <div> Simulación Ventas al por menor
                                        <div class="page-title-subheading">
                                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Ver Caso 1
                                            </a>
                                            </p>
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body">
                                                    Problema Propuesto:<br>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content" style="background-color: #6e98a9;">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Q1 - Cantidad 1</div>
                                            <div class="widget-subheading">Cantidad óptima a ordenar en los primeros 10 dias del mes</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>89</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content" style="background-color: #7a8082;">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Q2- Cantidad 2</div>
                                            <div class="widget-subheading">Cantidad óptima a ordenar en los siguientes 20 dias del mes</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>126</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content" style="background-color: #4e656e;">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Utilidad</div>
                                            <div class="widget-subheading">Utilidad máxima obtenida a partir de ordenar Q1 y Q2</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>136.5</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12 col-lg-5">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                            NUEVA SIMULACIÓN
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="tab-eg-55">
                                            <div class="pt-2 card-body">
                                                <div class="row">
                                                    <div class="col-md-12" >
                                                        <form action="/iniciarSimulacion" method="POST" role="form">
                                                            {{csrf_field()}}
                                                            <!--Inicio rolls-->
                                                            <label>Precio de Compra (10 días)</label>
                                                            <input type="number" class="input" name="c10" value="1.5" step="0.1" min="0" max="5"/>
                                                            <label>Precio de Venta (10 días)</label>
                                                            <input type="number" class="input" name="v10" value="2" step="0.1" min="0" max="5"/>
                                                            <label>Precio de Devolucion (10 días)</label>
                                                            <input type="number" class="input" name="d10" value="0.9" step="0.1" min="0" max="5"/>
                                                            <label>Precio de Compra (20 días)</label>
                                                            <input type="number" class="input" name="c20" value="1.2" step="0.1" min="0" max="5"/>
                                                            <label>Precio de Venta (20 días)</label>
                                                            <input type="number" class="input" name="v20" value="2" step="0.1" min="0" max="5"/>
                                                            <label>Precio de Devolucion (20 días)</label>
                                                            <input type="number" class="input" name="d20" value="0.6" step="0.1" min="0" max="5"/>
                                                            <input type="hidden" class="form-control" name="id" value="{{$id}}"></input>
                                                            <p>
                                                            <!--Inicio Q1 Y Q2-->
                                                            <div id="accordion">
                                                                <div class="card">
                                                                    <div class="card-header" id="headingOne">
                                                                    <h5 class="mb-0">
                                                                        <div class="btn collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
                                                                        Dar valores a Q1 Y Q2
                                                                        </div>
                                                                    </h5>
                                                                    </div>

                                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                                        <div class="card-body">
                                                                            <label>Q1 - Cantidad 1</label> 
                                                                            <input type="number" class="input" name="Q1" placeholder="Ingresa la cantidad 1" value = "0" step="1" min="0" max="110"/>
                                                                            <label>Q2 - Cantidad 2</label>
                                                                            <input type="number" class="input" name="Q2" placeholder="Ingresa la cantidad 2" value = "0" step="1" min="0" max="160"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--Fin Q1 Y Q2-->
                                                            </p>
                                                            <button type="submit" class="submit-btn" style="background-color: #4e656e;">Iniciar Simulación</button>
                                                            <!--Fin range input-->
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-12 col-lg-7">
                            @include('msj') 
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                            RESULTADOS DE LA ÚLTIMA SIMULACIÓN
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                <!--Aqui empieza el grafico 1-->
                                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                    <div class="widget-chat-wrapper-outer">
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                            <canvas id="myChart" width="400" height="200"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Aqui termina el grafico 1-->
                                                <!--Aqui empieza el grafico 2
                                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                                    Promedio de utilidades resultantes de cuatro simulaciones
                                                </h6>
                                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                    <div class="widget-chat-wrapper-outer">
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                            <canvas id="myChart2" width="400" height="200"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                Aqui termina el grafico 2-->
                                                @php
                                                $iteraciones = $ultSimulacionIt['utilidad_iteraciones'];
                                                $primerElemento = reset($iteraciones);
                                                $segundoElemento = next($iteraciones);
                                                $tercerElemento = next($iteraciones);
                                                $cuartoElemento = next($iteraciones);
                                                @endphp
                                                <!--Empiezan cuadros-->
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                                                            <div class="widget-content">
                                                                <div class="widget-content-outer">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left pr-2 fsize-1">
                                                                            <div class="widget-numbers mt-0 fsize-3 text-danger">{{$primerElemento}}</div>
                                                                        </div>
                                                                        <div class="widget-content-right w-100">
                                                                            <div class="progress-bar-xs progress">
                                                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left fsize-1">
                                                                        <div class="text-muted opacity-6">Iteracion 1</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                                                            <div class="widget-content">
                                                                <div class="widget-content-outer">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left pr-2 fsize-1">
                                                                            <div class="widget-numbers mt-0 fsize-3 text-success">{{$segundoElemento}}</div>
                                                                        </div>
                                                                        <div class="widget-content-right w-100">
                                                                            <div class="progress-bar-xs progress">
                                                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left fsize-1">
                                                                        <div class="text-muted opacity-6">Iteracion 2</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">   
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
                                                            <div class="widget-content">
                                                                <div class="widget-content-outer">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left pr-2 fsize-1">
                                                                            <div class="widget-numbers mt-0 fsize-3 text-warning">{{$tercerElemento}}</div>
                                                                        </div>
                                                                        <div class="widget-content-right w-100">
                                                                            <div class="progress-bar-xs progress">
                                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left fsize-1">
                                                                        <div class="text-muted opacity-6">Iteracion 3</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                                            <div class="widget-content">
                                                                <div class="widget-content-outer">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left pr-2 fsize-1">
                                                                            <div class="widget-numbers mt-0 fsize-3 text-info">{{$cuartoElemento}}</div>
                                                                        </div>
                                                                        <div class="widget-content-right w-100">
                                                                            <div class="progress-bar-xs progress">
                                                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left fsize-1">
                                                                        <div class="text-muted opacity-6">Iteracion 4</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Terminan cuadros-->
                                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                                    Resultados de la ultima simulacion
                                                </h6>
                                                @php
                                                    $Q1 = $ultSimulacion['Q1'];
                                                    $Q2 = $ultSimulacion['Q2'];
                                                    $Utilidad = $ultSimulacion['Utilidad'];
                                                @endphp
                                                <div>
                                                    <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Q1 - Cantidad 1</div>
                                                                        <div class="widget-subheading">Cantidad óptima a ordenar los primeros 10 días del mes</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">Unidades</small>
                                                                            <span>{{$Q1}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Q2 - Cantidad 2</div>
                                                                        <div class="widget-subheading">Cantidad óptima a ordenar los siguientes 20 días del mes</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">Unidades</small>
                                                                            <span>{{$Q2}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Utilidad</div>
                                                                        <div class="widget-subheading">Utilidad obtenida a partir de Q1 Y Q2</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">Bs</small>
                                                                            <span>{{$Utilidad}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Simulaciones realizadas por el usuario
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Precio de Compra (10 días)</th>
                                                <th class="text-center">Precio de Venta (10 días)</th>
                                                <th class="text-center">Precio de Devolucion (10 días)</th>
                                                <th class="text-center">Precio de Compra (20 días)</th>
                                                <th class="text-center">Precio de Venta (20 días)</th>
                                                <th class="text-center">Precio de Devolucion (20 días)</th>
                                                <th class="text-center">Cantidad 1</th>
                                                <th class="text-center">Cantidad 2</th>
                                                <th class="text-center">Utilidad Obtenida</th>
                                            </tr>
                                            </thead>
                                            @php 
                                                $counter = 1;
                                            @endphp 
                                            <tbody>
                                                @foreach($lista as $simulacion)
                                            <!-- Fila 1 -->
                                            <tr>
                                                <td class="text-center">{{$counter}}</td>
                                                @php 
                                                    $counter=$counter +1; 
                                                    
                                                @endphp
                                                <td class="text-center">{{$simulacion->c10}}</td>
                                                <td class="text-center">{{$simulacion->v10}}</td>
                                                <td class="text-center">{{$simulacion->d10}}</td>
                                                <td class="text-center">{{$simulacion->c20}}</td>
                                                <td class="text-center">{{$simulacion->v20}}</td>
                                                <td class="text-center">{{$simulacion->d20}}</td>
                                                <td class="text-center">{{$simulacion->Q1}}</td>
                                                <td class="text-center">{{$simulacion->Q2}}</td>
                                                <td>{{$simulacion->Utilidad}}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-block text-center card-footer">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                            Grafico de simulaciones realizadas por el usuario
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                            <div class="widget-chat-wrapper-outer">
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                            <canvas id="myChart3" width="400" height="200"></canvas>
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
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('myChart').getContext('2d');
        
        var datos1 = {!! json_encode($ultSimulacionMeses['utilidad_meses']) !!};
        var valores1 = Object.values(datos1);

        var myChart = new Chart(ctx, {
            type: 'bar', // Tipo de gráfico, por ejemplo, 'bar', 'line', 'pie', etc.
            data: {
                labels: ['Mes 1', 'Mes 2', 'Mes 3', 'Mes 4', 'Mes 5', 'Mes 6', 'Mes 7', 'Mes 8', 'Mes 9', 'Mes 10', 'Mes 11', 'Mes 12'],
                datasets: [{
                    label: 'Utilidad obtenida por mes',
                    data: valores1,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color de fondo
                    borderColor: 'rgba(75, 192, 192, 1)', // Color del borde
                    borderWidth: 1 // Ancho del borde
                }]
            },
            options: {
                // Configuración adicional del gráfico
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('myChart2').getContext('2d');

        var datos2 = {!! json_encode($ultSimulacionIt['utilidad_iteraciones']) !!};
        var valores2 = Object.values(datos2);

        var myChart = new Chart(ctx, {
            type: 'line', // Tipo de gráfico, por ejemplo, 'bar', 'line', 'pie', etc.
            data: {
                labels: ['Iteracion 1', 'Iteracion 2', 'Iteracion 3', 'Iteracion 4'],
                datasets: [{
                    label: 'Promedio de utilidades obtenidas',
                    data: valores2,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color de fondo
                    borderColor: 'rgba(75, 192, 192, 1)', // Color del borde
                    borderWidth: 1 // Ancho del borde
                }]
            },
            options: {
                // Configuración adicional del gráfico
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('myChart3').getContext('2d');

        // Supongamos que tienes estas variables con datos dinámicos
        var meses = @json($datosQ1Q2);
        var datos = @json($utilidades);

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: meses,
                datasets: [{
                    label: 'Utilidades obtenidas',
                    data: datos,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                // Configuración adicional del gráfico
            }
        });
    });
</script>

</body>
</html>