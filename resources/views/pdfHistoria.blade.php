<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .page-break {
            page-break-before: always; /* También puedes usar 'page-break-after' */
        }
    </style>
</head>
<body>
@php
    $id = $cliente['id'];
    $nombre = $cliente['nombre'];
    $correo = $cliente['correo'];
  @endphp
    <div class="container">
        <table width="100%">
          <tr>
            <td width="75px"><div style="background: #ffffff url(https://i.ibb.co/0mJkK1N/image.png);width: 50px;height: 75px;margin-right: 10px;background-position: center;background-size: 50px;"></div>   </td>
            <td width="867px"><div style="background: #4e656e;color:white;border-left: 15px solid #fff;padding-left: 30px;font-size: 26px;font-weight: bold;letter-spacing: -1px;height: 73px;line-height: 75px;">SIMULACIÓN OFICINA 11</div></td>
            <td></td>
          </tr>
        </table>
        <p>Cada una de estas simulaciónes se realizaron para simular el caso 1 del problema de ventas al por menor, con el fin de que el vendedor de revistas encuentre la política óptima de compra para cada caso.</p>
        <table width="100%" style="border-collapse: collapse;">
            <tr>
              <td widdth="50%" style="background:#eee;padding:20px;">
                <strong>Cliente que realizó la simulaciones</strong><br>
                <strong>Nombre del cliente:</strong> {{$nombre}}<br>
                <strong>Correo del cliente:</strong> {{$correo}}<br>
              </td>
              @php
                $cantidadElementos = count($lista);
              @endphp
              <td style="background:#eee;padding:20px;">
                <strong>Detalles de la simulaciones realizadas</strong><br>
                <strong>N° de Simulaciones realizadas: </strong> {{$cantidadElementos}}<br>
                <strong><br>
              </td>
            </tr>
        </table><br>
        <table width="100%" style="border-collapse: collapse; font-size: 10px;">
          <tr>
            <td width="100%">
                @php 
                    $counter = 1;
                @endphp
              <table width="100%" style="border-collapse: collapse;border-bottom:1px solid #eee;">
                <tr>
                  <td width="5%" class="column-header">#</td>
                  <td width="7%" class="column-header">Precio de Compra (10 días)</td>
                  <td width="7%" class="column-header">Precio de Venta (10 días)</td>
                  <td width="7%" class="column-header">Precio de Devolución (10 días)</td>
                  <td width="7%" class="column-header">Precio de Compra (20 días)</td>
                  <td width="7%" class="column-header">Precio de Venta (20 días)</td>
                  <td width="7%" class="column-header">Precio de Devolución (20 días)</td>
                  <td width="13%" class="column-header">Cantidad 1</td>
                  <td width="13%" class="column-header">Cantidad 2</td>
                  <td width="13%" class="column-header">Tipo</td>
                  <td width="14%" class="column-header">Utilidad Obtenida</td>
                </tr>
                @foreach($lista as $simulacion)
                <tr>
                  <td class="row">{{$counter}}</td>
                    @php 
                        $counter=$counter +1; 
                        $tipo = $simulacion->tipo;
                    @endphp
                  <td class="row">{{$simulacion->c10}} Bs.</td>
                  <td class="row">{{$simulacion->v10}} Bs.</td>
                  <td class="row">{{$simulacion->d10}} Bs.</td>
                  <td class="row">{{$simulacion->c20}} Bs.</td>
                  <td class="row">{{$simulacion->v20}} Bs.</td>
                  <td class="row">{{$simulacion->d20}} Bs.</td>
                  <td class="row">{{$simulacion->Q1}} Uds.</td>
                  <td class="row">{{$simulacion->Q2}} Uds.</td>
                  @if($tipo == 1)
                  <td class="row">Automatica</td>
                  @elseif($tipo == 2)
                  <td class="row">Ingresando valores de cantidad</td>
                  @endif
                  <td class="row">{{$simulacion->Utilidad}} Bs.</td>
                  @if($counter == 10)
                  <div class="page-break"></div>
                  @elseif($counter == 31)
                  <div class="page-break"></div>
                  @elseif($counter == 51)
                  <div class="page-break"></div>
                  @endif
                </tr>
                @endforeach    
                </tr> 
              </table>
            </td>
          </tr>
        </table>
    </div><!-- container -->
</body>
<style>
  body {
    font-family: Helvetica, sans-serif;
    font-size:13px;
  }
  .container{
    max-width: 950px; 
    margin:0 auto;
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
</style>
</html>