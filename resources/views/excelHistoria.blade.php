<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Simulaciones</title>
</head>
<body>
    <h2> </h2>
    <h2> </h2>
    <h2> </h2>
    <h2> </h2>
    <h2> </h2>
    <h2> </h2>
    <table style="border-collapse: collapse; width: 100%; text-align: center;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="border: 1px solid #dddddd; padding: 8px;"></th>
                <th style="border: 1px solid #dddddd; padding: 8px;">#</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">PRECIO DE <br>COMPRA <br>(10 DÍAS)</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">PRECIO DE <br>VENTA <br>(10 DÍAS)</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">PRECIO DE <br>DEVOLUCIÓN <br>(10 DÍAS)</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">PRECIO DE <br>COMPRA <br>(20 DÍAS)</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">PRECIO DE <br>VENTA <br>(20 DÍAS)</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">PRECIO DE <br>DEVOLUCIÓN <br>(20 DÍAS)</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">CANTIDAD 1</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">CANTIDAD 2</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">UTILIDAD NETA<br> OBTENIDA</th>
            </tr>
        </thead>
        <tbody>
            @foreach($simulaciones as $simulacion)
            <tr>
                <td style="border: 1px solid #dddddd; padding: 8px;"></td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $loop->iteration }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $simulacion->c10 }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $simulacion->v10 }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $simulacion->d10 }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $simulacion->c20 }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $simulacion->v20 }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $simulacion->d20 }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $simulacion->Q1 }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $simulacion->Q2 }}</td>
                @if($simulacion->tipo == 1)
                <td style="border: 1px solid #dddddd; padding: 8px;">Automática</td>
                @elseif($simulacion->tipo == 2)
                <td style="border: 1px solid #dddddd; padding: 8px;">Simulación ingresando "Cantidad 1" y "Cantidad 2"</td>
                @endif
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $simulacion->Utilidad }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

