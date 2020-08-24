<?php
	//conexion
	require 'conexionVideo.php';

	//*SUM: suma el total de las facturas
	//sentencia SQL: número de filas de la tabla
	$sql = "SELECT SUM(total) AS totalfacturas FROM fac";

	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>