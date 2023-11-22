<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema1</title>
</head>
<body>
    <form action="/simulacioncreada" method="POST" role="form">
		{{csrf_field()}}
		<div class="signup">	
			<h2 class="form-title" id="signup"><span></span>AUTOMATICO</h2>
			<div class="form-holder">
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
		<div class="signup">	
			<h2 class="form-title" id="signup"><span></span>DANDO Q1 Y Q2</h2>
			<div class="form-holder">
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
