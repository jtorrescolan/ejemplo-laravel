<html>
	<head>
		<title>Mi primera vista en laravel</title>
	</head>
	<body bgcolor="#45C7BB">
		<center><p>Esta es mi segunda vista</p></center>
		<?php echo "El nombre es ". $nombre;?>
		<?php echo "<br>El apellido es ". $apellido;?>
		<?php echo "<br>El telefono es ". $telefono;?>
		<?php echo '<br>'.Session::get('mensaje');?>
	</body>
</html>