<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/simulacion.css">
    <title>Problema1</title>
</head>
<body>
    <form action="/simulacioncreada" method="POST" role="form">
		{{csrf_field()}}
		<div class="izquierda">	
			<h2 class="form-title" id="signup"><span></span>AUTOMATICO</h2>
			<div class="left-form">
                <input type="number" class="input" name="c10" placeholder="c10" step="0.01" />
                <input type="number" class="input" name="v10" placeholder="v10" step="0.01" />
                <input type="number" class="input" name="d10" placeholder="d10" step="0.01" />
                <input type="number" class="input" name="c20" placeholder="c20" step="0.01" />
                <input type="number" class="input" name="v20" placeholder="v20" step="0.01" />
                <input type="number" class="input" name="d20" placeholder="d20" step="0.01" />
			</div>
			<button type="submit" class="submit-btn">Registrar</button>
		</div>
	</form>
    <form action="/simulacioncreadaEntrada" method="POST" role="form">
		{{csrf_field()}}
		<div class="derecha">	
			<h2 class="form-title" id="signup"><span></span>DANDO Q1 Y Q2</h2>
			<div class="right-form">
                <input type="number" class="input" name="c10" placeholder="c10" step="0.01" />
                <input type="number" class="input" name="v10" placeholder="v10" step="0.01" />
                <input type="number" class="input" name="d10" placeholder="d10" step="0.01" />
                <input type="number" class="input" name="c20" placeholder="c20" step="0.01" />
                <input type="number" class="input" name="v20" placeholder="v20" step="0.01" />
                <input type="number" class="input" name="d20" placeholder="d20" step="0.01" />
                <input type="number" class="input" name="Q1" placeholder="Q1" step="0.01" />
                <input type="number" class="input" name="Q2" placeholder="Q2" step="0.01" />
			</div>
			<button type="submit" class="submit-btn">Registrar</button>
		</div>
	</form>
<div class="tabladerecha">
    <table>
  <thead>
    <tr>
      <th>Columna 1</th>
      <th>Columna 2</th>
      <th>Columna 3</th>
      <th>Columna 4</th>
      <th>Columna 5</th>
      <th>Columna 6</th>
      <th>Columna 7</th>
      <th>Columna 8</th>
    </tr>
  </thead>
  <tbody>
    <!-- Fila 1 -->
    <tr>
      <td>Fila 1, Col 1</td>
      <td>Fila 1, Col 2</td>
      <td>Fila 1, Col 3</td>
      <td>Fila 1, Col 4</td>
      <td>Fila 1, Col 5</td>
      <td>Fila 1, Col 6</td>
      <td>Fila 1, Col 7</td>
      <td>Fila 1, Col 8</td>
    </tr>

    <!-- Fila 2 -->
    <tr>
      <td>Fila 2, Col 1</td>
      <td>Fila 2, Col 2</td>
      <td>Fila 2, Col 3</td>
      <td>Fila 2, Col 4</td>
      <td>Fila 2, Col 5</td>
      <td>Fila 2, Col 5</td>
      <td>Fila 2, Col 5</td>
      <td>Fila 2, Col 5</td>
    </tr>
<!-- Fila 3 -->
    <tr>
      <td>Fila 3, Col 1</td>
      <td>Fila 3, Col 2</td>
      <td>Fila 3, Col 3</td>
      <td>Fila 3, Col 4</td>
      <td>Fila 3, Col 5</td>
      <td>Fila 3, Col 6</td>
      <td>Fila 3, Col 7</td>
      <td>Fila 3, Col 8</td>
    </tr>
<!-- Fila 4 -->
    <tr>
      <td>Fila 4, Col 1</td>
      <td>Fila 4, Col 2</td>
      <td>Fila 4, Col 3</td>
      <td>Fila 4, Col 4</td>
      <td>Fila 4, Col 5</td>
      <td>Fila 4, Col 6</td>
      <td>Fila 4, Col 7</td>
      <td>Fila 4, Col 8</td>
    </tr>
<!-- Fila 5 -->
    <tr>
      <td>Fila 5, Col 1</td>
      <td>Fila 5, Col 2</td>
      <td>Fila 5, Col 3</td>
      <td>Fila 5, Col 4</td>
      <td>Fila 5, Col 5</td>
      <td>Fila 5, Col 6</td>
      <td>Fila 5, Col 7</td>
      <td>Fila 5, Col 8</td>
    </tr>

    <!-- ... Repite este patrón para las filas restantes ... -->

  </tbody>
</table>
</div>

</body>
</html>
<script>
    // Assuming $sum is available in the view
    var sum = {{ $sum ?? 0 }}; // Default to 0 if $sum is not set
    var MejorQ1 = {{ $MejorQ1 ?? 0 }};
    var MejorQ2 = {{ $MejorQ2 ?? 0 }};

    // Show the sum in an alert when the page loads
    window.onload = function() {
        alert('The sum is: ' + sum + 'Q1: '+ MejorQ1 + 'Q2:'+ MejorQ2);
    };
</script>
