<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/detalleSimu.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/yhqCG51/osito-Icono.png" />
    <meta name="theme-color" content="#1885ed">
    <title>SimulaRevistas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
@php
        $id = $cliente['id'];
        $nombre = $cliente['nombre'];
        $correo = $cliente['correo'];
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
                    </div>-->
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="{{url ('/cliente/'. $id )}}" class="nav-link">
                            <i class="fa fa-arrow-left nav-link-icon"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url ('/cliente/'. $id .'/ayuda')}}" class="nav-link">
                            <i class="fa fa-question-circle nav-link-icon"></i>
                                Ayuda
                            </a>
                        </li>
                    </ul>    
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
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <div type="button" tabindex="0" class="dropdown-item">
                                                <a href="{{url ('/')}}">Cerrar sesión</a>
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
        @php
            $idSimu = $simulacion['id'];
            $c10 = $simulacion['c10'];
            $v10 = $simulacion['v10'];
            $d10 = $simulacion['d10'];
            $c20 = $simulacion['c20'];
            $v20 = $simulacion['v20'];
            $d20 = $simulacion['d20'];
            $Q1 = $simulacion['Q1'];
            $Q2 = $simulacion['Q2'];
            $Utilidad = $simulacion['Utilidad'];
            $tipo = $simulacion['tipo'];

            $iteraciones = $simulacionIt['utilidad_iteraciones'];
            $primerElemento = reset($iteraciones);
            $segundoElemento = next($iteraciones);
            $tercerElemento = next($iteraciones);
            $cuartoElemento = next($iteraciones);
        @endphp
        <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner">
                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <h4>SIMULACIÓN {{$counterm}}:</h4>
                                    </div>
                                    @php 
                                        $counterm=$counterm; 
                                    @endphp
                                    <ul class="nav">
                                        <a href="{{ url('/cliente/'.$id.'/simulacion/'.$simulacion->id.'/pdf?counterm='.$counterm) }}" title="Ver Detalle en pdf" style="background-color: #e2504c; color: white; padding: 9px; margin-left:10px; margin-top:10px;margin-bottom:10px; border-radius: 3px;">
                                        Exportar a pdf <i class="fa fa-file"></i>
                                        </a>  
                                        <a href="{{ url('/cliente/'.$id.'/simulacion/'.$simulacion->id.'/excel?counterm='.$counterm) }}" title="Ver Detalle en excel" style="background-color: #91c470; color: white; padding: 9px; margin-left:10px; margin-top:10px;margin-bottom:10px; border-radius: 3px;">
                                        Exportar a excel <i class="fa fa-file"></i>
                                        </a>  
                                    </ul>
                                </div>
                    <div class="row">
                       <div class="col-md-12 col-lg-6">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                        DETALLE de datos DE LA SIMULACIÓN {{$counterm}}:
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="card">
                                        <div class="card__main">
                                        <div class="card__row">
                                            <div class="card__icon"><i class="fa fa-usd"></i></div>
                                            <div class="card__time">
                                            <div>Costo de Compra<p> (10 días)</div>
                                            </div>
                                            <div class="card__detail">
                                            <div class="card__source text-bold">{{$c10}} Bs.</div>
                                            <div class="card__description">Valor que el vendedor de revistas le pago al proovedor por cada revista en los primeros 10 días del mes o el primer periodo.</div>
                                            </div>
                                        </div>
                                        <div class="card__row">
                                            <div class="card__icon"><i class="fa fa-usd"></i></div>
                                            <div class="card__time">
                                            <div>Costo de Venta<p> (10 días)</div>
                                            </div>
                                            <div class="card__detail">
                                            <div class="card__source text-bold">{{$v10}} Bs.</div>
                                            <div class="card__description">Valor que el vendedor de revistas les cobrará a los clientes por cada revista en los primeros 10 días del mes o el primer periodo.</div>
                                            </div>
                                        </div>
                                        <div class="card__row">
                                            <div class="card__icon"><i class="fa fa-usd"></i></div>
                                            <div class="card__time">
                                            <div>Costo de Devolución<p> (10 días)</div>
                                            </div>
                                            <div class="card__detail">
                                            <div class="card__source text-bold">{{$d10}} Bs.</div>
                                            <div class="card__description">Precio que pagará el proovedor al vendedor de revistas por cada revista que no se vendio en los primeros 10 días del mes o el primer periodo.</div>
                                            </div>
                                        </div>
                                        <div class="card__row">
                                            <div class="card__icon"><i class="fa fa-usd"></i></div>
                                            <div class="card__time">
                                            <div>Costo de Compra<p> (20 días)</div>
                                            </div>
                                            <div class="card__detail">
                                            <div class="card__source text-bold">{{$c20}} Bs.</div>
                                            <div class="card__description">Valor que el vendedor de revistas le pago al proovedor por cada revista en los siguientes 20 días del mes o el segundo periodo.</div>
                                            </div>
                                        </div>
                                        <div class="card__row">
                                            <div class="card__icon"><i class="fa fa-usd"></i></div>
                                            <div class="card__time">
                                            <div>Costo de Venta<p> (20 días)</div>
                                            </div>
                                            <div class="card__detail">
                                            <div class="card__source text-bold">{{$v20}} Bs.</div>
                                            <div class="card__description">Valor que el vendedor de revistas  les cobrará a los clientes por cada revista en los siguientes 20 días del mes o el segundo periodo.</div>
                                            </div>
                                        </div>
                                        <div class="card__row">
                                            <div class="card__icon"><i class="fa fa-usd"></i></div>
                                            <div class="card__time">
                                            <div>Costo de Devolución<p> (20 días)</div>
                                            </div>
                                            <div class="card__detail">
                                            <div class="card__source text-bold">{{$d20}} Bs.</div>
                                            <div class="card__description">Precio que pagará el proovedor al vendedor de revistas por cada revista que no se vendio en los siguientes 20 días del mes o el segundo periodo.</div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                         Gráfico de Utilidades netas de 12 meses
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="card-body" style="padding-bottom: 1px;">
                                        <!--Aqui empieza el grafico 1-->
                                        <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                    <canvas id="myChart" width="400" height="200"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Aqui termina el grafico 1-->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                                        <div class="widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left pr-2 fsize-1">
                                                        <div class="widget-numbers mt-0 fsize-3 text-danger">{{$primerElemento}}Bs.</div>
                                                    </div>
                                                    <div class="widget-content-right w-100">
                                                        <div class="progress-bar-xs progress">
                                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left fsize-1">
                                                    <div class="text-muted opacity-6">Iteración 1</div>
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
                                                        <div class="widget-numbers mt-0 fsize-3 text-success">{{$segundoElemento}}Bs.</div>
                                                    </div>
                                                    <div class="widget-content-right w-100">
                                                        <div class="progress-bar-xs progress">
                                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left fsize-1">
                                                    <div class="text-muted opacity-6">Iteración 2</div>
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
                                                        <div class="widget-numbers mt-0 fsize-3 text-warning">{{$tercerElemento}}Bs.</div>
                                                    </div>
                                                    <div class="widget-content-right w-100">
                                                        <div class="progress-bar-xs progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left fsize-1">
                                                    <div class="text-muted opacity-6">Iteración 3</div>
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
                                                        <div class="widget-numbers mt-0 fsize-3 text-info">{{$cuartoElemento}}Bs.</div>
                                                    </div>
                                                    <div class="widget-content-right w-100">
                                                        <div class="progress-bar-xs progress">
                                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left fsize-1">
                                                    <div class="text-muted opacity-6">Iteración 4</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header" style="background-color: #4e656e; color:white;">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                        CONCLUSIóN
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                <!--Terminan cuadros-->
                                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                                    Resultados de la simulacion {{$idSimu}}:
                                                </h6>
                                                @php
                                                    $Q1 = $simulacion['Q1'];
                                                    $Q2 = $simulacion['Q2'];
                                                    $Utilidad = $simulacion['Utilidad'];
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
                                                                        <div class="widget-heading">Cantidad 1</div>
                                                                        <div class="widget-subheading">Cantidad de revistas a comprar los primeros 10 días del mes</div>
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
                                                                        <div class="widget-heading">Cantidad 2</div>
                                                                        <div class="widget-subheading">Cantidad de revistas a comprar los siguientes 20 días del mes</div>
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
                                                                        <div class="widget-heading">Utilidad Neta</div>
                                                                        <div class="widget-subheading">Utilidad neta obtenida a partir de ordenar Cantidad 1 y Cantidad 2</div>
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
                                    <div class="d-block card-footer">
                                        @php
                                            $tipo = $simulacion['tipo'];
                                        @endphp
                                        @if($tipo == 1)
                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Resultado de simulación Automática:</div>
                                                            <div style="color:black;">Con los valores dados el vendedor debera comprar {{$Q1}} Uds. de revistas los primeros 10 días del mes y {{$Q2}} Uds. de revistas los siguientes 20 días del mes para así obtener la ganancia máxima posible que es: {{$Utilidad}} Bs.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        @elseif($tipo == 2)
                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Simulación ingresando los valores de "Cantidad 1" y "Cantidad 2":</div>
                                                            <div class="widget-subheading" style="color:black;">Si el vendedor de revistas compra {{$Q1}} Uds. de revistas los primeros 10 días del mes y {{$Q2}} Uds. de revistas los siguientes 10 días del mes, entonces obtendra una Utilidad Neta de {{$Utilidad}} Bs.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        @endif
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('myChart').getContext('2d');
        
        var datos1 = {!! json_encode($simulacionMeses['utilidad_meses']) !!};
        var valores1 = Object.values(datos1);

        var myChart = new Chart(ctx, {
            type: 'bar', // Tipo de gráfico, por ejemplo, 'bar', 'line', 'pie', etc.
            data: {
                labels: ['Mes 1', 'Mes 2', 'Mes 3', 'Mes 4', 'Mes 5', 'Mes 6', 'Mes 7', 'Mes 8', 'Mes 9', 'Mes 10', 'Mes 11', 'Mes 12'],
                datasets: [{
                    label: 'Utilidad obtenida por mes (Bs.)',
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
</body>
</html>