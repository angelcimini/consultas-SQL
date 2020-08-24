<?php
	//conexion
	require 'conexionVideo.php';

	//*AVG: promedio
	//sentencia SQL: número de filas de la tabla
	//$sql = "SELECT MAX(precio*copias) AS invmax, MIN(precio*copias) AS invmin, AVG(precio*copias) AS invpro FROM pel";

	//sentencia SQL: número de filas de la tabla
	$sql = "SELECT titulo, MAX(precio*copias) AS invmax FROM pel WHERE precio*copias = (SELECT MAX(precio*copias) FROM pel)";
	
	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>