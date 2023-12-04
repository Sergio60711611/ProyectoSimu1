<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/yhqCG51/osito-Icono.png" />
    <meta name="theme-color" content="#1885ed">
    <title>SimulaRevistas</title>
</head>
<body>
<div>
@if(Session::has('alert'))
        <script>
            alert("{{ Session::get('alert') }}");
        </script>
@endif
<div class="form-structor">
	<form class="form-structor" action="/clientecreado" method="POST" role="form">
		{{csrf_field()}}
		<div class="signup">	
			<h2 class="form-title" id="signup"><span></span>Registrate</h2>
			<div class="form-holder">
				<input type="text" class="input" name="nombre" placeholder="Nombre" />
					@error('nombre')
                        <p1 class="error-message">{{ $message }}</p1>
                    @enderror
				<input type="email" class="input" name="correo" placeholder="Correo" />
					@error('correo')
                        <p1 class="error-message">{{ $message }}</p1>
                    @enderror
				<input type="password" class="input" name="contraseña" placeholder="Contraseña" />
				    @error('contraseña')
                        <p1 class="error-message">{{ $message }}</p1>
                    @enderror
			</div>
			<button type="submit" class="submit-btn">Registrar</button>
		</div>
	</form>
	<form action="/inicioSesion" method="POST" role="form">
	{{csrf_field()}}
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span></span>Iniciar Sesion</h2>
			<div class="form-holder">
				<input name="correo" type="email" class="input" placeholder="Correo" />
						@error('correo')
                            <p1 class="error-message">{{ $message }}</p1>
                        @enderror
				<input name="contraseña" type="password" class="input" placeholder="Contraseña" />
						@error('contraseña')
                            <p1 class="error-message">{{ $message }}</p1>
                        @enderror
			</div>
			<button type="submit" class="submit-btn">Iniciar Sesion</button>
		</div>
	</div>
	</form>
</div>
<script src="/js/login.js"></script>
</div>
</body>
</html>