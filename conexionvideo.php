<?php
	//conexión a la base de datos
	//host, usuario, password, base de datos
	$conexionVideo = mysqli_connect('localhost', 'root', '', 'video') or die("hubo un error al conectar con la base de datos");

	//juego de caracteres a utilizar en la conexión
	mysqli_set_charset($conexionVideo, "utf8");
?>