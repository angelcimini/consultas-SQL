<?php
	//conexion
	require 'conexionVideo.php';
	
	//numero de películas de cada tipo excepto las de ciencia ficción
	$sql = "SELECT tipo, SUM(copias) AS numcopias FROM pel WHERE tipo <> 'CI-FI' GROUP BY tipo";


	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>