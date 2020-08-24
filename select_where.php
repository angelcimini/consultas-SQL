<?php
	//conexion
	require 'conexionVideo.php';

	//*$sql = "SELECT * FROM pel WHERE tipo='COMEDIA'";
	//*$sql = "SELECT * FROM pel WHERE tipo !=	'COMEDIA'"; //Se muestran todas las películas que no son del tipo comedia
	//*$sql = "SELECT * FROM pel WHERE precio >=12 AND tipo='COMEDIA'"; //Todas las películas que son >=12 y de tipo COMEDIA

	//sentencia SQL: número de filas de la tabla
	//$sql = "SELECT * FROM pel WHERE tipo !=	'COMEDIA'";
	//$sql = "SELECT * FROM pel WHERE precio >=	30";

	$sql = "SELECT * FROM pel WHERE precio >=12 AND tipo='COMEDIA'";



	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>