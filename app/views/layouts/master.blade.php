<html lang="es">
	<head>
		<title>
			@section('titulo')
				Curso de laravel
			@show
		</title>
			@section('cabecera')
				<link rel="stylesheet" type="text/css" href="estilos.css">
			@show
	</head>
	<body>
		@yield('contenido')
		<footer>
			@yield('pie')
		</footer>
	</body>
</html>