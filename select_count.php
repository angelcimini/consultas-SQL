<?php
	//conexion
	require 'conexionVideo.php';

	//sentencia SQL: número de filas de la tabla
	$sql = "SELECT COUNT(*) AS numfilas FROM pel WHERE tipo= 'COMEDIA'";

	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	$filas = mysqli_fetch_assoc($resultado);

	print_r($filas);

	//* ".$filas['numfilas']; :formar de encontrar el numero de filas en el array
	//Saber el número de filas que tiene la tabla

	echo "El número de filas es ".$filas['numfilas'];

?>