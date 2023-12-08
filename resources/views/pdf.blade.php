<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/yhqCG51/osito-Icono.png" />
    <meta name="theme-color" content="#1885ed">
    <title>SimulaRevistas</title>
</head>
<body>
@php
    $id = $cliente['id'];
    $nombre = $cliente['nombre'];
    $correo = $cliente['correo'];
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
          $meses = $simulacionMeses['utilidad_meses'];
          $mes1 = reset($meses);
          $mes2 = next($meses);
          $mes3 = next($meses);
          $mes4 = next($meses);
          $mes5 = next($meses);
          $mes6 = next($meses);
          $mes7 = next($meses);
          $mes8 = next($meses);
          $mes9 = next($meses);
          $mes10 = next($meses);
          $mes11 = next($meses);
          $mes12 = next($meses);
  @endphp
    <div class="container">
        <table width="100%">
          <tr>
            <td width="75px"><div style="background: #ffffff url(https://i.ibb.co/0mJkK1N/image.png);width: 50px;height: 75px;margin-right: 10px;background-position: center;background-size: 50px;"></div> </td>
            <td width="600px"><div style="background: #4e656e;color:white;border-left: 15px solid #fff;padding-left: 30px;font-size: 26px;font-weight: bold;letter-spacing: -1px;height: 73px;line-height: 75px;">SIMULACIÓN OFICINA 11</div></td>
            <td></td>
          </tr>
        </table>
        <p>Esta simulación se realizo para simular el caso 1 del problema de ventas al por menor, con el fin de que el vendedor de revistas encuentre la política óptima de compra.</p>
        <table width="100%" style="border-collapse: collapse;">
            <tr>
              <td widdth="50%" style="background:#eee;padding:20px;">
                <strong>Cliente que realizó la simulación</strong><br>
                <strong>Nombre del cliente:</strong> {{$nombre}}<br>
                <strong>Correo del cliente:</strong> {{$correo}}<br>
              </td>
              <td style="background:#eee;padding:20px;">
                <strong>Detalles de la simulación realizada</strong><br>
                <strong>N° de Simulación:</strong> {{$counterm}}<br>
                @if($tipo == 1)
                <strong>Tipo de Simulación:</strong> Automática<br>
                @elseif($tipo == 2)
                <strong>Tipo de Simulación:</strong> Simulación ingresando "Cantidad 1" y "Cantidad 2"<br>
                @endif
              </td>
            </tr>
        </table><br>
        <table width="100%">
          <tr>
            <td>
              <table>
                <tr>
                  <td style="vertical-align: text-top;">
                    <div style="background: #6e98a9 url(https://i.ibb.co/kqsJ5S3/Imagen3.png);width: 40px;height: 40px;margin-right: 10px;background-position: center;background-size: 35px; border-radius: 30px;"></div>   
                  </td>
                  <td>
                    <strong>DETALLE DE VALORES-DATOS DE LA SIMULACIÓN</strong><br>
                    Costo de Compra (10 días)...........{{$c10}}Bs.<br>
                    Costo de Venta (10 días)...............{{$v10}} Bs.<br>
                    Costo de Devolución (10 días)......{{$d10}}Bs.<br>
                    Costo de Compra (20 días)...........{{$c20}}Bs.<br>
                    Costo de Venta (20 días)...............{{$v20}} Bs.<br>
                    Costo de Devolución (20 días)......{{$d20}}Bs.<br>
                  </td>
                </tr>
              </table>
            </td>
            <td>
            </td>
          </tr>
        </table><br>
        <table width="100%" style="border-collapse: collapse; font-size: 10px;">
          <tr>
            <td width="45%">
              <table width="100%" style="border-collapse: collapse;border-bottom:1px solid #eee;">
                <tr>
                  <td width="40%" class="column-header" style="padding-top:10px;">Mes</td>
                  <td width="60%" class="column-header" style="padding-top:10px;">Utilidad neta del mes</td>
                </tr>
                <tr>
                  <td class="row">Mes 1</td>
                  <td class="row">{{$mes1}} Bs.</td>
                </tr>
                <tr>
                    <td class="row">Mes 2</td>
                    <td class="row">{{$mes2}} Bs.</td>
                </tr>     
                <tr>
                    <td class="row">Mes 3</td>
                    <td class="row">{{$mes3}} Bs.</td>
                </tr>  
                <tr>
                    <td class="row">Mes 4</td>
                    <td class="row">{{$mes4}} Bs.</td>
                </tr>  
                <tr>
                    <td class="row">Mes 5</td>
                    <td class="row">{{$mes5}} Bs.</td>
                </tr>  
                <tr>
                    <td class="row">Mes 6</td>
                    <td class="row">{{$mes6}} Bs.</td>
                </tr>
                <tr>
                    <td class="row">Mes 7</td>
                    <td class="row">{{$mes7}} Bs.</td>
                </tr>    
                <tr>
                    <td class="row">Mes 8</td>
                    <td class="row">{{$mes8}} Bs.</td>
                </tr>  
                <tr>
                    <td class="row">Mes 9</td>
                    <td class="row">{{$mes9}} Bs.</td>
                </tr>  
                <tr>
                    <td class="row">Mes 10</td>
                    <td class="row">{{$mes10}} Bs.</td>
                </tr>  
                <tr>
                    <td class="row">Mes 11</td>
                    <td class="row">{{$mes11}} Bs.</td>
                </tr>  
                <tr>
                    <td class="row">Mes 12</td>
                    <td class="row">{{$mes12}} Bs.</td>
                </tr>  
              </table>
            </td>
            <td width="10%">
            </td>
            <td width="45%" style="vertical-align: bottom;">
              <h6>GRÁFICO DE UTILIDADES NETAS DE 12 MESES</h6>
              <div style="background: #ffffff url(https://i.ibb.co/q1CMf5g/descarga-1.png);width: 300px;height: 150px;margin-right: 10px;background-position: center;background-size: 300px;"></div>  
              <p></p>
              <table width="100%" style="border-collapse: collapse;border-bottom:1px solid #eee; margin-top: 1px;">
                <tr>
                  <td width="40%" class="column-header" style="padding:10px;">N° de Iteración</td>
                  <td width="60%" class="column-header" style="padding:10px;">Promedio de Utilidades netas de la iteración</td>
                </tr>
                <tr>
                  <td class="row">Iteración 1</td>
                  <td class="row">{{$primerElemento}} Bs.</td>
                </tr>
                <tr>
                  <td class="row">Iteración 2</td>
                  <td class="row">{{$segundoElemento}} Bs.</td>
                </tr>     
                <tr>
                  <td class="row">Iteración 3</td>
                  <td class="row">{{$tercerElemento}} Bs.</td>
                </tr>
                <tr>
                  <td class="row">Iteración 4</td>
                  <td class="row">{{$cuartoElemento}} Bs.</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <br>
        <table width="100%" style="border-top:1px solid #eee;border-bottom:1px solid #eee;padding:0 0 8px 0">
          <tr>
            <td>Se realizaron cuatro Iteraciones, en cada una de las cuales se obtuvo el promedio de utilidades netas de doce meses.
            Se obtuvo entonces los siguientes resultados:<td>
          </tr>
        </table><br>
        <table width="100%" style="background:#eee;padding-bottom:20px;">
          <tr>
            <td>
              <table width="300px" style="float:right">
                <tr>
                  <td><strong>Utilidad Neta: </strong></td>
                  <td style="text-align:right">{{$Utilidad}} Bs.</td>
                </tr>  
                <tr>
                  <td><strong>Cantidad 1:</strong></td>    
                  <td style="text-align:right">{{$Q1}} Uds.</td>
                </tr>
                <tr>
                  <td><strong>Cantidad 2:</strong></td>    
                  <td style="text-align:right">{{$Q2}} Uds.</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      
        @if($tipo == 1)
      <div class="alert">Se realizo una Simulación Automática. Con los valores-datos dados el vendedor debera pedir {{$Q1}} Uds. de revistas los primeros 10 días del mes y {{$Q2}} Uds. de revistas los siguientes 20 días del mes para así obtener la ganancia máxima posible que es: {{$Utilidad}} Bs.</div>
      @elseif($tipo == 2)
      <div class="alert">Se realizo una Simulación ingresando "Cantidad 1" y "Cantidad 2". Con los valores-datos dados si el vendedor de revistas pide {{$Q1}} Uds. de revistas los primeros 10 días del mes y {{$Q2}} Uds. de revistas los siguientes 10 días del mes, entonces obtendra una Utilidad Neta de {{$Utilidad}} Bs.</div>
      @endif
    </div><!-- container -->
</body>
<style>
  body {
    font-family: Helvetica, sans-serif;
    font-size:13px;
  }
  .container{
    max-width: 680px; 
    margin:0 auto;
  }
  .logotype{
    background:#000;
    color:#fff;width:75px;
    height:75px;  
    line-height: 75px; 
    text-align: center; 
    font-size:11px;
  }
  .column-title{
    background:#eee;
    text-transform:uppercase;
    padding:15px 5px 15px 15px;
    font-size:11px
  }
  .column-detail{
    border-top:1px solid #eee;
    border-bottom:1px solid #eee;
  }
  .column-header{
    background:#eee;
    text-transform:uppercase;
    padding:15px;
    font-size:11px;
    border-right:1px solid #eee;
  }
  .row{
    padding:7px 14px;
    border-left:1px solid #eee;
    border-right:1px solid #eee;
    border-bottom:1px solid #eee;
  }
  .alert{
    background: #7a8082;
    padding:15px;
    margin-top:50px;
    line-height:22px;
    color:white;
    }
</style>
</html>