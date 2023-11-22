<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    
    <title>Document</title>

</head>
<body>
<div class="form-structor">
	<form class="form-structor" action="/clientecreado" method="POST" role="form">
		{{csrf_field()}}
		<div class="signup">	
			<h2 class="form-title" id="signup"><span></span>Registrate</h2>
			<div class="form-holder">
				<input type="text" class="input" name="nombre" placeholder="Nombre" />
				<input type="email" class="input" name="correo" placeholder="Correo" />
				<input type="password" class="input" name="contraseña" placeholder="Contraseña" />
			</div>
			<button type="submit" class="submit-btn">Registrar</button>
		</div>
	</form>
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span></span>Iniciar Sesion</h2>
			<div class="form-holder">
				<input type="email" class="input" placeholder="Correo" />
				<input type="password" class="input" placeholder="Contraseña" />
			</div>
			<button class="submit-btn">Iniciar Sesion</button>
		</div>
	</div>
</div>
<script src="/js/login.js"></script>
</body>
</html>