<?php
	//conexion
	require 'conexionVideo.php';

	//*$sql = "SELECT * FROM pel WHERE tipo='COMEDIA'";
	//*$sql = "SELECT * FROM pel WHERE tipo !=	'COMEDIA'"; //Se muestran todas las películas que no son del tipo comedia
	//*$sql = "SELECT * FROM pel WHERE precio >=12 AND tipo='COMEDIA'"; //Todas las películas que son >=12 y de tipo COMEDIA

	//sentencia SQL: número de filas de la tabla
	//$sql = "SELECT * FROM pel WHERE tipo !=	'COMEDIA'";
	//$sql = "SELECT * FROM pel WHERE precio >=	30";

	//Facturas que están pedientes de devolver: es decir que están en NULL
	//$sql = "SELECT * FROM fac WHERE dev IS NULL";

	//Facturas que no se han devuelto: NOT NULL 
	$sql = "SELECT * FROM fac WHERE dev IS NOT NULL";


	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>