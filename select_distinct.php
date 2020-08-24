<?php
	//conexion
	require 'conexionVideo.php';

	//sentencia SQL: número de filas de la tabla
	$sql = "SELECT DISTINCT tipo FROM pel";

	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
	}

?>