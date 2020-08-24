<?php
	//conexion
	require 'conexionVideo.php';
	
	//cuantas películas se han alquilado en cada factura
	//$sql = "SELECT f_num, COUNT(*) FROM f_p GROUP BY f_num";

	//$sql = "SELECT f_num, COUNT(*) AS f_p GROUP BY f_num";

	//numero de películas de cada tipo
	$sql = "SELECT tipo, SUM (copias) AS numcopias FROM pel GROUP BY tipo";


	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>